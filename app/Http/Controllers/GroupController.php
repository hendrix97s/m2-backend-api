<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGroupRequest;
use App\Http\Requests\UpdateGroupRequest;
use App\Models\Group;
use App\Repositories\GroupRepository;
use App\Services\GroupService;
use Illuminate\Http\Request;
use Termwind\Components\Dd;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     * @group Group
     * @response {
     *   "status": true,
     *   "message": "List of groups",
     *   "data": [
     *     {
     *       "uuid": "5b4af9cc-28f9-466d-878b-9308f2309fa3",
     *       "slug": "dr-guillermo-von",
     *       "name": "Dr. Guillermo Von",
     *       "description": "Cumque sapiente quia nisi veniam. Nobis perferendis blanditiis quos earum occaecati vel.",
     *       "campaign_name": "Prof. Leon Walsh DVM",
     *       "campaign_uuid": "f9aa0435-5e95-4c45-aec6-e943d5aa0baf"
     *     }
     *   ]
     * }
     * 
     * @param GroupRepository $repository
     * @return \Illuminate\Http\Response
     */
    public function index(GroupRepository $repository)
    {
      $groups = $repository->getAll();
      return $this->response('group.list', $groups);
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @group Group
     * @bodyParam name string required string The name of group. Example: Group 1
     * @bodyParam description string The state of group. Example: This is a group
     * @bodyParam campaign_uuid string Name of country. Example: 859d73b2-fb10-4cca-9f0f-45652eb21781 
     * 
     * @response {
     *    "status": true,
     *    "message": "New Group created",
     *    "data": {
     *      "name": "Group 1",
     *      "description": "This is a group",
     *      "uuid": "4b7d2931-491f-444e-8e60-21c1a8decaa2",
     *      "slug": "group-1",
     *      "campaign_name": "Joanie Kshlerin",
     *      "campaign_uuid": "859d73b2-fb10-4cca-9f0f-45652eb21781"
     *    }
     *  }
     * @param  \App\Http\Requests\StoreGroupRequest  $request
     * @param GroupService $service
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGroupRequest $request, GroupService $service)
    {
      $group = $service->store($request->validated());
      return $this->response('group.create', $group);
    }

    /**
     * Display the specified resource.
     * 
     * @group Group
     * @urlParam uuid string required The Uuid of the group. Example: 591ce247-a55e-4959-808a-24511f87337b
     * @response {
     *    "status": true,
     *    "message": "Group found successfully",
     *    "data": {
     *      "uuid": "591ce247-a55e-4959-808a-24511f87337b",
     *      "slug": "greta-rau",
     *      "name": "Greta Rau",
     *      "description": "Ipsum explicabo deleniti ea id nobis. Asperiores culpa nobis corrupti consequatur voluptates quis sapiente. Similique dolorem quam voluptas.",
     *      "campaign_name": "Mr. Grady Johnston Jr.",
     *      "campaign_uuid": "3ab774c3-10e1-4b0d-8832-26d6e17d8c41"
     *    }
     *  }
     * @param  Response $response
     * @param GroupRepository $repository
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, GroupRepository $repository)
    {
      $group = $repository->findByUuid($request->uuid);
      $code = $group ? 200 : 404;
      return $this->response('group.show', $group, $code);
    }

    /**
     * Update the specified resource in storage.
     * @group Group
     * @urlParam uuid string required The Uuid of the Group. Example: a96e16b7-b3ab-4100-a699-8a3715d4c050
     * @bodyParam name string The name of group. Example: Group 1
     * @bodyParam description string The state of group. Example: This is a group
     * @bodyParam campaign_uuid string Name of country. Example: 2a1a5fad-d642-4fed-a0be-c5302e6bfc09
     * @response {
     *   "status": true,
     *   "message": "Group updated",
     *   "data": {
     *     "uuid": "a96e16b7-b3ab-4100-a699-8a3715d4c050",
     *     "slug": "linnie-hodkiewicz",
     *     "name": "Linnie Hodkiewicz",
     *     "description": "Voluptate rem recusandae error esse. Totam minus in amet accusamus atque quidem expedita. Culpa asperiores reiciendis inventore eius et ab.",
     *     "campaign_name": "Emmalee Balistreri",
     *     "campaign_uuid": "2a1a5fad-d642-4fed-a0be-c5302e6bfc09"
     *   }
     * }
     * @param  \App\Http\Requests\UpdateGroupRequest  $request
     * @param  GroupRepository $repository
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGroupRequest $request, GroupRepository $repository)
    {
      $group = $repository->findByUuid($request->uuid);
      $service = new GroupService($repository);
      $response = $service->update($group->id ,$request->validated());
      $code = $response ? 200 : 404;
      return $this->response('group.update', $response);
    }

    /**
     * Remove the specified resource from storage.
     * @group Group
     * @urlParam uuid string required The uuid of the group. Example: a9d2b989-6aa3-40d4-acf3-a4ba29f867c4
     * @response {
     *    "status": true,
     *    "message": "Group deleted",
     *    "data": []
     *  }
     * @param  Request  $request
     * @param  GroupRepository $repository
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, GroupRepository $repository)
    {
      $group = $repository->findByUuid($request->uuid);
      $response = $group ? $repository->delete($group->id) : false;
      $code = $response ? null : 404;
      return $this->response('group.destroy', $response, $code);
    }
}
