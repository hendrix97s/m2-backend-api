<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCampaignRequest;
use App\Http\Requests\UpdateCampaignRequest;
use App\Models\Campaign;
use App\Repositories\CampaignRepository;
use App\Services\CampaignService;
use Illuminate\Http\Request;

class CampaignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(CampaignRepository $repository)
    {
        $campaings = $repository->getAll();
        return $this->response('campaign.list', $campaings);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCampaignRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCampaignRequest $request, CampaignRepository $repository)
    {
        $campaign = $repository->create($request->validated());
        $campaign = $repository->findByUuidAndShowGroups($campaign->uuid);
        return $this->response('campaign.create', $campaign);
    }

    /**
     * Display the specified resource.
     *
     * @param Request $request 
     * @param  CampaignRepository $repository
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, CampaignRepository $repository)
    {
      $campaign = $repository->findByUuidAndShowGroups($request->uuid);
      return $this->response('campaign.show', $campaign);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCampaignRequest  $request
     * @param  CampaignRepository $repository
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCampaignRequest $request, CampaignRepository $repository)
    {
        $campaign = $repository->findByUuid($request->uuid);
        $response = $repository->update($campaign->id, $request->validated());
        return $this->response('campaign.updated', $response);
    }

    /**
     * Remove the specified resource from storage.
     * 
     * @param Request $request 
     * @param  CampaignRepository $repository
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, CampaignRepository $repository)
    {
        $campaign = $repository->findByUuid($request->uuid);
        $response = $campaign ? $campaign->delete() : false;
        $code = $response ? null : 404;
        return $this->response('campaign.destroy', $campaign, $code);
    }
}
