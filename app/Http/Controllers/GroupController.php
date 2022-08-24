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
     * @param  \App\Models\Group  $group
     * @param GroupRepository $repository
     * @return \Illuminate\Http\Response
     */
    public function show(Group $group, GroupRepository $repository)
    {
      $group = $repository->findByUuid($group->uuid);
      return $this->response('group.show', $group);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGroupRequest  $request
     * @param  GroupRepository $repository
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGroupRequest $request, GroupRepository $repository)
    {
      $group = $repository->findByUuid($request->uuid);
      $service = new GroupService($repository);
      $group = $service->update($group->id ,$request->validated());
      return $this->response('group.update', $group);
    }

    /**
     * Remove the specified resource from storage.
     *
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
