<?php

namespace Tests\Feature;

use App\Models\Campaign;
use App\Models\Group;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class GroupTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function when_list_all_groups()
    {
      Group::factory(3)->create();
      $response = $this->get(route('group.index'));
      $response->assertStatus(200);
      $response->assertJsonCount(3);
      $this->assertEquals(__('group.list.success'), $response->json('message'));
    }

    /** @test */
    public function when_create_a_group()
    {
      $payload = [
        'name' => 'Group 1',
        'description' => 'This is a group',
      ];

      $response = $this->post(route('group.store'), $payload);
      $response->assertStatus(200);
      $response->assertJsonFragment($payload);
      $this->assertEquals(__('group.create.success'), $response->json('message'));
    }

    /** @test */
    public function when_create_a_group_with_campaign_uuid()
    {
      $payload = [
        'name' => 'Group 1',
        'campaign_uuid' => Campaign::factory()->create()->uuid,
        'description' => 'This is a group',
      ];

      $response = $this->post(route('group.store'), $payload);
      $response->assertStatus(200);
      $response->assertJsonFragment($payload);
      $this->assertEquals(__('group.create.success'), $response->json('message'));
    }

    /** @test */
    public function when_update_a_group_with_campaign_uuid()
    {
      $group = Group::factory()->create([
        'campaign_id' => null
      ]);

      $payload = [
        'campaign_uuid' => Campaign::factory()->create()->uuid,
      ];

      $response = $this->put(route('group.update', $group->uuid), $payload);
      $response->assertStatus(200);
      $this->assertEquals(__('group.update.success'), $response->json('message'));
    }



    /** @test */
    public function when_update_a_group()
    {
      $group = Group::factory()->create();
      $payload = [
        'name' => 'Group Updated',
      ];

      $response = $this->put(route('group.update', $group->uuid), $payload);
      $response->assertStatus(200);
      $response->assertJsonFragment($payload);
      $this->assertEquals(__('group.update.success'), $response->json('message'));
    }
}
