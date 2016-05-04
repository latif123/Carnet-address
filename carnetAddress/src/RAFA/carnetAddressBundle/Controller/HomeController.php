<?php

namespace RAFA\carnetAddressBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\BrowserKit\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class HomeController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $info = $em->getRepository('RAFAcarnetAddressBundle:Info')->findAll();
        return $this->render('RAFAcarnetAddressBundle:Home:index.html.twig', compact('info'));
    }




}
