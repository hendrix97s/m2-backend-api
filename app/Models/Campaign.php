<?php

namespace App\Models;

use App\Traits\Slugs;
use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    use HasFactory, Uuids, Slugs;

    protected $with = [
      'groups',
      'offer'
    ];

    protected $fillable = [
      'name',
      'description',
    ];

    protected $hidden = [
      'id',
      'created_at',
      'updated_at',
      'groups',
      'campaign_uuid',
      'campaign_id'
    ];

    public function groups()
    {
      return $this->belongsToMany(Group::class, 'campaign_group');
    }

    public function offer()
    {
      return $this->hasOne(Offer::class);
    }
}
