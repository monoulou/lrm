<?php

namespace MA\LrmBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use MA\LrmBundle\Entity\CalendarEvent;
use Symfony\Component\HttpFoundation\Request;

class IndexController extends Controller
{
    public function loadAction()
    {
        $calendarService = $this->get('ma_lrm_bundle.service.listener');
        //dump($calendarService);die();

        $em = $this->getDoctrine()->getManager();
        $evenements = $em->getRepository('MALrmBundle:CalendarEvent')->findAll();

        $events = array();

        foreach ($evenements as $key => $evenement)
        {
            $events = $calendarService->loadData($evenement);
            //$events = $calendarService->loadData($evenement);
        }

        dump($events);die();
        $response = new JsonResponse();
        return $response->setData(array('fullCalendarEvent' => $events));

    }
    
    public function indexAction()
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $register = false;
        $roles = $user->getRoles();
        
        /** Si le role de l'utilisateur est SUPER_ADMIN, On rend la création de compte nouveau utilisateur possible */
        if($roles[0] == 'ROLE_SUPER_ADMIN')
        {
            $register = true;
        }

      


        return $this->render('MALrmBundle:Accueil:index.html.twig',
            array('register'=>$register));

    }


    
}
