<?php

namespace PHPMag\Bundle\EcbBundle\Ecb;

interface ParserInterface
{
    /**
     * @param string $rawData
     * @return array
     */
    function parse($rawData);
}
