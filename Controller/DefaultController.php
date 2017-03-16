<?php

namespace Boda\EdiParserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BodaEdiParserBundle:Default:index.html.twig');
    }
}
