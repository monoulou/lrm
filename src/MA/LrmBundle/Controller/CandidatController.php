<?php


namespace MA\LrmBundle\Controller;

use MA\LrmBundle\Entity\CalendarEvent;
use MA\LrmBundle\Entity\Candidat;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Candidat controller.
 *
 */
class CandidatController extends Controller
{

    public function villeAction($cp)
    {
        $departement = '';
        $pays = '';
        $ville = '';
        $villeWithArrondissement = array('1'=>'PARIS', '2'=>'MARSEILLE', '3'=>'LYON');

        $em = $this->getDoctrine()->getManager();
        /** Récupération de la ville par son code postal */
        $villeCodePostal = $em->getRepository('MALrmBundle:VillesFranceFree')->findOneBy(array('villeCodePostal'=>$cp));


        if ($villeCodePostal)
        {
            /** Departement */
            $idDepartement = $villeCodePostal->getDepartement()->getId();//id du département
            $getDepartement = $em->getRepository('MALrmBundle:Departement')->findOneBy(array('id'=>$idDepartement));

            /** Pays */
            $idPays = $getDepartement->getPays()->getId();//id du pays
            $getPays = $em->getRepository('MALrmBundle:Pays')->findOneBy(array('id'=>$idPays));

            /** Résultat */
            $ville = $villeCodePostal->getVilleNom();//Nom de la ville
            $departement = $getDepartement->getDepartementNomUppercase();//Nom du département
            $pays = $getPays->getNomFrFr();//Nom du pays

        }else{

            $idVille = substr($cp, 0,2);
            $villeArrondissement = $em->getRepository('MALrmBundle:VillesFranceFree')->findBy(array('villeDepartement'=>$idVille));

            foreach ($villeArrondissement as $key => $city)
            {
                if (in_array($city->getVilleNom(), $villeWithArrondissement))
                {
                    if (!empty($city->getVilleCodePostal()))
                    {
                        /** Departement */
                        $idDepartement = $city->getDepartement()->getId();//id du département
                        $getDepartement = $em->getRepository('MALrmBundle:Departement')->findOneBy(array('id'=>$idDepartement));

                        /** Pays */
                        $idPays = $getDepartement->getPays()->getId();//id du pays
                        $getPays = $em->getRepository('MALrmBundle:Pays')->findOneBy(array('id'=>$idPays));

                        /** Résultat */
                        $ville =  $city->getVilleNom();//Nom de la ville
                        $departement = $getDepartement->getDepartementNomUppercase();//Nom du département
                        $pays = $getPays->getNomFrFr();//Nom du pays

                    }else{
                        $ville = null;
                    }
                }

            }

        }
        $response = new JsonResponse();

        return $response->setData(array('ville' => $ville,
            'departement' => $departement,
            'pays'=> $pays
        ));
    }
    /**
     * Lists all candidat entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $candidats = $em->getRepository('MALrmBundle:Candidat')->findAll();

        $nomClient = array();//Recuperation de la liste des entreprises clientes
        foreach ($candidats as $cle => $candidat)
        {
            $emploi = $em->getRepository('MALrmBundle:Emploi')->findOneBy(array('id'=>$candidat->getEmploi()->getId()));
            $client = $em->getRepository('MALrmBundle:Client')->findOneBy(array('id'=>$emploi->getClient()->getId()));

            $nomClient[$emploi->getId()] = $client->getDenomination();
        }




        //dump($candidats, $nomClient);die();
        return $this->render('MALrmBundle:Candidat:index.html.twig', array(
            'candidats' => $candidats,
            'nomClient' => $nomClient,
        ));
    }

    /**
     * Creates a new candidat entity.
     *
     */
    public function newAction(Request $request)
    {
        $candidat = new Candidat();
        $relanceCandidat = new CalendarEvent();
        $form = $this->createForm('MA\LrmBundle\Form\CandidatType', $candidat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $file = $candidat->getCvCandidat();
            /** encodage du nom du fichier uploadé */
            $fileName = md5(uniqid()).'.'.$file->guessExtension();

            /** Ré-ecriture du nom du cv du candidat */
            $fileName = $candidat->getNom().'_'.$candidat->getPrenom().'_cv.'.explode('.',$fileName)[1];
            $candidat->setCvCandidat($fileName);

            //$uploadDirectory = $_SERVER['DOCUMENT_ROOT'].$path->serveurPath().'/web/uploads/declaratifs/';
            $file->move(
                $this->getParameter('cv_directory'),
                $fileName
            );

            /** Si relance candidat => ajout d'un evenement au calendrier */
            $dateRelance = $form->get('dateRelance')->getData();
            if (isset($dateRelance))
            {
                $dateRelance = str_replace('/', '-', $form->get('dateRelance')->getData());
                $title = 'Relance'.' '.$form->get('nom')->getData().' '.$form->get('prenom')->getData();
                $start = new \DateTime($dateRelance);
                $end = new \DateTime($dateRelance);
                $user = $form->get('chargeRecrutement')->getData();
                $duration = true;
                $backgroundColor = '#9A939E';

                $relanceCandidat->setTitle($title);
                $relanceCandidat->setStartDate($start);
                $relanceCandidat->setEndDate($end);
                $relanceCandidat->setAllDay($duration);
                $relanceCandidat->setChargeRecrutement($user);
                $relanceCandidat->setBackgroundColor($backgroundColor);

                $em = $this->getDoctrine()->getManager();
                $em->persist($relanceCandidat);
                $em->flush();
            }

            $em = $this->getDoctrine()->getManager();
            $em->persist($candidat);
            $em->flush();

            return $this->redirectToRoute('ma_lrm_candidat_show', array('id' => $candidat->getId()));
        }

        return $this->render('MALrmBundle:Candidat:new.html.twig', array(
            'candidat' => $candidat,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a candidat entity.
     *
     */
    public function showAction(Candidat $candidat)
    {
        $deleteForm = $this->createDeleteForm($candidat);

        /** Force le retour à la ligne pour l'affichage du commentaire */
        $wrapCommentaire = wordwrap($candidat->getCommentaire(), 100, "\n", true);
        $candidat->setCommentaire($wrapCommentaire);

        return $this->render('MALrmBundle:Candidat:show.html.twig', array(
            'candidat' => $candidat,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing client entity.
     *
     */
    public function editAction(Request $request, Candidat $candidat)
    {
        $candidat->setCvCandidat(
            new File($this->getParameter('cv_directory').'/'.$candidat->getCvCandidat())
        );
        $deleteForm = $this->createDeleteForm($candidat);
        $editForm = $this->createForm('MA\LrmBundle\Form\CandidatType', $candidat);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {

            $file = $candidat->getCvCandidat();
            /** encodage du nom du fichier uploadé */
            $fileName = md5(uniqid()).'.'.$file->guessExtension();

            /** Ré-ecriture du nom du cv du candidat */
            $fileName = $candidat->getNom().'_'.$candidat->getPrenom().'_cv.'.explode('.',$fileName)[1];
            $candidat->setCvCandidat($fileName);

            //dump($candidat,$file);die();
            //$uploadDirectory = $_SERVER['DOCUMENT_ROOT'].$path->serveurPath().'/web/uploads/declaratifs/';
            $file->move(
                $this->getParameter('cv_directory'),
                $fileName
            );

            //$this->getDoctrine()->getManager()->flush();
            $em = $this->getDoctrine()->getManager();
            $em->persist($candidat);
            $em->flush();

            //Message flash.
            $this->addFlash('notice', 'La modification a correctement été effectué');

            return $this->redirectToRoute('ma_lrm_candidat_index', array('id' => $candidat->getId()));
        }

        return $this->render('MALrmBundle:Candidat:edit.html.twig', array(
            'candidat' => $candidat,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a client entity.
     *
     */
    public function deleteAction(Request $request, Candidat $candidat)
    {
        /** Suppresion d'un evenement lié à une relance candidat */
        $em = $this->getDoctrine()->getManager();
        $relanceEvent = $em->getRepository('MALrmBundle:CalendarEvent')->findOneBy(array('title' => 'Relance'.' '.$candidat->getNom().' '.$candidat->getPrenom()));

        if (!empty($relanceEvent))
        {
            $em = $this->getDoctrine()->getManager();
            $em->remove($relanceEvent);
            $em->flush();
        }
        /** ************************************************* */
        
        $em = $this->getDoctrine()->getManager();
        $em->remove($relanceEvent);
        $em->remove($candidat);
        $em->flush();
        
        //Message flash.
        $this->addFlash('notice', 'Le candidat a correctement été supprimé');

        return $this->redirectToRoute('ma_lrm_candidat_index');
    }

    /**
     * Creates a form to delete a candidat entity.
     *
     * @param Candidat $candidat The candidat entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Candidat $candidat)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('ma_lrm_candidat_delete', array('id' => $candidat->getId())))
            ->setMethod('DELETE')
            ->getForm()
            ;
    }
    
}
