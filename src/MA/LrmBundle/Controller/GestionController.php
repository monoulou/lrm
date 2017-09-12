<?php

namespace MA\LrmBundle\Controller;

use MA\LrmBundle\Entity\Gestion;
use  MA\LrmBundle\Entity\Candidat;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use MA\LrmBundle\MALrmBundle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Gestion controller.
 *
 */
class GestionController extends Controller
{
    /**
     * Lists all gestion entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $gestions = $em->getRepository('MALrmBundle:Gestion')->findAll();

        $suiviOffre = array();

        /** *************************Permet le suivi des postes pourvus et restant à pourvoir**************************** */
        foreach ($gestions as $index => $gestion)
        {
            $idEmploi = $gestion->getEmploi()->getId();

            $getEmploi = $em->getRepository('MALrmBundle:Emploi')->findOneBy(array('id'=>$idEmploi));
            $getClient = $em->getRepository('MALrmBundle:Client')->findOneBy(array('id'=>$getEmploi->getClient()->getId()));
            //$countPostePourvu = $em->getRepository('MALrmBundle:Gestion')->countPostePourvu($getEmploi->getId());
            $postePourvu = $em->getRepository('MALrmBundle:Gestion')->findBy(array('emploi'=>$getEmploi->getId()));

            $nbrPoste = $getEmploi->getNombrePoste();

            
            $suiviOffre[$gestion->getEmploi()->getId()] = array('1'=>$getEmploi->getIntitule(),
                    '2'=>$getClient->getDenomination(),
                    '3'=>$nbrPoste,
                    '4'=>count($postePourvu),
                    '5'=>$nbrPoste - count($postePourvu));
        }
        /** ************************************************************************************************************ */
       //
        return $this->render('MALrmBundle:Gestion:index.html.twig', array(
            'gestions' => $gestions,
            'suiviOffre' => $suiviOffre,
        ));
    }

    /**
     * Creates a new gestion entity.
     *
     */
    public function newAction(Request $request)
    {

        $gestion = new Gestion();
        $form = $this->createForm('MA\LrmBundle\Form\GestionType', $gestion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($gestion);
            $em->flush();

            return $this->redirectToRoute('ma_lrm_gestion_show', array('id' => $gestion->getId()));
        }

        return $this->render('MALrmBundle:Gestion:new.html.twig', array(
            'gestion' => $gestion,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a gestion entity.
     *
     */
    public function showAction(Gestion $gestion)
    {
        $deleteForm = $this->createDeleteForm($gestion);

        return $this->render('MALrmBundle:Gestion:show.html.twig', array(
            'gestion' => $gestion,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Liste des candidats recrutés par poste
     * 
     */
    public function resumeAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $getEmploi = $em->getRepository('MALrmBundle:Emploi')->findOneBy(array('id'=>$id));
        $gestions = $em->getRepository('MALrmBundle:Gestion')->findBy(array('emploi'=>$id));

        $resumeByPoste = array();
        $arrayPoste = array();
        $arrayCandidat = array();

        foreach ($gestions as $index => $gestion)
        {
            //dump($gestion);die();
            $getCandidat = $em->getRepository('MALrmBundle:Candidat')->findOneBy(array('id'=>$gestion->getCandidat()->getId()));
            $getClient = $em->getRepository('MALrmBundle:Client')->findOneBy(array('id'=>$gestion->getEmploi()->getClient()->getId()));
            $getUser = $em->getRepository('MAUserBundle:User')->findOneBy(array('id'=>$gestion->getChargeRecrutement()->getId()));

            $arrayCandidat[$getCandidat->getId()] = array(
                '1' => $getCandidat->getNom(),
                '2' => $getCandidat->getPrenom(),
                '3' => $getUser->getUsername(),
                '4' => $gestion->getDateIntegration(),
            );

            $arrayPoste = array('1'=> $gestion->getEmploi()->getIntitule(), '2'=>$getClient->getDenomination());
        }

        $resumeByPoste[$getEmploi->getId()] =  $arrayCandidat;

        return $this->render('MALrmBundle:Gestion:resume.html.twig', array(
            'arrayPoste' => $arrayPoste,
            'resumeByPoste' => $resumeByPoste,
        ));
    }
    /*
     * 
     */
    public function detailAction(Candidat $candidat)
    {
        $em = $this->getDoctrine()->getManager();
        $gestions = $em->getRepository('MALrmBundle:Gestion')->findAll();

        $arrCandidat = array();

        foreach ($gestions as $key => $gestion)
        {
            if ($gestion->getCandidat()->getId() == $candidat->getId())
            {
                $arrCandidat[$candidat->getId()] = $gestion->getId();
            }
        }
        
        return $this->render('MALrmBundle:Gestion:detail.html.twig', array(
            'arrCandidat' => $arrCandidat,
            'candidat' => $candidat,
            'gestions' => $gestions,
        ));
    }

    /**
     * Displays a form to edit an existing gestion entity.
     *
     */
    public function editAction(Request $request, Gestion $gestion)
    {
        $deleteForm = $this->createDeleteForm($gestion);
        $editForm = $this->createForm('MA\LrmBundle\Form\GestionType', $gestion);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            
            return $this->redirectToRoute('ma_lrm_gestion_index', array('id' => $gestion->getId()));
        }

        return $this->render('MALrmBundle:Gestion:edit.html.twig', array(
            'gestion' => $gestion,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a gestion entity.
     *
     */
    public function deleteAction(Request $request, Gestion $gestion)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($gestion);
        $em->flush();
        
        return $this->redirectToRoute('ma_lrm_gestion_index');
    }

    /**
     * Creates a form to delete a gestion entity.
     *
     * @param Gestion $gestion The gestion entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Gestion $gestion)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('ma_lrm_gestion_delete', array('id' => $gestion->getId())))
            ->setMethod('DELETE')
            ->getForm()
            ;
    }

}
