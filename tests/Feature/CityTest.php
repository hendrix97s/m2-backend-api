<?php

namespace Tests\Feature;

use App\Models\City;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CityTest extends TestCase
{

    use RefreshDatabase;

    /** @test */
    public function when_query_all_cities()
    {
        City::factory(3)->create();
        $response = $this->get(route('city.index'));
        $response->assertStatus(200);
        $this->assertEquals(__('city.list.success'), $response->json(['message']));
    }

    /** @test */
    public function when_query_a_city()
    {
        $city = City::factory()->create([
          'name' =>'Araras',
          'state' => 'SP',
          'country' => 'Brazil',
        ]);

        $response = $this->get(route('city.show', $city->uuid));
        $response->assertStatus(200);
        $this->assertEquals(__('city.show.success'), $response->json(['message']));
    }

    /** @test */
    public function when_delete_a_city()
    {
      $city = City::factory()->create([
        'name' =>'Araras',
        'state' => 'SP',
        'country' => 'Brazil',
      ]);

      $response = $this->delete(route('city.destroy', $city->uuid));
      $response->assertStatus(200);
      $this->assertEquals(__('city.delete.success'), $response->json(['message']));
    }

    /** @test */
    public function when_create_a_city()
    {
      $payload = [
        'name' =>'Araras',
        'state' => 'SP',
        'country' => 'Brazil',
      ];

      $response = $this->post(route('city.store'), $payload);
      $response->assertStatus(200);
      $this->assertEquals(__('city.create.success'), $response->json(['message']));
    }

    /** @test */
    public function when_update_a_city()
    {
      $city = City::factory()->create([
        'name' =>'Araras',
        'state' => 'SP',
        'country' => 'Brazil',
      ]);
      $payload = ['name' => 'Araras updated'];
      $response = $this->put(route('city.update', $city->uuid), $payload);
      $response->assertStatus(200);
      $this->assertEquals(__('city.update.success'), $response->json(['message']));
      $this->assertEquals('Araras updated', $response->json('data.name'));
    }
}
