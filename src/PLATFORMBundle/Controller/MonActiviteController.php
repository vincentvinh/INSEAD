<?php

namespace PLATFORMBundle\Controller;

use PLATFORMBundle\Entity\MonActivite;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Monactivite controller.
 *
 */
class MonActiviteController extends Controller
{


    /**
     * Creates a new monActivite entity.
     *
     */
    public function newAction(Request $request)
    {
        $monActivite = new Monactivite();
        $form = $this->createForm('PLATFORMBundle\Form\MonActiviteType', $monActivite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($monActivite);
            $em->flush();

            return $this->redirectToRoute('monactivite_show', array('id' => $monActivite->getId()));
        }

        return $this->render('@PLATFORM/profil/monactivite/new.html.twig', array(
            'monActivite' => $monActivite,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a monActivite entity.
     *
     */


    /**
     * Displays a form to edit an existing monActivite entity.
     *
     */
    public function editAction(Request $request, MonActivite $monActivite)
    {
        $deleteForm = $this->createDeleteForm($monActivite);
        $editForm = $this->createForm('PLATFORMBundle\Form\MonActiviteType', $monActivite);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('monactivite_edit', array('id' => $monActivite->getId()));
        }

        return $this->render('monactivite/edit.html.twig', array(
            'monActivite' => $monActivite,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a monActivite entity.
     *
     */
    public function deleteAction(Request $request, MonActivite $monActivite)
    {
        $form = $this->createDeleteForm($monActivite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($monActivite);
            $em->flush();
        }

        return $this->redirectToRoute('monactivite_index');
    }

    /**
     * Creates a form to delete a monActivite entity.
     *
     * @param MonActivite $monActivite The monActivite entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(MonActivite $monActivite)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('monactivite_delete', array('id' => $monActivite->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
