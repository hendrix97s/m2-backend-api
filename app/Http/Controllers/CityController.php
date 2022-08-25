<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCityRequest;
use App\Http\Requests\UpdateCityRequest;
use App\Models\City;
use App\Repositories\CityRepository;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * 
     * Display a listing of the resource.
     * @group City
     * @response {
     *  "status":true,
     *  "message":"List of cities",
     *  "data":[
     *    {
     *      "uuid":"33cee53c-2507-4e07-a5d8-61d3d48f8c35",
     *      "slug":"port-magdalen",
     *      "name":"Port Magdalen",
     *      "country":"Togo",
     *      "state":"Colorado"
     *    },
     * ]}
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function index(CityRepository $repository)
    {
      $repository->getAll();
      return $this->response('city.list', $repository->getAll());
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @group City
     * @bodyParam name string required string The name of city. Example: Araras
     * @bodyParam state string required string The state of city. Example: SP.
     * @bodyParam country string required string Name of country. Example: Brazil
     * 
     * @response {
     *  "status": true,
     *  "message": "New city created",
     *  "data": {
     *    "name": "Araras",
     *    "state": "SP",
     *    "country": "Brazil",
     *    "uuid": "207f591a-ed61-4afd-b095-55516a0508b0",
     *    "slug": "araras"
     *  }
     *}
     * @param  \App\Http\Requests\StorecityRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCityRequest $request, CityRepository $repository)
    {
        $data = $request->validated();
        $city = $repository->create($data);
        return $this->response('city.create', $city);
    }

    /**
     * Display the specified resource.
     * 
     * @group City
     * @urlParam uuid required The Uuid of the City. Example: a9d2b989-6aa3-40d4-acf3-a4ba29f867c4
     * @response {
     *  "status": true,
     *  "message": "City found successfully",
     *  "data": {
     *    "uuid": "a9d2b989-6aa3-40d4-acf3-a4ba29f867c4",
     *    "slug": "araras",
     *    "name": "Araras",
     *    "country": "Brazil",
     *    "state": "SP"
     *  }
     *}
     * @param  string $uuid
     * @return \Illuminate\Http\Response
     */
    public function show(string $uuid, CityRepository $repository)
    {
        $city = $repository->findByUuid($uuid);
        $code = $city ? 200 : 404;
        return $this->response('city.show', $city, $code);
    }

    /**
     * Update the specified resource in storage.
     * @group City
     * @urlParam uuid string required The Uuid of the City. Example: a9d2b989-6aa3-40d4-acf3-a4ba29f867c4
     * @bodyParam name string The name of city. Example: Araras
     * @bodyParam state string The state of city. Example: SP.
     * @bodyParam country string Name of country. Example: Brazil
     * @response {
     *   "status": true,
     *   "message": "city updated",
     *   "data": {
     *     "uuid": "6c08ade6-9a23-4e73-b6a1-eb3732f390fe",
     *     "slug": "araras-updated",
     *     "name": "Araras updated",
     *     "country": "Brazil",
     *     "state": "SP"
     *   }
     * }
     * @param  \App\Http\Requests\UpdateCityRequest  $request
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCityRequest $request, CityRepository $repository)
    {
        $city = $repository->findByUuid($request->uuid);
        $data = $request->validated();
        $response = $city ? $repository->update($city->id, $data): false;
        $code = $city ? 200 : 404;

        return $this->response('city.update', $response, $code);
    }

    /**
     * Remove the specified resource from storage.
     * @group City
     * @urlParam uuid string required The Uuid of the City. Example: a9d2b989-6aa3-40d4-acf3-a4ba29f867c4
     * @response {
     *   "status": true,
     *   "message": "City deleted",
     *   "data": []
     * }
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, CityRepository $repository)
    {
        $city = $repository->findByUuid($request->uuid);

        $response = $city ? $repository->delete($city->id):false;
        $code = $city ? 200 : 404;
        return $this->response('city.delete', $response, $code);
    }

}
