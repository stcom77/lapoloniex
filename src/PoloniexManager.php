<?php

namespace stcom77\Poloniex;

class PoloniexManager
{

    const DEFAULT_TIMEOUT_SECONDS = 10;
    protected $app;
    protected $timeoutSeconds;

    public function __construct($app)
    {
        $this->app           = $app;
        $config              = $this->getConfig();
        $this->publicClient  = new ClientPublicAPI($config['urls']['public']);
        $this->tradingClient = new ClientTradingAPI($config['urls']['trading'], $config['auth']['key'], $config['auth']['sign']);
        $this->pushClient    = new ClientPushAPI();
        $this->timeoutSeconds = self::DEFAULT_TIMEOUT_SECONDS;
        $this->setRequestTimeout($this->timeoutSeconds);
    }

    protected function getConfig()
    {
        return $this->app['config']['poloniex'];
    }

    public function setRequestTimeout($timeout)
    {
        $this->timeout = $timeout;
        $this->tradingClient->setRequestTimeout($timeout);
        $this->publicClient->setRequestTimeout($timeout);
    }

    public function setTradingRequestTimeout($timeout)
    {
        $this->tradingClient->setRequestTimeout($timeout);
    }

    public function __call($method, $parameters)
    {
        if (method_exists($this->publicClient, $method)) {
            return call_user_func_array([$this->publicClient, $method], $parameters);
        }

        if (method_exists($this->tradingClient, $method)) {
            return call_user_func_array([$this->tradingClient, $method], $parameters);
        }

        if (method_exists($this->pushClient, $method)) {
            return call_user_func_array([$this->pushClient, $method], $parameters);
        }

        abort(500, "Method $method does not exist");

        return false;
    }
}
