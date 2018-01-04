<?php namespace stcom77\Poloniex;

use Illuminate\Support\Facades\Facade;

/**
 * @see \stcom77\Poloniex\ClientPublicAPI
 * @see \stcom77\Poloniex\ClientTradingAPI
 * @see \stcom77\Poloniex\ClientPushAPI
 */

/**
 * @method static setRequestTimeout(\int $timeout)
 * @method static returnTicker()
 * @method static return24Volume()
 * @method static returnOrderBook(\string $currencyPair, \int $depth)
 * @method static returnTradeHistoryPublic(\string $currencyPair, \int $start = null, \int $end = null, \int $limit = 10000)
 * @method static returnChartData(\string $currencyPair, \int $candlePeriodSeconds, \int $startUnixTimestamp = null, \int $endUnixTimestamp = null)
 * @method static returnCurrencies()
 * @method static returnLoanOrders(\string $currency)
 * @method static returnBalances()
 * @method static returnCompleteBalances()
 * @method static returnDepositAddresses()
 * @method static generateNewAddress()
 * @method static returnOpenOrders()
 * @method static returnAllOpenOrders()
 * @method static returnTradeHistory(\string $currencyPair = "all", \int $start = null, \int $end = null, \int $limit = 10000)
 * @method static returnOrderTrades()
 * @method static buy(\string $currencyPair, \double $rate, \double $amount)
 * @method static sell(\string $currencyPair, \double $rate, \double $amount)
 * @method static cancelOrder(\string $orderNumber)
 * @method static moveOrder()
 * @method static withdraw()
 * @method static returnFeeInfo()
 * @method static returnAvailableAccountBalances()
 * @method static returnTradableBalances()
 * @method static transferBalance()
 * @method static returnMarginAccountSummary()
 * @method static marginBuy()
 * @method static marginSell()
 * @method static getMarginPosition()
 * @method static closeMarginPosition()
 * @method static createLoanOffer()
 * @method static cancelLoanOffer()
 * @method static returnOpenLoanOffers()
 * @method static returnActiveLoans()
 * @method static returnLendingHistory()
 * @method static toggleAutoRenew()
 * @method static returnDepositsWithdrawals(\int $startTimestamp, \int $endTimestamp)
 */

class Poloniex extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'poloniex';
    }
}
