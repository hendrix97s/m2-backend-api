<?php

namespace App\Models;

use App\Traits\Slugs;
use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory, Uuids, Slugs;

    protected $table = 'groupss';

    protected $appends = [
      'campaign_name',
      'campaign_uuid',
    ];

    protected $fillable = [
        'name',
        'campaign_id',
        'description',
    ];

    protected $hidden = [
        'id',
        'campaign_id',
        'created_at',
        'updated_at',
        'campaign',
        'pivot'
    ];

    public function campaign()
    {
        return $this->belongsTo(Campaign::class);
    }

    public function getCampaignNameAttribute($value)
    {
        return $this->campaign->name ?? $value;
    }

    public function getCampaignUuidAttribute($value)
    {
        return $this->campaign->uuid ?? $value;
    }
}
