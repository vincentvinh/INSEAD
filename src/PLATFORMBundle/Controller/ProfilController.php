<?php

namespace PLATFORMBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

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
    public function connectionAction()
    {
        return $this->render('PLATFORMBundle:profil:connection.html.twig');
    }

}
