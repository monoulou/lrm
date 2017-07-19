<?php

namespace MA\LrmBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class TestController extends Controller
{
    public function indexAction()
    {
        return $this->render('MALrmBundle:Test:test.html.twig');
    }
}