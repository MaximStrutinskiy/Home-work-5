<?php

namespace SendBoxCompany\SendBoxBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SendBoxCompanySendBoxBundle:Default:index.html.twig');
    }
}
