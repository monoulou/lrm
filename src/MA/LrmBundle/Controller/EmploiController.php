<?php

namespace MA\LrmBundle\Controller;

use MA\LrmBundle\Entity\Emploi;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use MA\LrmBundle\MALrmBundle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Emploi controller.
 *
 */
class EmploiController extends Controller
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
     * Lists all emploi entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $emplois = $em->getRepository('MALrmBundle:Emploi')->findAll();
        
        $siteParution = array();

        foreach ($emplois as $cle => $emploi)
        {
            $site = implode(' - ', $emploi->getSiteParution());
            $siteParution[$emploi->getId()] = $site;
        }

        //dump($siteParution);die();
        return $this->render('MALrmBundle:Emploi:index.html.twig', array(
            'emplois' => $emplois,
            'siteParution' => $siteParution,
        ));
    }

    /**
     * Creates a new emploi entity.
     *
     */
    public function newAction(Request $request)
    {
        
        $emploi = new Emploi();
        $form = $this->createForm('MA\LrmBundle\Form\EmploiType', $emploi);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($emploi);
            $em->flush();


            return $this->redirectToRoute('ma_lrm_emploi_show', array('id' => $emploi->getId()));
        }

        return $this->render('MALrmBundle:Emploi:new.html.twig', array(
            'emploi' => $emploi,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a emploi entity.
     *
     */
    public function showAction(Emploi $emploi)
    {
        $deleteForm = $this->createDeleteForm($emploi);

        /** Force le retour à la ligne pour l'affichage de la description du poste */
        $wrapDescription = wordwrap($emploi->getDescription(), 100, "\n", true);
        $emploi->setDescription($wrapDescription);

        $siteParution = implode(' - ', $emploi->getSiteParution());
        
//        dump($emploi, $siteParution);die();

        return $this->render('MALrmBundle:Emploi:show.html.twig', array(
            'emploi' => $emploi,
            'delete_form' => $deleteForm->createView(),
            'siteParution' => $siteParution,
        ));
    }

    /**
     * Displays a form to edit an existing emploi entity.
     *
     */
    public function editAction(Request $request, Emploi $emploi)
    {
        $deleteForm = $this->createDeleteForm($emploi);
        $editForm = $this->createForm('MA\LrmBundle\Form\EmploiType', $emploi);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            //Message flash.
            $this->addFlash('notice', 'La mofication a correctement été effectué');

            return $this->redirectToRoute('ma_lrm_emploi_index', array('id' => $emploi->getId()));
        }

        return $this->render('MALrmBundle:Emploi:edit.html.twig', array(
            'emploi' => $emploi,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a emploi entity.
     *
     */
    public function deleteAction(Request $request, Emploi $emploi)
    {
        /** Permet la suppression d'un emploi en conservant les candidatures qui lui sont liées */
        
        $em = $this->getDoctrine()->getManager();
        $candidats = $em->getRepository('MALrmBundle:Candidat')->findBy(array('emploi'=>$emploi->getId()));
        $emplois = $em->getRepository('MALrmBundle:Emploi')->findAll();
        
        foreach ($candidats as $index => $candidat)
        {
            foreach ($emplois as $index => $emploi)
            {
                if ($emploi->getId()== 16)
                {
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($candidat->setEmploi($emploi));
                    $em->flush();
                }
            }

        }
        
        /** *********************************************************************************** */

        $em = $this->getDoctrine()->getManager();
        $em->remove($emploi);
        $em->flush();

        //Message flash.
        $this->addFlash('notice', 'Cette offre d\'emploi a correctement été supprimé');

        return $this->redirectToRoute('ma_lrm_emploi_index');
    }

    /**
     * Creates a form to delete a emploi entity.
     *
     * @param Emploi $emploi The emploi entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Emploi $emploi)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('ma_lrm_emploi_delete', array('id' => $emploi->getId())))
            ->setMethod('DELETE')
            ->getForm()
            ;
    }

}
