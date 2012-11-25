<?php

namespace PHPMag\Bundle\EcbBundle\Ecb;

use Guzzle\Http\ClientInterface;

class MockAdapter implements AdapterInterface
{
    /**
     * @{inheritdoc}
     */
    public function getRawData()
    {
        return <<< EOF
<?xml version="1.0" encoding="UTF-8"?>
<gesmes:Envelope xmlns:gesmes="http://www.gesmes.org/xml/2002-08-01" xmlns="http://www.ecb.int/vocabulary/2002-08-01/eurofxref">
	<gesmes:subject>Reference rates</gesmes:subject>
	<gesmes:Sender>
		<gesmes:name>European Central Bank</gesmes:name>
	</gesmes:Sender>
	<Cube>
		<Cube time='2012-11-20'>
			<Cube currency='USD' rate='1.2809'/>
			<Cube currency='JPY' rate='104.39'/>
			<Cube currency='BGN' rate='1.9558'/>
			<Cube currency='CZK' rate='25.399'/>
			<Cube currency='DKK' rate='7.4582'/>
			<Cube currency='GBP' rate='0.80465'/>
			<Cube currency='HUF' rate='281.56'/>
			<Cube currency='LTL' rate='3.4528'/>
			<Cube currency='LVL' rate='0.6961'/>
			<Cube currency='PLN' rate='4.1278'/>
			<Cube currency='RON' rate='4.5370'/>
			<Cube currency='SEK' rate='8.6463'/>
			<Cube currency='CHF' rate='1.2049'/>
			<Cube currency='NOK' rate='7.3350'/>
			<Cube currency='HRK' rate='7.5497'/>
			<Cube currency='RUB' rate='40.1774'/>
			<Cube currency='TRY' rate='2.3016'/>
			<Cube currency='AUD' rate='1.2331'/>
			<Cube currency='BRL' rate='2.6648'/>
			<Cube currency='CAD' rate='1.2755'/>
			<Cube currency='CNY' rate='7.9837'/>
			<Cube currency='HKD' rate='9.9290'/>
			<Cube currency='IDR' rate='12343.73'/>
			<Cube currency='ILS' rate='5.0285'/>
			<Cube currency='INR' rate='70.5710'/>
			<Cube currency='KRW' rate='1388.01'/>
			<Cube currency='MXN' rate='16.7542'/>
			<Cube currency='MYR' rate='3.9169'/>
			<Cube currency='NZD' rate='1.5684'/>
			<Cube currency='PHP' rate='52.766'/>
			<Cube currency='SGD' rate='1.5683'/>
			<Cube currency='THB' rate='39.285'/>
			<Cube currency='ZAR' rate='11.3448'/>
		</Cube>
	</Cube>
</gesmes:Envelope>
EOF;
    }
}



