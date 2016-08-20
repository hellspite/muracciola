<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class GalleryController extends Controller
{
    /**
     * @Route("/gallery", name="gallery")
     */
    public function galleryAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $photos = $em->getRepository('AppBundle:Photo')->findAll();

        return $this->render('gallery/list.html.twig', [
            'photos' => $photos,
        ]);
    }
}
