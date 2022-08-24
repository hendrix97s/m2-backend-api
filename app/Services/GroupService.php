<?php

namespace App\Services;

use App\Repositories\CampaignRepository;
use App\Repositories\GroupRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class GroupService
{

  public function store($payload)
  {
    if(isset($payload['campaign_uuid'])){
      $campaignRepository = new CampaignRepository();
      $campaignId = $campaignRepository->getIdByUuid($payload['campaign_uuid']);
      $payload['campaign_id'] = $campaignId;
      unset($payload['campaign_uuid']);
    }
    $repository = new GroupRepository();
    return $repository->create($payload);
  }

  public function update($id, $payload)
  {
    if(isset($payload['campaign_uuid'])){
      $campaignRepository = new CampaignRepository();
      $campaignId = $campaignRepository->getIdByUuid($payload['campaign_uuid']);
      $payload['campaign_id'] = $campaignId;
      unset($payload['campaign_uuid']);
    }
    $repository = new GroupRepository();
    return $repository->update($id, $payload);
  }

  public static function addGroupAndCampaign($groupId, $campaignId)
  {
   DB::table('campaign_group')->insert([
      'group_id' => $groupId,
      'campaign_id' => $campaignId,
    ]);
  }

  public static function removeGroupAndCampaign($groupId, $campaignId)
  {
    DB::table('campaign_group')->where([
      'group_id' => $groupId,
      'campaign_id' => $campaignId,
    ])->delete();
  }

  public static function updateGroupAndCampaign($groupId, $campaignId)
  {
    DB::table('campaign_group')->where([
      'group_id' => $groupId,
      'campaign_id' => $campaignId,
    ])->update([
      'group_id' => $groupId,
      'campaign_id' => $campaignId,
    ]);
  }
  
}