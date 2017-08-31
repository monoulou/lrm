<?php

namespace MA\LrmBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use MA\LrmBundle\Entity\CalendarEvent;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Validator\Constraints\DateTime;

class IndexController extends Controller
{
    public function loadAction(Request $request)
    {
        //dump($calendarService);die();
        $em = $this->getDoctrine()->getManager();
        $evenements = $em->getRepository('MALrmBundle:CalendarEvent')->findAll();

        $calendarService = $this->get('ma_lrm_bundle.service.listener');

        $events = array();

        foreach ($evenements as $key => $evenement)
        {
            $events[] = $calendarService->loadData($evenement);
        }
        return new JsonResponse($events);

    }
    
    public function indexAction(Request $request)
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $register = false;
        $roles = $user->getRoles();
        
        /** Si le role de l'utilisateur est SUPER_ADMIN, On rend la création de compte nouveau utilisateur possible */
        if($roles[0] == 'ROLE_SUPER_ADMIN')
        {
            $register = true;
        }

        /** Création du formulaire d'évenements*/
        $form = $this->createFormBuilder()
            ->add('title',  TextType::class)
            ->add('startDate', TextType::class, array(
                'attr'=> array('class' => 'dateTimePicker')))
            ->add('endDate', TextType::class, array(
                'attr'=> array('class' => 'dateTimePicker')))
            ->getForm();

        $form->handleRequest($request);


        /** Création d'un nouvel évenement */
        if ($form->isSubmitted() && $form->isValid()) {

            $title = $form->get('title')->getData();
            $start = new \DateTime($form->get('startDate')->getData());
            $end = new \DateTime($form->get('endDate')->getData());

            $event = new CalendarEvent();
            $event->setTitle($title);
            $event->setStartDate($start);
            $event->setEndDate($end);

            //dump(date('Y-m-d\TH:i'));
            //dump($event);die();
            $em = $this->getDoctrine()->getManager();
            $em->persist($event);
            $em->flush();

            return $this->redirect($this->generateUrl('ma_lrm_accueil'));
        }

        
        return $this->render('MALrmBundle:Accueil:index.html.twig',
            array(
                'register'=>$register,
                'form' => $form->createView(),
                
            ));

    }

   /* public function newAction(Request $request)
    {
        $event = new CalendarEvent();
        $form = $this->createForm('MA\LrmBundle\Form\CalendarEventType', $event);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {


        $em = $this->getDoctrine()->getManager();
        $em->persist($event);
        $em->flush();


        //return $this->redirectToRoute('ma_lrm_event_show', array('id' => $event->getId()));
        }

        return $this->render('MALrmBundle:Accueil:index.html.twig', array(
            //'event' => $event,
            'form' => $form->createView(),
        ));
    }*/


    
}
