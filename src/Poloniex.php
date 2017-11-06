<?php namespace stcom77\Poloniex;

use Illuminate\Support\Facades\Facade;

class Poloniex extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'poloniex';
    }
}
