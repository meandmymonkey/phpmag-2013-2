<?php

namespace PHPMag\Bundle\EcbBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

/**
 * @Route("/rates")
 */
class DefaultController extends Controller
{
    /**
     * @Route("/")
     * @Template()
     * @Method("GET")
     */
    public function listAction()
    {
        return array(
            'rates' => $this->get('ecb.rates')->getRates()
        );
    }

    /**
     * @Route("/{rate}")
     * @Method("GET")
     */
    public function showAction($rate)
    {
        try {
            $rate = $this->get('ecb.rates')->getRate($rate);
        } catch (\InvalidArgumentException $e) {
            throw $this->createNotFoundException('Unknown currency');
        }

        return new Response($rate);
    }
}
