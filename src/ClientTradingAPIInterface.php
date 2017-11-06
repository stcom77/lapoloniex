<?php

namespace stcom77\Poloniex;

interface ClientTradingAPIInterface
{

    public function returnBalances();

    public function returnCompleteBalances();

    public function returnDepositAddresses();

    public function generateNewAddress();

    public function returnOpenOrders();

    public function returnTradeHistory();

    public function returnOrderTrades();

    public function buy();

    public function sell();

    public function cancelOrder();

    public function moveOrder();

    public function withdraw();

    public function returnFeeInfo();

    public function returnAvailableAccountBalances();

    public function returnTradableBalances();

    public function transferBalance();

    public function returnMarginAccountSummary();

    public function marginBuy();

    public function marginSell();

    public function getMarginPosition();

    public function closeMarginPosition();

    public function createLoanOffer();

    public function cancelLoanOffer();

    public function returnOpenLoanOffers();

    public function returnActiveLoans();

    public function returnLendingHistory();

    public function toggleAutoRenew();
}
