<?php


namespace MA\LrmBundle\Controller;

use MA\LrmBundle\Entity\CalendarEvent;
use Symfony\Component\HttpFoundation\JsonResponse;
use Imagick;
use Symfony\Component\HttpFoundation\Response;
use MA\LrmBundle\MALrmBundle;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Event controller.
 *
 */
class EventController extends Controller
{


    /**
     * Lists all CalendarEvent entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $events = $em->getRepository('MALrmBundle:CalendarEvent')->findAll();


        return $this->render('MALrmBundle:event:index.html.twig', array(
            'events' => $events,
        ));
    }

    /**
     * Creates a new event entity.
     *
     */
    public function newAction(Request $request)
    {
        //dump($request);die();
        $event = new CalendarEvent();
        //$form = $this->createForm('MA\LrmBundle\Form\CalendarEventType', $event);
        //$form->handleRequest($request);

        //if ($form->isSubmitted() && $form->isValid()) {


            $em = $this->getDoctrine()->getManager();
            $em->persist($event);
            $em->flush();


            //return $this->redirectToRoute('ma_lrm_event_show', array('id' => $event->getId()));
        //}

        return $this->render('MALrmBundle:Accueil:index.html.twig', array(
            'event' => $event,
            //'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a event entity.
     *
     */
    public function showAction(CalendarEvent $event)
    {
        $deleteForm = $this->createDeleteForm($event);

        return $this->render('MALrmBundle:event:show.html.twig', array(
            'event' => $event,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing client entity.
     *
     */
    public function editAction(Request $request, CalendarEvent $event)
    {

        $deleteForm = $this->createDeleteForm($event);
        $editForm = $this->createForm('MA\LrmBundle\Form\eventType', $event);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {

            //$this->getDoctrine()->getManager()->flush();
            $em = $this->getDoctrine()->getManager();
            $em->persist($event);
            $em->flush();

            //Message flash.
            $this->addFlash('notice', 'La modification a correctement été effectué');

            return $this->redirectToRoute('ma_lrm_event_index', array('id' => $event->getId()));
        }

        return $this->render('MALrmBundle:event:edit.html.twig', array(
            'event' => $event,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a client entity.
     *
     */
    public function deleteAction(Request $request, CalendarEvent $event)
    {

        $em = $this->getDoctrine()->getManager();
        $em->remove($event);
        $em->flush();

        return $this->redirectToRoute('ma_lrm_event_index');
    }

    /**
     * Creates a form to delete a event entity.
     *
     * @param CalendarEvent $event The event entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(CalendarEvent $event)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('ma_lrm_event_delete', array('id' => $event->getId())))
            ->setMethod('DELETE')
            ->getForm()
            ;
    }

}
