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
     * Display a listing of the resource.
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
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function show(string $uuid, CityRepository $repository)
    {
        $city = $repository->findByUuid($uuid);
        return $this->response('city.show', $city);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCityRequest  $request
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCityRequest $request, CityRepository $repository)
    {
        $city = $repository->findByUuid($request->city);
        $data = $request->validated();
        $city = $repository->update($city->id, $data);
        return $this->response('city.update', $city);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, CityRepository $repository)
    {
        $city = $repository->findByUuid($request->city);
        $repository->delete($city->id);
        return $this->response('city.delete', $city);
    }

}
