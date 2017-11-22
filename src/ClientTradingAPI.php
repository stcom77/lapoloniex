<?php namespace stcom77\Poloniex;

class ClientTradingAPI extends ClientCommon
{

    protected $key;
    protected $sign;

    public function __construct($apiUrl, $key, $sign)
    {
        parent::__construct($apiUrl);
        $this->key  = $key;
        $this->sign = $sign;
    }

    public function returnBalances()
    {
        $req = ['command' => 'returnBalances'];

        return $this->postQuery($req);
    }

    public function returnCompleteBalances()
    {
        $req = ['command' => 'returnCompleteBalances'];

        return $this->postQuery($req);
    }

    public function returnDepositAddresses()
    {
        $req = ['command' => 'returnDepositAddresses'];

        return $this->postQuery($req);
    }

    public function generateNewAddress()
    {
        $req = ['command' => 'generateNewAddress'];

        return $this->postQuery($req);
    }

    public function returnOpenOrders($currencyPair = 'all')
    {
        $req = ['command' => 'returnOpenOrders', 'currencyPair' => $currencyPair];

        return $this->postQuery($req);
    }

    public function returnAllOpenOrders($currencyPair = 'all')
    {
        $req = ['command' => 'returnAllOpenOrders', 'currencyPair' => $currencyPair];

        return $this->postQuery($req);
    }

    public function returnTradeHistory()
    {
        $req = ['command' => 'returnTradeHistory'];

        return $this->postQuery($req);
    }

    public function returnOrderTrades()
    {
        $req = ['command' => 'returnOrderTrades'];

        return $this->postQuery($req);
    }

    public function buy($currencyPair, $rate, $amount)
    {
        $req = [
            'command'      => 'buy',
            'currencyPair' => $currencyPair,
            'rate'         => $rate,
            'amount'       => $amount
        ];

        return $this->postQuery($req);
    }

    public function sell($currencyPair, $rate, $amount)
    {
        $req = [
            'command'      => 'sell',
            'currencyPair' => $currencyPair,
            'rate'         => $rate,
            'amount'       => $amount
        ];


        return $this->postQuery($req, ['currencyPair' => $currencyPair, 'rate' => $rate, 'amount' => $amount]);
    }

    public function cancelOrder()
    {
        $req = ['command' => 'cancelOrder'];

        return $this->postQuery($req);
    }

    public function moveOrder()
    {
        $req = ['command' => 'moveOrder'];

        return $this->postQuery($req);
    }

    public function withdraw()
    {
        $req = ['command' => 'withdraw'];

        return $this->postQuery($req);
    }

    public function returnFeeInfo()
    {
        $req = ['command' => 'returnFeeInfo'];

        return $this->postQuery($req);
    }

    public function returnAvailableAccountBalances()
    {
        $req = ['command' => 'returnAvailableAccountBalances'];

        return $this->postQuery($req);
    }

    public function returnTradableBalances()
    {
        $req = ['command' => 'returnTradableBalances'];

        return $this->postQuery($req);
    }

    public function transferBalance()
    {
        $req = ['command' => 'transferBalance'];

        return $this->postQuery($req);
    }

    public function returnMarginAccountSummary()
    {
        $req = ['command' => 'returnMarginAccountSummary'];

        return $this->postQuery($req);
    }

    public function marginBuy()
    {
        $req = ['command' => 'marginBuy'];

        return $this->postQuery($req);
    }

    public function marginSell()
    {
        $req = ['command' => 'marginSell'];

        return $this->postQuery($req);
    }

    public function getMarginPosition()
    {
        $req = ['command' => 'getMarginPosition'];

        return $this->postQuery($req);
    }

    public function closeMarginPosition()
    {
        $req = ['command' => 'closeMarginPosition'];

        return $this->postQuery($req);
    }

    public function createLoanOffer()
    {
        $req = ['command' => 'createLoanOffer'];

        return $this->postQuery($req);
    }

    public function cancelLoanOffer()
    {
        $req = ['command' => 'cancelLoanOffer'];

        return $this->postQuery($req);
    }

    public function returnOpenLoanOffers()
    {
        $req = ['command' => 'returnOpenLoanOffers'];

        return $this->postQuery($req);
    }

    public function returnActiveLoans()
    {
        $req = ['command' => 'returnActiveLoans'];

        return $this->postQuery($req);
    }

    public function returnLendingHistory()
    {
        $req = ['command' => 'returnLendingHistory'];

        return $this->postQuery($req);
    }

    public function toggleAutoRenew()
    {
        $req = ['command' => 'toggleAutoRenew'];

        return $this->postQuery($req);
    }
}
