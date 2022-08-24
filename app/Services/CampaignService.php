<?php

namespace App\Services;

use App\Repositories\CampaignRepository;
use App\Repositories\OfferRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CampaignService
{
  public static function deleteRelationshipsOfGroups($campaignId)
  {
    DB::table('campaign_group')->where('campaign_id', $campaignId)->delete();
  }
}