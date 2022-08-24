<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory, Uuids;

    protected $appends = ['campaign_uuid'];

    protected $fillable = [
      'discount_percentage',
      'campaign_id',
    ];

    protected $hidden = [
      'id',
      'created_at',
      'updated_at',
      'campaign',
    ];

    public function campaign()
    {
        return $this->belongsTo(Campaign::class);
    }

    public function getCampaignUuidAttribute($value)
    {
        return $this->campaign->uuid ?? $value;
    }
}
