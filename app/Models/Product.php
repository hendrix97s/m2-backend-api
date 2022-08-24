<?php

namespace App\Models;

use App\Traits\Slugs;
use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory, Uuids, Slugs;

    protected $fillable = [
        'name',
        'description',
        'price',
    ];

    protected $hidden = [
        'id',
        'created_at',
        'updated_at',
    ];

}
