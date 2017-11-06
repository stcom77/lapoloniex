<?php

namespace stcom77\Poloniex;

interface ClientPushAPIInterface
{

    public function getTicker();

    public function getOrderBookAndTrades();

    public function getTrollBoxMessages();
}
