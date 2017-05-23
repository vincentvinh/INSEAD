<?php

namespace PLATFORMBundle\Controller;

use PLATFORMBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ProfilController extends Controller
{
    public function indexAction()
    {
        return $this->render('@PLATFORM/profil/index.html.twig');
    }
    public function profilAction()
    {
        return $this->render('@PLATFORM/profil/profil.html.twig');
    }
    public function createAction()
    {
        return $this->render('@PLATFORM/profil/createProfil.html.twig');
    }
    public function searchAction()
    {
        return $this->render('@PLATFORM/profil/search.html.twig');
    }
    public function chatAction()
    {
        return $this->render('@PLATFORM/profil/chat_profil.html.twig');
    }
    public function MyProfilAction()
    {
        return $this->render('PLATFORMBundle:profil:MyProfil.html.twig');
    }
    public function ChatProfilBisAction()
    {
        return $this->render('PLATFORMBundle:profil:chat_profil_bis.html.twig');
    }
    public function editAction(Request $request, User $user)
    {
        $deleteForm = $this->createDeleteForm($user);
        $editForm = $this->createForm('PLATFORMBundle\Form\UserType', $user);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('user_edit', array('id' => $user->getId()));
        }

        return $this->render('@PLATFORM/profil/edit.html.twig', array(
            'user' => $user,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    private function createDeleteForm(User $user)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_delete', array('id' => $user->getId())))
            ->setMethod('DELETE')
            ->getForm()
            ;
    }
}
