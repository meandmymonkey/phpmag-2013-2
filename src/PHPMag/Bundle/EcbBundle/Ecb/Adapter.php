<?php

namespace PHPMag\Bundle\EcbBundle\Ecb;

use Guzzle\Http\ClientInterface;

class Adapter implements AdapterInterface
{
    private $httpAdapter;
    private $endpointUrl;

    public function __construct(ClientInterface $httpAdapter, $endpointUrl)
    {
        $this->httpAdapter = $httpAdapter;
        $this->endpointUrl = $endpointUrl;
    }

    /**
     * @{inheritdoc}
     */
    public function getRawData()
    {
        $request = $this->httpAdapter->get($this->endpointUrl);
        $response = $request->send();

        return $response->getBody(true);
    }
}
