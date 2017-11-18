<?php namespace stcom77\Poloniex;

use Illuminate\Support\Facades\Facade;

/**
 * @see \stcom77\Poloniex\ClientPublicAPI
 * @see \stcom77\Poloniex\ClientTradingAPI
 * @see \stcom77\Poloniex\ClientPushAPI
 */

/**
 * @method static returnTicker()
 * @method static return24Volume()
 * @method static returnOrderBook(\string $currencyPair, \int $depth)
 * @method static returnTradeHistoryPublic(\string $currencyPair, \int $start = null, \int $end = null)
 * @method static returnChartData(\string $currencyPair, \int $period, \int $start = null, \int $end = null)
 * @method static returnCurrencies()
 * @method static returnLoanOrders(\string $currency)
 * @method static returnBalances()
 * @method static returnCompleteBalances()
 * @method static returnDepositAddresses()
 * @method static generateNewAddress()
 * @method static returnOpenOrders()
 * @method static returnTradeHistory()
 * @method static returnOrderTrades()
 * @method static buy()
 * @method static sell()
 * @method static cancelOrder()
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
 */

class Poloniex extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'poloniex';
    }
}
