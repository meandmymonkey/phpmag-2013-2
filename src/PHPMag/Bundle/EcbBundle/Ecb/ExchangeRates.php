<?php

namespace PHPMag\Bundle\EcbBundle\Ecb;

class ExchangeRates
{
    private $adapter;
    private $parser;
    private $data;

    public function __construct(AdapterInterface $adapter, ParserInterface $parser)
    {
        $this->adapter = $adapter;
        $this->parser = $parser;
        $this->data = null;
    }

    public function getRates()
    {
        $this->loadData();

        return $this->data;
    }

    public function getRate($currency)
    {
        $this->loadData();

        if (!isset($this->data[$currency])) {
            throw new \InvalidArgumentException(sprintf('No data for currency %s', $currency));
        }

        return $this->data[$currency];
    }

    private function loadData()
    {
        if (null === $this->data)
        {
            $raw = $this->adapter->getRawData();
            $this->data = $this->parser->parse($raw);
        }
    }
}
