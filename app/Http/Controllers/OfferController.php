<?php

namespace App\Http\Controllers;

use App\Http\Requests\LinkOfferRequest;
use App\Http\Requests\StoreOfferRequest;
use App\Http\Requests\UpdateOfferRequest;
use App\Jobs\LinkProductToOfferJob;
use App\Models\Offer;
use App\Repositories\CampaignRepository;
use App\Repositories\OfferRepository;
use App\Services\OfferService;
use Illuminate\Http\Request;
use Termwind\Components\Dd;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     * @group Offer
     * @response {
     *    "status": true,
     *    "message": "List of Offers",
     *    "data": [
     *      {
     *        "uuid": "f0bbecad-8a32-429d-b5c7-11e3000ceb2f",
     *        "discount_percentage": 58.84,
     *        "campaign_uuid": "082bea98-ca9a-4524-aecb-f862906f1290",
     *        "products": []
     *      }
     *    ]
     *  }
     * 
     * @return \Illuminate\Http\Response
     */
    public function index(OfferRepository $repository)
    {
      $offers = $repository->getAll();
      return $this->response('offer.list', $offers);
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @group Offer
     * @bodyParam discount_percentage float required The name of offer.
     * @bodyParam campaign_uuid string required The state of offer. Example: f372282d-799c-4930-8dad-b2c3ee28679b
     * 
     * @response {
     *    "status": true,
     *    "message": "New Offer created",
     *    "data": {
     *      "discount_percentage": "10",
     *      "uuid": "afb26055-bcd5-4eb3-9abd-1e97ef9f4563",
     *      "campaign_uuid": "f372282d-799c-4930-8dad-b2c3ee28679b"
     *    }
     *  }
     * @param  OfferRepository $repository
     * @param  \App\Http\Requests\StoreOfferRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOfferRequest $request, OfferRepository $repository)
    {
      $data = $request->validated();
      $offer = $repository->store($data);
      return $this->response('offer.create', $offer);
    }

    /**
     * Display the specified resource.
     * 
     * @group Offer
     * @urlParam uuid string required The Uuid of the City. Example: a9d2b989-6aa3-40d4-acf3-a4ba29f867c4
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
     * @param  OfferRepository $repository
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, OfferRepository $repository)
    {
      $offer = $repository->findByUuid($request->uuid);
      $response = ($offer)? $offer : false;
      $code = $offer ? 200 : 404;
      return $this->response('offer.show', $response, $code);
    }

    /**
     * Update the specified resource in storage.
     * @group Offer
     * @urlParam uuid string required The Uuid of the Offer. Example: 22264db6-4245-4308-a870-45ff691b02be
     * @bodyParam discount_percentage float The name of offer.
     * @bodyParam campaign_uuid string The state of offer. Example: 139a22bc-8149-4a09-bd5a-aadc04d8b4f4
     * @response {
     *   "status": true,
     *   "message": "Offer updated",
     *   "data": {
     *     "uuid": "22264db6-4245-4308-a870-45ff691b02be",
     *     "discount_percentage": 10,
     *     "campaign_uuid": "139a22bc-8149-4a09-bd5a-aadc04d8b4f4",
     *     "products": []
     *   }
     * }
     * @param  \App\Http\Requests\UpdateOfferRequest  $request
     * @param  OfferRepository $repository
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOfferRequest $request, OfferRepository $repository)
    {
      $offer = $repository->findByUuid($request->uuid);
      $response = $offer ? $repository->update($offer->id, $request->validated()): false;
      $code = $offer ? 200 : 404;
      return $this->response('offer.update', $response, $code);
    }

    /**
     * Remove the specified resource from storage.
     * @group Offer
     * @urlParam uuid string required The Uuid of the Offer. Example: a9d2b989-6aa3-40d4-acf3-a4ba29f867c4
     * @response {
     *    "status": true,
     *    "message": "Offer deleted",
     *    "data": []
     *  }
     * @param  Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, OfferRepository $repository)
    {
      $offer = $repository->findByUuid($request->uuid);
      $result = $offer->delete();
      $code = $result ? 200 : 404;
      return $this->response('offer.destroy', $result, $code);
    }

    /**
     * Link a product to an offer.
     * @group Offer
     * @urlParam uuid string required The Uuid of the Offer. Example: a9d2b989-6aa3-40d4-acf3-a4ba29f867c4
     * @bodyParam products string[] required The state of offer. Example: ["products" => ["93d4fd9a-7447-4b33-be34-e10a8564470c","41c7a33a-ef97-4109-ab5e-5a6f6d84135b"]]
     * @response {
     *    "status": true,
     *    "message": "Products linked to the offer successfully",
     *    "data": []
     *  }
     * @param  Request  $request
     * @param  OfferRepository $repository
     * @return \Illuminate\Http\Response
     */
    public function linkProductToOffer(LinkOfferRequest $request, OfferService $service)
    {
      $offer = $service->linkProductToOffer($request->uuid, $request->validated());
      return $this->response('offer.product', $offer);
    }

}
