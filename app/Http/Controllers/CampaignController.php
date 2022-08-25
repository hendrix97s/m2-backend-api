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
     * 
     * Display a listing of the resource.
     * @group Campaign
     * @response {
     *    "status": true,
     *    "message": "List of Campaigns",
     *    "data": [
     *      {
     *        "uuid": "1ca578bb-8e76-4f05-8991-088f4d5a742a",
     *        "slug": "rosalyn-ratke",
     *        "name": "Rosalyn Ratke",
     *        "description": "Veniam nam quos fugiat dolorem consectetur quo. Omnis facere harum qui aperiam. Consectetur repellendus ut aliquid vero.",
     *        "offer": null
     *      }
     *    ]
     *  }
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
     * @group Campaign
     * @bodyParam name string required The name of campaign. Example: New Campaign
     * @bodyParam description string The description of Campaign.
     * 
     * @response {
     *    "status": true,
     *    "message": "New Campaign created",
     *    "data": {
     *      "uuid": "8ba8cdc0-f1f7-4ed4-af46-5854b344ad76",
     *      "slug": "campaign-1",
     *      "name": "Campaign 1",
     *      "description": "Campaign 1 description",
     *      "groups": [],
     *      "offer": null
     *    }
     *  }
     * 
     * @param  \App\Http\Requests\StoreCampaignRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCampaignRequest $request, CampaignRepository $repository)
    {
        $campaign = $repository->create($request->validated());
        $response = $repository->findByUuidAndShowGroups($campaign->uuid);
        return $this->response('campaign.create', $response);
    }

    /**
     * Display the specified resource.
     *      
     * @group Campaign
     * @urlParam uuid string required The Uuid of the Campaign. Example: cc811af3-fc3e-4aee-87e3-e7d096cff735
     * @response {
     *    "status": true,
     *    "message": "Campaign found successfully",
     *    "data": {
     *      "uuid": "cc811af3-fc3e-4aee-87e3-e7d096cff735",
     *      "slug": "lucious-rau-jr",
     *      "name": "Lucious Rau Jr.",
     *      "description": "Dolore repudiandae ipsum sed esse voluptatem odio. Sequi commodi earum deserunt autem id sapiente. Voluptas qui enim velit et soluta ea.",
     *      "groups": [
     *        {
     *          "uuid": "cca0ec42-aee3-4c06-adb8-572136928b4c",
     *          "slug": "ferne-morar",
     *          "name": "Ferne Morar",
     *          "description": "Dignissimos necessitatibus tempora nihil sit quam dolorum odio. Maiores et molestiae amet sit rerum. Similique non ut neque voluptas ratione iste molestiae.",
     *          "campaign_name": "Lucious Rau Jr.",
     *          "campaign_uuid": "cc811af3-fc3e-4aee-87e3-e7d096cff735"
     *        }
     *      ],
     *      "offer": {
     *        "uuid": "5e451a6f-81f2-4624-98cb-2819e3829a82",
     *        "discount_percentage": 52.24,
     *        "campaign_uuid": "cc811af3-fc3e-4aee-87e3-e7d096cff735",
     *        "products": [
     *          {
     *            "uuid": "04e6d3e4-aaba-4272-b381-612d78981ec2",
     *            "slug": "harley-schiller",
     *            "name": "Harley Schiller",
     *            "price": 90.93,
     *            "description": "Nulla est fugit reprehenderit sapiente. Voluptatum vel molestias nesciunt et aliquid. A et vel nisi enim culpa neque est. Occaecati qui dignissimos incidunt alias."
     *          }
     *        ]
     *      }
     *    }
     *  }
     * 
     * @param Request $request 
     * @param  CampaignRepository $repository
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, CampaignRepository $repository)
    {
      $campaign = $repository->findByUuidAndShowGroups($request->uuid);
      $code = $campaign ? null : 404;
      return $this->response('campaign.show', $campaign, $code);
    }

    /**
     * Update the specified resource in storage.     
     * @group Campaign
     * @urlParam uuid string required The Uuid of the Campaign. Example: 61bc2469-cdd2-4abd-98ea-cad74d8a1ce7
     * @bodyParam name string The name of campaign. Example: Updated Campaign
     * @bodyParam description string The description of Campaign.
     * @response {
     *    "status": true,
     *    "message": "campaign.updated.success",
     *    "data": {
     *      "uuid": "61bc2469-cdd2-4abd-98ea-cad74d8a1ce7",
     *      "slug": "updated-campaign",
     *      "name": "Updated Campaign",
     *      "description": "Placeat eaque laboriosam commodi accusamus ea voluptatem quod. Aspernatur dolor excepturi dolores corporis. Ut ut maxime neque sed dolorum ut.",
     *      "offer": null
     *    }
     *  }
     * @param  \App\Http\Requests\UpdateCampaignRequest  $request
     * @param  CampaignRepository $repository
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCampaignRequest $request, CampaignRepository $repository)
    {
        $campaign = $repository->findByUuid($request->uuid);
        $code = $campaign ? null : 404;
        $response = $campaign ? $repository->update($campaign->id, $request->validated()) : false;
        return $this->response('campaign.update', $response, $code);
    }

    /**
     * Remove the specified resource from storage.
     * @group Campaign
     * @urlParam uuid string required The Uuid of the Campaign. Example: 61bc2469-cdd2-4abd-98ea-cad74d8a1ce7
     * @response {
     *    "status": true,
     *    "message": "Campaign deleted",
     *    "data": []
     *  }
     * @param Request $request 
     * @param  CampaignRepository $repository
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, CampaignRepository $repository)
    {
        $campaign = $repository->findByUuid($request->uuid);
        $response = $campaign ? $campaign->delete() : false;
        $code = $response ? null : 404;
        return $this->response('campaign.destroy', $response, $code);
    }
}
