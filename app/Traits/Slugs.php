<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait Slugs
{
  protected static function bootSlugs()
  {
    static::creating(function ($model){
        $model->slug = Str::slug($model->name);
    });

    static::updating(function ($model){
        $model->slug = Str::slug($model->name);
    });
  }
}