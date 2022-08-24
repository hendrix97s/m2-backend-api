<?php

namespace App\Repositories;

use App\Models\Campaign;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\DB;

class CampaignRepository extends BaseRepository
{
    public function __construct()
    {
        parent::__construct(Campaign::class);
    }

    public function findByUuidAndShowGroups($uuid)
    {
      $campaign = $this->model->where('uuid', $uuid)->first();
      $campaign->makeVisible(['groups']);
      return $campaign;
    }

}

