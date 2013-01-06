<?php

namespace PHPMag\Bundle\EcbBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testList()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/rates/');

        $this->assertTrue($client->getResponse()->isSuccessful());
        $this->assertEquals(1, $crawler->filter('tr:contains("USD")')->count());
        $this->assertEquals(33, $crawler->filter('tbody tr')->count());
    }

    /**
     * @dataProvider provideRates
     */
    public function testRate($currency, $expectedRate)
    {
        $client = static::createClient();
        $crawler = $client->request('GET', sprintf('/rates/%s', $currency));

        $this->assertTrue($client->getResponse()->isSuccessful());
        $this->assertEquals(1, $crawler->filter(sprintf('html:contains("%s")', $expectedRate))->count());
    }

    public static function provideRates()
    {
        return array(
            array('USD', 1.2809),
            array('RUB', 40.1774),
            array('ZAR', 11.3448)
        );
    }

    public function testInvalidCurrency()
    {
        $client = static::createClient();
        $client->request('GET', '/rates/NONE');

        $this->assertEquals(404, $client->getResponse()->getStatusCode());
    }
}
