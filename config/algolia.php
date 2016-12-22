<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Connection Name
    |--------------------------------------------------------------------------
    */

    'default' => 'main',

    /*
    |--------------------------------------------------------------------------
    | Algolia Connections
    |--------------------------------------------------------------------------
    */

    'connections' => [

        'main' => [
            'id' => '8BB87I11DE',
            'search_key' => '8e1d446d61fce359f69cd7c8b86a50de',
            'key' => env('ALGOLIA_ADMIN_KEY', ''),
        ],

    ],

];
