<?php

namespace stcom77\Poloniex;

interface ClientPublicAPIInterface
{

    public function returnTicker();

    public function return24Volume();

    public function returnOrderBook($currencyPair, $depth);

    public function returnTradeHistory($currencyPair, $start = null, $end = null);

    public function returnChartData($currencyPair, $period, $start = null, $end = null);

    public function returnCurrencies();

    public function returnLoanOrders($currency);
}
