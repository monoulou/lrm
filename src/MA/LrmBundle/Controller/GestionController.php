<?php

namespace MA\LrmBundle\Controller;

use MA\LrmBundle\Entity\Gestion;
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
        $clients = $em->getRepository('MALrmBundle:Client')->findAll();

        $suiviOffre = array();
        $tmp = array();
        $compteur = 0;

        foreach ($clients as $cle => $client )
        {
            foreach ($gestions as $index => $gestion)
            {
                $idEmploi = $gestion->getEmploi()->getId();
                $emploi = $em->getRepository('MALrmBundle:Emploi')->findOneBy(array('id'=>$idEmploi));


                    $nbrPoste = $emploi->getNombrePoste();
                    $getClient = $em->getRepository('MALrmBundle:Client')->findOneBy(array('id'=>$emploi->getClient()->getId()));



                    if ( $getClient->getId() == $client->getId() )
                    {
                        //$compteur++;
                        array_push($tmp,$gestion->getId());
                        //dump(count($tmp));die();

                    }

                $suiviOffre[$gestion->getEmploi()->getId().':'.$gestion->getId()] = array('1'=>$emploi->getIntitule(),
                    '2'=>$getClient->getDenomination(),
                    '3'=>$nbrPoste,
                    '4'=>$nbrPoste - count($tmp));





            }

        }

        dump($suiviOffre);die();



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

            dump($gestion);die();
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


        return $this->render('MALrmBundle:Emploi:show.html.twig', array(
            'gestion' => $gestion,
            'delete_form' => $deleteForm->createView(),
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
