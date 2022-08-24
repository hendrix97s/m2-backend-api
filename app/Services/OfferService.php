<?php

namespace App\Services;

use App\Jobs\LinkProductToOfferJob;
use App\Repositories\CampaignRepository;
use App\Repositories\GroupRepository;
use App\Repositories\OfferRepository;
use App\Repositories\ProductRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class OfferService
{
  public function linkProductToOffer(array $data)
  {
    $offerId = (new OfferRepository())->getIdByUuid($data['offer_uuid']);

    foreach ($data['products'] as $uuid) {
      LinkProductToOfferJob::dispatch($offerId, $uuid);
    }

    return true;
  }

  public static function addProductToOffer(string $offerId, string $productUuid)
  {
    $productId = (new ProductRepository())->findByUuid($productUuid)->id;
    DB::table('offer_product')->insert([
      'offer_id' => $offerId,
      'product_id' => $productId,
    ]);
  }

}