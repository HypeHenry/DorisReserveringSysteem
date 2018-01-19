<?php

namespace AppointmentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('AppointmentBundle:Default:index.html.twig');
    }

    /**
     * @Route("/hairproducts")
     */
    public function hairProductsAction()
    {
        return $this->render('AppointmentBundle:Default:hairProducts.html.twig');
    }

    /**
     * @Route("/hairstyles")
     */
    public function hairStylesAction()
    {
        return $this->render('AppointmentBundle:Default:hairStyles.html.twig');
    }

    /**
     * @Route("/hairstyles/appointment")
     */
    public function portfolioAction()
    {
        return $this->render('AppointmentBundle:Default:Portfolio.html.twig');
    }

    /**
     * @Route("/contact")
     */
    public function contactAction()
    {
        return $this->render('AppointmentBundle:Default:contact.html.twig');
    }

    /**
     * @Route("/about")
     */
    public function aboutMeAction()
    {
        return $this->render('AppointmentBundle:Default:aboutMe.html.twig');
    }
}
