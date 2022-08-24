<?php

namespace App\Observers;

use App\Models\Group;
use App\Services\GroupService;
use Illuminate\Support\Facades\Log;

class GroupObserver
{
    public function created(Group $group)
    {
      if($group->campaign_id){
        GroupService::addGroupAndCampaign($group->id, $group->campaign_id);
      }
    }

    /**
     * Handle the Group "updated" event.
     *
     * @param  \App\Models\Group  $group
     * @return void
     */
    public function updated(Group $group)
    {
      if($group->campaign_id){
        GroupService::updateGroupAndCampaign($group->id, $group->campaign_id);
      }
    }

    /**
     * Handle the Group "deleted" event.
     *
     * @param  \App\Models\Group  $group
     * @return void
     */
    public function deleted(Group $group)
    {
      if($group->campaign_id){
        GroupService::addGroupAndCampaign($group->id, $group->campaign_id);
      }
    }

    /**
     * Handle the Group "restored" event.
     *
     * @param  \App\Models\Group  $group
     * @return void
     */
    public function restored(Group $group)
    {
        //
    }

    /**
     * Handle the Group "force deleted" event.
     *
     * @param  \App\Models\Group  $group
     * @return void
     */
    public function forceDeleted(Group $group)
    {
        //
    }
}
