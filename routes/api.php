<?php

use App\Http\Controllers\CampaignController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\GroupController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['prefix' => 'v1'], function () {
  Route::resource('city', CityController::class)->except(['create', 'edit'])->parameters(['city' => 'uuid']);
  Route::resource('product', ProductController::class)->except(['create', 'edit'])->parameters(['product' => 'uuid']);
  Route::resource('offer', OfferController::class)->except(['create', 'edit', 'linkProductToOffer'])->parameters(['offer' => 'uuid']);
  Route::post('offer/{uuid}/products', [OfferController::class, 'linkProductToOffer'])->name('offer.products');
  Route::resource('campaign', CampaignController::class)->except(['create', 'edit'])->parameters(['campaign' => 'uuid']);;
  Route::resource('group', GroupController::class)->except(['create', 'edit'])->parameters(['group' => 'uuid']);;
});