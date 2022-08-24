<?php

namespace App\Jobs;

use App\Services\OfferService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class LinkProductToOfferJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $offerId;
    protected $productUuid;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($offerId, $productUuid)
    {
      $this->offerId = $offerId;
      $this->productUuid = $productUuid;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
       return OfferService::addProductToOffer($this->offerId, $this->productUuid);
    }
}
