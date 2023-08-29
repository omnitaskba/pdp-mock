
<?php

return [
    'base_endpoint' => '/api/fake',

    'endpoints' => [
        'products' => [
            '_settings' => [
                'identifiable' => 'id',
                'auth' => false,
                'paginate' => 5,
            ],

            'id' => 'random_digit_not_null',
            'title' => 'word',
            'product_image' => 'image_url',            
            'link_to_pdp'=> 'url',
            'market'=> 'countryCode',
            'product_name'=> 'word',
            'conversion'=> 'random_digit_not_null',
            'rank_conversion'=> 'random_digit_not_null',
            'product_avg_rank_conversion'=> 'random_digit_not_null',
            'cross_market_product_index_conversion'=> 'random_digit_not_null',
            'units_sold'=> 'random_digit_not_null',
            'page_views'=> 'random_digit_not_null',
            'percent_sales'=> 'random_float|1',
            'rank_sales'=> 'random_digit_not_null',
            'product_avg_rank_sale'=> 'random_float|1',
            'cross_market_product_index_sales'=> 'random_float|1',
            'first_price'=> 'random_float|1',
            'byline'=> 'paragraph|2',
            'sizes_available'=> 'word',
            'first_size'=> 'word',
            'rating'=> 'numberBetween|10|20',
            'reviews_count'=> 'random_digit',
            'description'=> 'paragraph|2',
            'category' => '_categories',
        ],

        'categories' => [
            'id'    => 'random_digit_not_null',
            'name'  => 'word',
            'image' => 'image_url'
        ],        
    ],
];