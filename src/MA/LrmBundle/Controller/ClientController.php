<?php

namespace MA\LrmBundle\Controller;

use MA\LrmBundle\Entity\Client;
use MA\LrmBundle\Entity\Emploi;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use MA\LrmBundle\MALrmBundle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Client controller.
 *
 */
class ClientController extends Controller
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
     * Lists all client entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $clients = $em->getRepository('MALrmBundle:Client')->findAll();

        return $this->render('MALrmBundle:Client:index.html.twig', array(
            'clients' => $clients,
        ));
    }

    /**
     * Creates a new client entity.
     *
     */
    public function newAction(Request $request)
    {
        $client = new Client();
        $form = $this->createForm('MA\LrmBundle\Form\ClientType', $client);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($client);
            $em->flush();


            return $this->redirectToRoute('ma_lrm_client_show', array('id' => $client->getId()));
        }

        return $this->render('MALrmBundle:Client:new.html.twig', array(
            'client' => $client,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a client entity.
     *
     */
    public function showAction(Client $client)
    {
        $deleteForm = $this->createDeleteForm($client);

        /** Force le retour à la ligne pour l'affichage du commentaire */
        $wrapCommentaire = wordwrap($client->getCommentaire(), 100, "\n", true);
        $client->setCommentaire($wrapCommentaire);
    
        return $this->render('MALrmBundle:Client:show.html.twig', array(
            'client' => $client,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing client entity.
     *
     */
    public function editAction(Request $request, Client $client)
    {
        $deleteForm = $this->createDeleteForm($client);
        $editForm = $this->createForm('MA\LrmBundle\Form\ClientType', $client);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            //Message flash.
            $this->addFlash('notice', 'La modification a correctement été effectué');

            return $this->redirectToRoute('ma_lrm_client_index', array('id' => $client->getId()));
        }

        return $this->render('MALrmBundle:Client:edit.html.twig', array(
            'client' => $client,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a client entity.
     *
     */
    public function deleteAction(Request $request, Client $client)
    {

        /** ***************Suppression des offres d'emplois et des postes pourvus liés aux clients***************************** */
        $em = $this->getDoctrine()->getManager();
        $emplois = $em->getRepository('MALrmBundle:Emploi')->findBy(array('client'=>$client->getId()));
        $listEmplois = $em->getRepository('MALrmBundle:Emploi')->findAll();
        foreach ($emplois as $index => $emploi)
        {

            $em = $this->getDoctrine()->getManager();
            $candidats = $em->getRepository('MALrmBundle:Candidat')->findAll();
            foreach ($candidats as $key => $candidat)
            {
                if ($candidat->getEmploi()->getId() == $emploi->getId())
                {
                    foreach ($listEmplois as $k => $v)
                    {
                        if ($v->getId() == '16')
                        {
                            $em = $this->getDoctrine()->getManager();
                            $em->persist($candidat->setEmploi($v));
                            $em->flush();
                        }
                    }
                }
            }

            $gestions = $em->getRepository('MALrmBundle:Gestion')->findBy(array('emploi'=>$emploi->getId()));
            foreach ($gestions as $cle => $gestion)
            {
                $em = $this->getDoctrine()->getManager();
                $em->remove($gestion);
                $em->flush();
            }

            $em = $this->getDoctrine()->getManager();
            $em->remove($emploi);
            $em->flush();
        }

        /** ********************************************************************************** */

        $em = $this->getDoctrine()->getManager();
        $em->remove($client);
        $em->flush();
   

        //Message flash.
        $this->addFlash('notice', 'Le client a correctement été supprimé');

        return $this->redirectToRoute('ma_lrm_client_index');
    }

    /**
     * Creates a form to delete a client entity.
     *
     * @param Client $client The client entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Client $client)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('ma_lrm_client_delete', array('id' => $client->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

}
