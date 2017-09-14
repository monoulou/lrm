<?php

namespace MA\LrmBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use MA\LrmBundle\Entity\CalendarEvent;
use MA\UserBundle\Repository\UserRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Validator\Constraints\DateTime;

class IndexController extends Controller
{
    /**
     * Chargement des évenements.
     * @param Request $request
     * @return JsonResponse
     */
    public function loadAction(Request $request)
    {
        //$user = $this->get('security.token_storage')->getToken()->getUser();
        //$idUser = $user->getId();
        //dump($idUser);die();
        /** Recupération session */
        $session = $this->get("session");
        $idUser = $session->get('idUser');//Recupération de l'utilisateur en cours
        $userSelected = $session->get('userSelected');//Recupération de l'utilisateur selectionné pour affichage planning

        //dump($idUser, $userSelected);die();
        $em = $this->getDoctrine()->getManager();
        $evenements = $em->getRepository('MALrmBundle:CalendarEvent')->findAll();


        $calendarService = $this->get('ma_lrm_bundle.service.listener');
        $events = array();

        if (empty($userSelected))
        {
            //$listeCandidat = $em->getRepository('MALrmBundle:Candidat')->findBy(array('chargeRecrutement' => $idUser));
            foreach ($evenements as $key => $evenement)
            {
                //dump($evenement);die();
                if ($evenement->getChargeRecrutement()->getId() == $idUser)
                {
                    //Retourne les évenements de l'utilisateur en cours
                    $events[] = $calendarService->loadData($evenement);
                }

            }
        } else{
            foreach ($evenements as $key => $evenement)
            {
                //dump($evenement);die();
                if ($evenement->getChargeRecrutement()->getId() == $userSelected)
                {
                    //Retourne les évenements de l'utilisateur selectionné
                    $events[] = $calendarService->loadData($evenement);
                }

            }
        }

        return new JsonResponse($events);
    }
    
    /**
     * Edite un evenement par redimensionement
     * @param Request $request
     * @return Response
     */
    public function resizeEventAction(Request $request)
    {
      if ($request->isXmlHttpRequest())
      {
          $idEvent = $request->request->get('id');
          $startDate = $request->request->get('start');
          $endDate = $request->request->get('end');

          $em = $this->getDoctrine()->getManager();
          $rst = $em->getRepository('MALrmBundle:CalendarEvent')->resizeEvent($idEvent,$startDate,$endDate);

      }

        return new Response("Erreur.");
    }

    /**
     * Edite un évenement par glissement
     * @param Request $request
     * @return Response
     */
    public function dropEventAction(Request $request)
    {
        if ($request->isXmlHttpRequest())
        {
            $idEvent = $request->request->get('id');
            $startDate = $request->request->get('start');
            $endDate = $request->request->get('end');

            $em = $this->getDoctrine()->getManager();
            $rst = $em->getRepository('MALrmBundle:CalendarEvent')->dropEvent($idEvent,$startDate,$endDate);

        }

        return new Response("Erreur.");
    }

    /**
     * Suppression d'un évenement
     * @param Request $request
     * @return Response
     */
    public function deleteEventAction(Request $request)
    {
        if ($request->isXmlHttpRequest())
        {
            $idEvent = $request->request->get('id');
            
            $em = $this->getDoctrine()->getManager();
            $rst = $em->getRepository('MALrmBundle:CalendarEvent')->deleteEvent($idEvent);

        }

        return new Response("Erreur.");
    }

    /**
     * Edite un évenement par son titre et commentaire
     * @param Request $request
     * @return Response
     */
    public function editEventAction(Request $request)
    {
        if ($request->isXmlHttpRequest())
        {
            $idEvent = $request->request->get('id');
            $newTitle = $request->request->get('new_title');
            $newComm = $request->request->get('new_comm');

            $em = $this->getDoctrine()->getManager();
            $rst = $em->getRepository('MALrmBundle:CalendarEvent')->editEvent($idEvent, $newTitle, $newComm);

        }

        return new Response("Erreur.");
    }

    /**
     * Selection d'un utilisateur pour affichage planning
     * @param Request $request
     * @return Response
     */
    public function selectUserAction(Request $request)
    {
        if ($request->isXmlHttpRequest())
        {
            $userSelected = $request->request->get('id');
            $session = $this->get("session");
            $session->set('userSelected', $userSelected);

            $response = new Response();
            $arr_user = json_encode(array('utilisateur' => $userSelected));
            $response->headers->set('Content-Type', 'application/json');
            $response->setContent($arr_user);

            return $response;

        }

        return new Response("Erreur");
    }

    public function indexAction(Request $request)
    {

        $user = $this->get('security.token_storage')->getToken()->getUser();
        $register = false;
        $roles = $user->getRoles();
        $idUser = $user->getId();

        /** Mise en session de l'utilisateur au chargement de la page */
        $session = $this->get("session");
        $session->set('idUser', $idUser);
        
        /** Si le role de l'utilisateur est SUPER_ADMIN, On rend la création de compte nouveau utilisateur possible */
        if($roles[0] == 'ROLE_SUPER_ADMIN')
        {
            $register = true;
        }
        
        /** Création du formulaire d'évenements*/
        $color = array( 'Important'=>'#ee2930', 'Normal'=>'#337ab7', 'Mémo'=>'#9A939E');
        $allDay = array( 'Oui' => true, 'Non' => false);

        $datas = array();
        $form = $this->createFormBuilder($datas)
            ->add('title',  TextType::class)
            ->add('startDate', TextType::class, array(
                'attr'=> array('class' => 'dateTimePicker')))
            ->add('endDate', TextType::class, array(
                'attr'=> array('class' => 'dateTimePicker')))
            ->add('commentaire', TextareaType::class, array('required' => false))
            ->add('allDay', ChoiceType::class, array('choices' => $allDay ))
            ->add('backgroundColor', ChoiceType::class, array('choices' => $color ))

            ->getForm();

        $form->handleRequest($request);

        /** Création d'un nouvel évenement */
        if ($form->isSubmitted() && $form->isValid()) {
            
            $title = $form->get('title')->getData();
            $start = new \DateTime($form->get('startDate')->getData());
            $end = new \DateTime($form->get('endDate')->getData());
            $commentaire = wordwrap($form->get('commentaire')->getData(), 100, "\n", true);
            $duration = $form->get('allDay')->getData();
            $backgroundColor = $form->get('backgroundColor')->getData();

            $event = new CalendarEvent();
            $event->setTitle($title);
            $event->setStartDate($start);
            $event->setEndDate($end);
            $event->setAllDay($duration);
            $event->setCommentaire($commentaire);
            $event->setChargeRecrutement($user);
            $event->setBackgroundColor($backgroundColor);

            $em = $this->getDoctrine()->getManager();
            $em->persist($event);
            $em->flush();
            
            return $this->redirect($this->generateUrl('ma_lrm_accueil'));
        }
        
        /** Selection d'un autre planning */
        $userData = array();
        $userForm = $this->createFormBuilder($userData)
            ->add('chargeRecrutement', EntityType::class, array(
                'class' => 'MAUserBundle:User',
                /*'query_builder' => function (UserRepository $ur) {
                    $admin = 'admin';
                    return $ur->createQueryBuilder('u')
                        ->where('u.username != ?1')
                        ->setParameter(1, $admin);

                },*/
                'placeholder' => 'Utilisateur',
                'choice_label' => 'username',
                'expanded' => false,
                'multiple' => false
            ))

            ->getForm();

        $userForm->handleRequest($request);

        /** Création d'un edit form */
        $editData = array();
        $editForm = $this->createFormBuilder($editData)
            ->add('title',  TextType::class, array(
                'attr'=> array('class' => 'input_edit_title')))
            ->add('commentaire', TextareaType::class, array(
                'attr'=> array('class' => 'input_edit_comm')))

            ->getForm();

        $editForm->handleRequest($request);

        /** Affichage des clients a facturer */
        $today = date('d/m/Y');
        //dump($today);die();

        $em = $this->getDoctrine()->getManager();
        $getGestion = $em->getRepository('MALrmBundle:Gestion')->findAll();
        $clientAfacturer = array();

        foreach ($getGestion as $index => $gestion)
        {

            if ($gestion->getDateIntegration() == $today)
            {
                //dump($gestion);die();
                $getCandidat = $em->getRepository('MALrmBundle:Candidat')->findOneBy(array('id' => $gestion->getCandidat()->getId()));
                $getEmploi = $em->getRepository('MALrmBundle:Emploi')->findOneBy(array('id' => $gestion->getEmploi()->getId()));
                $getClient = $em->getRepository('MALrmBundle:Client')->findOneBy(array('id' => $getEmploi->getClient()->getId()));
                $getUser = $em->getRepository('MAUserBundle:User')->findOneBy(array('id' => $gestion->getChargeRecrutement()->getId()));
                

                if ($getClient->getEtat() == 'En cours' || $getClient->getEtat() == 'Partiellement Facturé')
                {
                    $clientAfacturer[$getClient->getId().':'.$gestion->getCandidat()->getId()] = array(
                        '1' =>$getClient->getDenomination(),
                        '2' =>$getCandidat->getNom().' '.$getCandidat->getPrenom(),
                        '3' =>$getUser->getUsername(),
                        '4' => $getClient->getId());
                }
            }

        };

        
        return $this->render('MALrmBundle:Accueil:index.html.twig',
            array(
                'register'=>$register,
                'form' => $form->createView(),
                'userForm' => $userForm->createView(),
                'editForm' => $editForm->createView(),
                'clientAfacturer' => $clientAfacturer,
            ));

    }
    
    
}
