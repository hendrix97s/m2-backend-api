<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;
use App\Repositories\ProductRepository;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ProductRepository $repository)
    {
        $products = $repository->getAll();
        return $this->response('product.list', $products);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StoreProductRequest  $request
     * @param \App\Repositories\ProductRepository  $repository
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request, ProductRepository $repository)
    {
        $product = $repository->create($request->validated());
        return $this->response('product.store', $product);
    }

    /**
     * Display the specified resource.
     * @param Request  $request
     * @param ProductRepository $repository
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, ProductRepository $repository)
    {
        $product = $repository->findByUuid($request->uuid);
        return $this->response('product.show', $product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Repositories\ProductRepository  $repository
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, ProductRepository $repository)
    {
        $product = $repository->findByUuid($request->uuid);    
        $product = $repository->update($product->id, $request->validated());
        return $this->response('product.update', $product);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Product  $product
     * @param \App\Repositories\ProductRepository  $repository
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, ProductRepository $repository)
    {
      $product  = $repository->findByUuid($request->uuid);
      $response = $product ? $product->delete() : false;
      $code     = $response ? null : 404;
      return $this->response('product.destroy', $response, $code);
    }
}
