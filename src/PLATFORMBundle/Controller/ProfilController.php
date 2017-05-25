<?php

namespace PLATFORMBundle\Controller;

use PLATFORMBundle\Entity\FileImage;
use PLATFORMBundle\Entity\MonActivite;
use PLATFORMBundle\Entity\User;
use PLATFORMBundle\Form\FileImageType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DomCrawler\Image;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;


class ProfilController extends Controller
{
    public function indexAction()
    {
        return $this->render('@PLATFORM/profil/search.html.twig');
    }
    public function profilAction()
    {
        return $this->render('@PLATFORM/profil/profil.html.twig');
    }
    public function createAction()
    {
        return $this->render('@PLATFORM/profil/createProfil.html.twig');
    }

    public function chatAction()
    {
        return $this->render('@PLATFORM/profil/chat_profil.html.twig');
    }
    public function MyProfilAction()
    {
        return $this->render('PLATFORMBundle:profil:MyProfil.html.twig');
    }
    public function connectionAction()
    {
        return $this->render('PLATFORMBundle:profil:connection.html.twig');
    }
    public function ChatProfilBisAction()
    {
        return $this->render('PLATFORMBundle:profil:chat_profil_bis.html.twig');
    }


    //EDIT MYPROFIL


    public function editAction(Request $request, User $user)
    {
        $deleteForm = $this->createDeleteForm($user);

        $editForm = $this->createForm('PLATFORMBundle\Form\UserType', $user);

        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {

            $em = $this->getDoctrine()->getManager();

            $em->flush();

            return $this->redirectToRoute('my_profil');
        }

        return $this->render('@PLATFORM/profil/edit.html.twig', array(
            'user' => $user,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    public function newImageAction(Request $request)
    {
        $image = new FileImage();
        $form = $this->createForm(FileImageType::class, $image);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $file = $image->getFilename();
            // Generate a unique name for the file before saving it
            $fileName = md5(uniqid()).'.'.$file->guessExtension();

            // Move the file to the directory where brochures are stored
            $file->move(
                $this->getParameter('brochures_directory'),
                $fileName
            );

            // Update the 'brochure' property to store the PDF file name
            // instead of its contents

            $image->setFilename($fileName);
           
            $em = $this->getDoctrine()->getManager();

            $em->persist($image);
            $em->flush();
            // ... persist the $product variable or any other work

            return $this->redirectToRoute('my_profil');
        }

        return $this->render('@PLATFORM/profil/MyProfilImage.html.twig', array(
            'form' => $form->createView(),
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
    public function searchAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $monActivite = new MonActivite();
        $form = $this->createForm('PLATFORMBundle\Form\MonActiviteType',$monActivite);
        $form->handleRequest($request);
//      dump($form->getData());die();
//        $location = $request->request->get('locations');
//        $activity = $request->request->get('activites');

$user = $this->getUser();
//$location = $this->g

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
//          dump($request);die();
//            $monActivite->addLocation($location);
//            $monActivite->addActivite();
            $monActivite->setProfil($user);
            $em->persist($monActivite);

            $em->flush();
            return $this->redirectToRoute('platform_search');
        }

        return $this->render('@PLATFORM/profil/index.html.twig', array(
            'monActivite' => $monActivite,
            'form' => $form->createView(),
        ));
    }
    public function showAction(MonActivite $monActivite)
    {
        $deleteForm = $this->createDeleteactiForm($monActivite);

        return $this->render('@PLATFORM/profil/show.html.twig', array(
            'monActivite' => $monActivite,
            'delete_form' => $deleteForm->createView(),
        ));
    }
    private function createDeleteactiForm(MonActivite $monActivite)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('monactivite_delete', array('id' => $monActivite->getId())))
            ->setMethod('DELETE')
            ->getForm()
            ;
    }
}
