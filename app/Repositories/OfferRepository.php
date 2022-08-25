<?php

namespace App\Repositories;

use App\Models\Offer;
use App\Repositories\BaseRepository;

class OfferRepository extends BaseRepository
{
  public function __construct()
  {
    parent::__construct(Offer::class);
  }
  
  public function store($data)
  {
    $campaignRepository       = new CampaignRepository();
    $campaign                 = $campaignRepository->findByUuid($data['campaign_uuid']);
    if(!$campaign) return false;
    $data['campaign_id']      = $campaign->id;
    unset($data['campaign_uuid'],$campaign, $campaignRepository);
    return $this->create($data);
  }
}