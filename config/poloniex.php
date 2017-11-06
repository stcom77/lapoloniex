<?php

return [
    'urls' => [
        'trading' => 'https://poloniex.com/tradingApi',
        'public' => 'https://poloniex.com/public',
    ],

    'auth' => [
        'key'    => env('POLONIEX_KEY', ''),
        'sign' => env('POLONIEX_SIGN', ''),
    ],

];
