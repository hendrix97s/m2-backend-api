<?php

namespace App\Repositories;

use App\Models\Group;
use App\Repositories\BaseRepository;

class GroupRepository extends BaseRepository
{
    public function __construct()
    {
      parent::__construct(Group::class);
    }
}