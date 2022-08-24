<?php

namespace Tests\Feature;

use App\Models\Campaign;
use App\Models\Offer;
use App\Models\Product;
use App\Services\OfferService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class OfferTest extends TestCase
{
    // use RefreshDatabase;

    /** @test */
    public function when_query_all_offers()
    {
      $this->seed('OfferSeeder');
      $response = $this->get(route('offer.index'));
      $response->assertStatus(200);
      $this->assertEquals(3, count($response->json('data')));
      $this->assertEquals(__('offer.list.success'), $response->json('message'));
    }

    /** @test */
    public function when_create_offer()
    {
      $payload = [
        'discount_percentage' => '10',
        'campaign_uuid' => Campaign::factory()->create()->uuid,
      ];

      $response = $this->post(route('offer.store'), $payload);
      $response->assertStatus(200);
      $this->assertEquals(__('offer.create.success'), $response->json('message'));
    }

    /** @test */
    public function when_update_offer()
    {
      $offer = Offer::factory()->create();
      $payload = [
        'discount_percentage' => '10',
        'campaign_uuid' => Campaign::factory()->create()->uuid,
      ];
      $response = $this->put(route('offer.update', $offer->uuid), $payload);
      $response->assertStatus(200);
      $this->assertEquals(__('offer.update.success'), $response->json('message'));
    }

    /** @test */
    public function when_delete_offer()
    {
      $offer = Offer::factory()->create();
      $response = $this->delete(route('offer.destroy', $offer->uuid));
      $response->assertStatus(200);
      $this->assertCount(0, Offer::all());
      $this->assertEquals(__('offer.delete.success'), $response->json('message'));
    }

    /** @test */
    public function when_show_a_offer()
    {
      $offer = Offer::factory()->create();
      $response = $this->get(route('offer.show', $offer->uuid));
      $response->assertStatus(200);
      $this->assertEquals(__('offer.show.success'), $response->json('message'));
    }
}
