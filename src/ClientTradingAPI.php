<?php namespace stcom77\Poloniex;

class ClientTradingAPI extends ClientCommon
{

    const DEFAULT_TIMEOUT_SECONDS = 2;
    protected $key;
    protected $sign;
    protected $timeout;

    public function __construct($apiUrl, $key, $sign)
    {
        parent::__construct($apiUrl);
        $this->key     = $key;
        $this->sign    = $sign;
        $this->timeout = self::DEFAULT_TIMEOUT_SECONDS;
    }

    public function setRequestTimeout($timeout)
    {
        $this->timeout = $timeout;
    }

    public function returnBalances()
    {
        $req = ['command' => 'returnBalances'];

        return $this->postQuery($req, [], $this->timeout);
    }

    public function returnCompleteBalances()
    {
        $req = ['command' => 'returnCompleteBalances'];

        return $this->postQuery($req, [], $this->timeout);
    }

    public function returnDepositAddresses()
    {
        $req = ['command' => 'returnDepositAddresses'];

        return $this->postQuery($req, [], $this->timeout);
    }

    public function generateNewAddress()
    {
        $req = ['command' => 'generateNewAddress'];

        return $this->postQuery($req, [], $this->timeout);
    }

    public function returnOpenOrders($currencyPair = 'all')
    {
        $req = ['command' => 'returnOpenOrders', 'currencyPair' => $currencyPair];

        return $this->postQuery($req, [], $this->timeout);
    }

    public function returnAllOpenOrders($currencyPair = 'all')
    {
        $req = ['command' => 'returnAllOpenOrders', 'currencyPair' => $currencyPair];

        return $this->postQuery($req, [], $this->timeout);
    }

    public function returnTradeHistory($currencyPair = "all", $start = null, $end = null, $limit = 10000)
    {
        $req = [
            'command'      => 'returnTradeHistory',
            'currencyPair' => $currencyPair,
            'limit'        => $limit
        ];
        if ($start) {
            $req['start'] = $start;
        }
        if ($end) {
            $req['end'] = $end;
        }

        return $this->postQuery($req, [], $this->timeout);
    }

    public function returnOrderTrades()
    {
        $req = ['command' => 'returnOrderTrades'];

        return $this->postQuery($req, [], $this->timeout);
    }

    public function buy($currencyPair, $rate, $amount)
    {
        $req = [
            'command'      => 'buy',
            'currencyPair' => $currencyPair,
            'rate'         => $rate,
            'amount'       => $amount
        ];

        return $this->postQuery($req, [], $this->timeout);
    }

    public function sell($currencyPair, $rate, $amount)
    {
        $req = [
            'command'      => 'sell',
            'currencyPair' => $currencyPair,
            'rate'         => $rate,
            'amount'       => $amount
        ];


        return $this->postQuery($req, ['currencyPair' => $currencyPair, 'rate' => $rate, 'amount' => $amount], $this->timeout);
    }

    public function cancelOrder($orderNumber)
    {
        $req = [
            'command'     => 'cancelOrder',
            'orderNumber' => $orderNumber
        ];

        return $this->postQuery($req, [], $this->timeout);
    }

    public function moveOrder()
    {
        $req = ['command' => 'moveOrder'];

        return $this->postQuery($req, [], $this->timeout);
    }

    public function withdraw()
    {
        $req = ['command' => 'withdraw'];

        return $this->postQuery($req, [], $this->timeout);
    }

    public function returnFeeInfo()
    {
        $req = ['command' => 'returnFeeInfo'];

        return $this->postQuery($req, [], $this->timeout);
    }

    public function returnAvailableAccountBalances()
    {
        $req = ['command' => 'returnAvailableAccountBalances'];

        return $this->postQuery($req, [], $this->timeout);
    }

    public function returnTradableBalances()
    {
        $req = ['command' => 'returnTradableBalances'];

        return $this->postQuery($req, [], $this->timeout);
    }

    public function transferBalance()
    {
        $req = ['command' => 'transferBalance'];

        return $this->postQuery($req, [], $this->timeout);
    }

    public function returnMarginAccountSummary()
    {
        $req = ['command' => 'returnMarginAccountSummary'];

        return $this->postQuery($req, [], $this->timeout);
    }

    public function marginBuy()
    {
        $req = ['command' => 'marginBuy'];

        return $this->postQuery($req, [], $this->timeout);
    }

    public function marginSell()
    {
        $req = ['command' => 'marginSell'];

        return $this->postQuery($req, [], $this->timeout);
    }

    public function getMarginPosition()
    {
        $req = ['command' => 'getMarginPosition'];

        return $this->postQuery($req, [], $this->timeout);
    }

    public function closeMarginPosition()
    {
        $req = ['command' => 'closeMarginPosition'];

        return $this->postQuery($req, [], $this->timeout);
    }

    public function createLoanOffer()
    {
        $req = ['command' => 'createLoanOffer'];

        return $this->postQuery($req, [], $this->timeout);
    }

    public function cancelLoanOffer()
    {
        $req = ['command' => 'cancelLoanOffer'];

        return $this->postQuery($req, [], $this->timeout);
    }

    public function returnOpenLoanOffers()
    {
        $req = ['command' => 'returnOpenLoanOffers'];

        return $this->postQuery($req, [], $this->timeout);
    }

    public function returnActiveLoans()
    {
        $req = ['command' => 'returnActiveLoans'];

        return $this->postQuery($req, [], $this->timeout);
    }

    public function returnLendingHistory()
    {
        $req = ['command' => 'returnLendingHistory'];

        return $this->postQuery($req, [], $this->timeout);
    }

    public function toggleAutoRenew()
    {
        $req = ['command' => 'toggleAutoRenew'];

        return $this->postQuery($req, [], $this->timeout);
    }

    public function returnDepositsWithdrawals($start, $end)
    {
        $req = [
            'command' => 'returnDepositsWithdrawals',
            'start'   => $start,
            'end'     => $end
        ];

        return $this->postQuery($req, [], $this->timeout);
    }
}
