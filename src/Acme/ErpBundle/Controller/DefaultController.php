<?php

namespace Acme\ErpBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AcmeErpBundle:Default:index.html.twig', array('name' => $name));
    }

    public function loginAction()
    {
    	return $this->render('AcmeErpBundle:Default:login.html.twig');
    }

    public function homeAction()
    {
    	return $this->render('AcmeErpBundle:Default:home.html.twig');
    }

    public function permisoAction()
    {
        return $this->render('AcmeErpBundle:Default:permiso.html.twig');
    }

}
