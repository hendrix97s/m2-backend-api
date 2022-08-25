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
     * @group Product
     * @response {
     *    "status": true,
     *    "message": "List of Products",
     *    "data": [
     *      {
     *        "uuid": "4664f01c-63cf-4aa7-a2b6-e91e98a689eb",
     *        "slug": "genesis-gutkowski",
     *        "name": "Genesis Gutkowski",
     *        "price": 41.98,
     *        "description": "Rerum quis molestiae sed deleniti aut dolorem. Sint eos dignissimos facilis quo. Eos dolores excepturi sint pariatur qui itaque eum numquam. Quas eos consequatur a qui placeat."
     *      }
     *    ]
     *  }
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
     * @group Product
     * @bodyParam name required string The name of product. Example: Product 1
     * @bodyParam description string The state of product. Example: Description 1.
     * @bodyParam price required string price of product. Example: 5.89
     * 
     * @response {
     *   "status": true,
     *   "message": "product.store.success",
     *   "data": {
     *     "name": "Product 1",
     *     "description": "Description 1",
     *     "price": "100",
     *     "uuid": "cabae00a-c42d-4e08-8274-9d2c782cccca",
     *     "slug": "product-1"
     *   }
     * }
     * @param \App\Http\Requests\StoreProductRequest  $request
     * @param \App\Repositories\ProductRepository  $repository
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request, ProductRepository $repository)
    {
        $product = $repository->create($request->validated());
        return $this->response('product.create', $product);
    }

    /**
     * Display the specified resource.
     * 
     * @group Product
     * @urlParam uuid required The Uuid of the Product. Example: d8f21df7-90bd-40d6-ac92-cbc1fd7d5cf0
     * @response {
     *   "status": true,
     *   "message": "Product found successfully",
     *   "data": {
     *     "uuid": "d8f21df7-90bd-40d6-ac92-cbc1fd7d5cf0",
     *     "slug": "reanna-olson",
     *     "name": "Reanna Olson",
     *     "price": 38.68,
     *     "description": "Provident est sit nihil animi est beatae minima. Ut odit laudantium et perferendis dicta. Consequuntur qui reprehenderit velit. Unde rerum commodi pariatur est exercitationem."
     *   }
     * }
     * @param Request  $request
     * @param ProductRepository $repository
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, ProductRepository $repository)
    {
        $product = $repository->findByUuid($request->uuid);
        $response = $product ? $product: false;
        $code = $product ? 200 : 404;
        return $this->response('product.show', $response, $code);
    }

    /**
     * Update the specified resource in storage.
     * @group Product
     * @urlParam uuid required The Uuid of the product. Example: 209207ef-fc7e-4d44-b5d8-4574a6934fb9
     * @bodyParam name string The name of product. Example: Product updated
     * @bodyParam description string The state of product. Example: Description 1.
     * @bodyParam price string price of product. Example: 44.76
     * @response {
     *   "status": true,
     *   "message": "Product updated",
     *   "data": {
     *     "uuid": "209207ef-fc7e-4d44-b5d8-4574a6934fb9",
     *     "slug": "product-updated",
     *     "name": "Product updated",
     *     "price": 44.76,
     *     "description": "Unde et in sint sed. Est dolores suscipit quasi laborum itaque quis. Aut distinctio sapiente illo et similique unde."
     *   }
     * }
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Repositories\ProductRepository  $repository
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, ProductRepository $repository)
    {
        $product = $repository->findByUuid($request->uuid);    
        $response = $product ? $repository->update($product->id, $request->validated()): false;
        $code = $response ? 200 : 404;
        return $this->response('product.update', $product, $code);
    }

    /**
     * Remove the specified resource from storage.
     * @group Product
     * @urlParam uuid required The uuid of the product. Example: a9d2b989-6aa3-40d4-acf3-a4ba29f867c4
     * @response {
     *    "status": true,
     *    "message": "Product deleted",
     *    "data": []
     *  }
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
