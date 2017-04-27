<?php

namespace ChatBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ChatController extends Controller
{
    /**
     * @Route("/chat")
     */
    public function indexAction()
    {
        return $this->render('@Chat/Default/chat.html.twig');
    }
}
