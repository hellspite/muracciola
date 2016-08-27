<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $menu = $this->getDoctrine()
            ->getRepository('AppBundle:Menu')
            ->findOneBy(['id' => 1]);


        return $this->render('default/index.html.twig', [
            'menu' => $menu
        ]);
    }
}
