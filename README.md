# Poloniex API Client for Laravel

## Installation

Install with composer `composer require stcom77/laravel-poloniex`.

publish config with command `php artisan vendor:publish --tag=poloniex`

add to your .env file 
```
POLONIEX_KEY = {POLONIEX_API_KEY} 
POLONIEX_SIGN = {POLONIEX_API_SIGN}
```
### For Laravel < 5.5 
add service provider to config/app.php in providers section

`stcom77\Poloniex\PoloniexServiceProvider::class`

add Poloniex facade in aliases section in config/app.php file

`stcom77\Poloniex\Poloniex::class`

### For Laravel >=5.5 you don't need to touch config files.

## Using

You can use client like this `Poloniex::returnTicker()`
To get response in json format should use client like this `Poloniex::returnTicker()->json()`

Poloniex API method names can be found on API page [https://poloniex.com/support/api/](https://poloniex.com/support/api/)  
