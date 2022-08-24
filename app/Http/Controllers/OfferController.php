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

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
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
     * @param  OfferRepository $repository
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, OfferRepository $repository)
    {
      $offer = $repository->findByUuid($request->offer);
      return $this->response('offer.show', $offer);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOfferRequest  $request
     * @param  OfferRepository $repository
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOfferRequest $request, OfferRepository $repository)
    {
      $offer = $repository->findByUuid($request->offer);
      $offer = $repository->update($offer->id, $request->validated());
      return $this->response('offer.update', $offer);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, OfferRepository $repository)
    {
      $offer = $repository->findByUuid($request->offer);
      $result = $offer->delete();
      $code = $result ? 200 : 404;
      return $this->response('offer.destroy', $result, $code);
    }

    public function linkProductToOffer(LinkOfferRequest $request, OfferService $service)
    {
      $offer = $service->linkProductToOffer($request->validated());
      return $this->response('Products linked to the offer', $offer);
    }

}
