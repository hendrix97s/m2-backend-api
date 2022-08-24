<?php

namespace Tests\Feature;

use App\Models\Campaign;
use App\Models\Group;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class CampaignTest extends TestCase
{
  
  use RefreshDatabase;

  /** @test */
  public function when_list_all_campaigns()
  {
    $campaigns = Campaign::factory()->create();

    $response = $this->get(route('campaign.index'));
    $response->assertStatus(200);
    $this->assertEquals(__('campaign.list.success'), $response->json('message'));
  }
  
  /** @test */
  public function when_creating_a_campaign()
  {
    $payload = [
      'name' => 'Campaign 1',
      'description' => 'Campaign 1 description',
    ];

    $response = $this->post(route('campaign.store'), $payload);
    $response->assertStatus(200);
    $this->assertEquals(__('campaign.create.success'), $response->json('message'));
  }

  /** @test */
  public function when_updating_a_campaign()
  {
    $campaign = Campaign::factory()->create();
    $payload = [
      'name' => 'Campaign 1',
    ];
    $response = $this->put(route('campaign.update', $campaign->uuid), $payload);
    $response->assertStatus(200);
    $this->assertEquals(__('campaign.updated.success'), $response->json('message'));
  }

  /** @test */
  public function when_deleting_a_campaign()
  {
    $campaign = Campaign::factory()->create();
    $response = $this->delete(route('campaign.destroy', $campaign->uuid));
    $response->assertStatus(200);
    $this->assertEquals(__('campaign.destroy.success'), $response->json('message'));
  }

  /** @test */
  public function when_deleting_a_campaign_with_groups(){
    $campaign = Campaign::factory()->create();
    for($i = 0; $i < 3; $i++) {
      Group::factory()->create([
        'campaign_id' => $campaign->id,
      ]);
    }
    $response = $this->delete(route('campaign.destroy', $campaign->uuid));
    $response->assertStatus(200);
    $this->assertEquals(__('campaign.destroy.success'), $response->json('message'));
  }

  /** @test */
  public function when_show_a_campaign()
  {
    $campaign = Campaign::factory()->create();
    $response = $this->get(route('campaign.show', $campaign->uuid));
    $response->assertStatus(200);
    $this->assertEquals(__('campaign.show.success'), $response->json('message'));
  }


  /** @test */
  public function when_show_a_campaign_with_groups()
  {
    $campaign = Campaign::factory()->create();
    
    for($i = 0; $i < 3; $i++) {
      Group::factory()->create([
        'campaign_id' => $campaign->id,
      ]);
    }

    $response = $this->get(route('campaign.show', $campaign->uuid));
    $response->assertStatus(200);
    $this->assertEquals(__('campaign.show.success'), $response->json('message'));
  }

  
}
