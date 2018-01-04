<?php namespace stcom77\Poloniex;


class ClientPublicAPI extends ClientCommon
{

    /**
     * @return $this
     */
    public function returnTicker()
    {
        return $this->getQuery(['command' => 'returnTicker']);
    }

    /**
     * @return $this
     */
    public function return24Volume()
    {
        return $this->getQuery(['command' => 'return24Volume']);
    }

    public function returnOrderBook($currencyPair, $depth)
    {
        return $this->getQuery(['command' => 'returnOrderBook', 'currencyPair' => $currencyPair, $depth => $depth]);
    }

    public function returnTradeHistoryPublic($currencyPair, $start = null, $end = null)
    {
        return $this->getQuery(['command' => 'returnTradeHistory', 'currencyPair' => $currencyPair, 'start' => $start, 'end' => $end]);
    }

    public function returnChartData($currencyPair, $candlePeriodSeconds, $startUnixTimestamp = null, $endUnixTimestamp = null)
    {
        return $this->getQuery(['command' => 'returnChartData', 'currencyPair' => $currencyPair, 'period' => $candlePeriodSeconds, 'start' => $startUnixTimestamp, 'end' => $endUnixTimestamp]);
    }

    public function returnCurrencies()
    {
        return $this->getQuery(['command' => 'returnCurrencies']);
    }

    public function returnLoanOrders($currency)
    {
        return $this->getQuery(['command' => 'returnLoanOrders', 'currency' => $currency]);
    }
}
