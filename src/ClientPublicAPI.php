<?php namespace stcom77\Poloniex;

class ClientPublicAPI extends ClientCommon
{

    protected $timeout;

    public function setRequestTimeout($timeout)
    {
        $this->timeout = $timeout;
    }

    /**
     * @return $this
     */
    public function returnTicker()
    {
        return $this->getQuery(['command' => 'returnTicker'], [], $this->timeout);
    }

    /**
     * @return $this
     */
    public function return24Volume()
    {
        return $this->getQuery(['command' => 'return24Volume'], [], $this->timeout);
    }

    public function returnOrderBook($currencyPair, $depth)
    {
        return $this->getQuery(['command' => 'returnOrderBook', 'currencyPair' => $currencyPair, $depth => $depth], [], $this->timeout);
    }

    public function returnTradeHistoryPublic($currencyPair, $start = null, $end = null, $limit = 500)
    {
        return $this->getQuery(['command' => 'returnTradeHistory', 'currencyPair' => $currencyPair, 'start' => $start, 'end' => $end, 'limit' => $limit], [], $this->timeout);
    }

    public function returnChartData($currencyPair, $candlePeriodSeconds, $startUnixTimestamp = null, $endUnixTimestamp = null)
    {
        return $this->getQuery(['command' => 'returnChartData', 'currencyPair' => $currencyPair, 'period' => $candlePeriodSeconds, 'start' => $startUnixTimestamp, 'end' => $endUnixTimestamp], [],
            $this->timeout);
    }

    public function returnCurrencies()
    {
        return $this->getQuery(['command' => 'returnCurrencies'], [], $this->timeout);
    }

    public function returnLoanOrders($currency)
    {
        return $this->getQuery(['command' => 'returnLoanOrders', 'currency' => $currency], [], $this->timeout);
    }
}
