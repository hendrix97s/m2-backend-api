<?php

namespace Tests\Feature;

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductTest extends TestCase
{
 
  use RefreshDatabase;

  /** @test */
  public function when_list_all_products()
  {
    Product::factory(3)->create();
    $response = $this->get(route('product.index'));
    $response->assertStatus(200);
    $response->assertJsonCount(3, 'data');
    $this->equalTo(__('product.list'), $response->json('message'));
  }

  /** @test */
  public function when_create_a_product()
  {
    $payload = [
      'name'        => 'Product 1',
      'description' => 'Description 1',
      'price'       => '100',
    ];

    $response = $this->post(route('product.store'), $payload);
    $response->assertStatus(200);
    $response->assertJsonFragment($payload);
    $this->equalTo(__('product.store'), $response->json('message'));
  }

  /** @test */
  public function when_show_a_product()
  {
    $product = Product::factory()->create();
    $response = $this->get(route('product.show', $product->uuid));
    $response->assertStatus(200);
    $response->assertJsonFragment($product->toArray());
    $this->assertEquals(__('product.show.success'), $response->json('message'));
  }

  /** @test */
  public function when_update_a_product()
  {
    $product = Product::factory()->create();
    $payload = [
      'name'        => 'Product updated',
    ];
    $response = $this->put(route('product.update', $product->uuid), $payload);
    $response->assertStatus(200);
    $this->assertEquals(__('product.update.success'), $response->json('message'));
  }

  /** @test */
  public function when_delete_a_product()
  {
    $product = Product::factory()->create();
    $response = $this->delete(route('product.destroy', $product->uuid));
    $response->assertStatus(200);
    $this->assertEquals(__('product.destroy.success'), $response->json('message'));
    $this->assertEmpty(Product::find($product->id));
  }

  /** @test */
  public function when_delete_a_product_that_not_exists()
  {
    $uuid = 'cf02555a-75ef-4fcb-a952-7241df862871';
    $response = $this->delete(route('product.destroy', $uuid));
    $response->assertStatus(404);
    $this->assertEquals(__('product.destroy.fail'), $response->json('message'));
  }
}
