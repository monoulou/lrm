<?php

namespace MA\LrmBundle\Controller;

use MA\LrmBundle\Entity\Gestion;
use  MA\LrmBundle\Entity\Candidat;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use MA\LrmBundle\MALrmBundle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\DateTime;
use DateTimeZone;

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
       //dump($suiviOffre);die();
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

            $idCandidat = $gestion->getCandidat()->getId();
            $em = $this->getDoctrine()->getManager();
            $gestions = $em->getRepository('MALrmBundle:Gestion')->findAll();

            if (!empty($gestions))
            {
                foreach ($gestions as $key => $getGestion)
                {
                    if ($getGestion->getCandidat()->getId() != $idCandidat)//Vérifie si le candidat n'occupe pas déjà un poste.
                    {
                        $stop = self::allPostCompleted($gestion);//Vérifie si des postes sont encore dispo pour une offre.

                        if ($stop == true)
                        {
                            $em = $this->getDoctrine()->getManager();
                            $em->persist($gestion);
                            $em->flush();

                            return $this->redirectToRoute('ma_lrm_gestion_show', array('id' => $gestion->getId()));
                        }
                        else
                        {
                            //Message flash.
                            $this->addFlash('notice', 'L\'ensemble des postes pour cette offre sont pourvus');
                            return $this->redirectToRoute('ma_lrm_gestion_index');
                        }
                    }else
                    {
                        //Message flash.
                        $this->addFlash('notice', 'Ce candidat occupe un déjà poste');
                        return $this->redirectToRoute('ma_lrm_gestion_index');
                    }
                }
            }else
            {
                $em = $this->getDoctrine()->getManager();
                $em->persist($gestion);
                $em->flush();

                return $this->redirectToRoute('ma_lrm_gestion_show', array('id' => $gestion->getId()));
            }

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

        /** Mise en session des infos liés au poste */
        $session = $this->get("session");
        $session->set('arrayPoste', $arrayPoste);
        $session->set('resumeByPoste', $resumeByPoste);
        
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

        $positif=  true;
        $arrCandidat = array();

        $today = new \DateTime('now');
        foreach ($gestions as $key => $gestion)
        {
            if ($gestion->getCandidat()->getId() == $candidat->getId())
            {
                $arrCandidat[$candidat->getId()] = $gestion->getId();
                /** Calcul le nombre de jours avant/apres embauche */
                $dateIntegration = str_replace('/', '-',$gestion->getDateIntegration());
                $integration = new \DateTime($dateIntegration);
                $differenceJour = $integration->diff($today);
                $differenceJour = $differenceJour->format('%r%a');
                
                if (substr($differenceJour, 0,1) == '-')
                {
                   $positif = false;
                }
            }
        }
        
        /** Récupération des infos liées au poste */
        $session = $this->get("session");
        $arrayPoste = $session->get('arrayPoste');
        $resumeByPoste = $session->get('resumeByPoste');
        
        return $this->render('MALrmBundle:Gestion:detail.html.twig', array(
            'arrCandidat' => $arrCandidat,
            'arrayPoste' => $arrayPoste,
            'resumePoste' => $resumeByPoste,
            'candidat' => $candidat,
            'gestions' => $gestions,
            'differenceJour' => $differenceJour,
            'positif' => $positif,
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

    /**
     * @param $gestion
     * @return bool
     * Stop le recrutement si L'ensemble des postes à pourvoir sont pourvus pour une offre
     */
    public function allPostCompleted($gestion)
    {
        $stop = true;
        $idCandidat = $gestion->getCandidat()->getId();
        $idEmploi = $gestion->getEmploi()->getId();
        $nbrePoste = $gestion->getEmploi()->getNombrePoste();

        $compteur = 0;
        $em = $this->getDoctrine()->getManager();
        $gestions = $em->getRepository('MALrmBundle:Gestion')->findAll();

        foreach ($gestions as $key => $getGestion)
        {
            if ($getGestion->getEmploi()->getId() == $idEmploi)
            {
                $compteur++;
            }
        }

        if ($compteur > $nbrePoste || $compteur == $nbrePoste)
        {
            $stop = false;
        }
        
        return $stop;
    }

}
