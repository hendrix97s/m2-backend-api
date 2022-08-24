<?php

return [
    'create' => [
        'success' => 'New Product created',
        'fail' => 'Problem saving this product',
    ],
    'update' => [
        'success' => 'Product updated',
        'fail' => 'Problem updating this product',
    ],
    'delete' => [
        'success' => 'Product deleted',
        'fail' => 'Problem deleting this product',
    ],
    'destroy' => [
        'success' => 'Product deleted',
        'fail' => 'Problem deleting this product',
    ],
    'list' => [
        'success' => 'List of Products',
        'fail' => 'Problem getting list of products',
    ],
    'show' => [
        'success' => 'Product found successfully',
        'fail' => 'Problem finding this product',
    ],
    'validate' => [
        'required' => [
          'name'        => 'The name field is required.',
          'description' => 'The description field is required.',
          'price'       => 'The price field is required.',
        ],
        'max' => [
          'name'        => 'The name may not be greater than 255 characters.',
          'description' => 'The description may not be greater than 255 characters.',
        ],
        'numeric' => [
          'price' => 'The price must be a number.',
        ],
        'string' => [
          'name'        => 'The name must be a string.',
          'description' => 'The description must be a string.',
        ],

    ],
];
