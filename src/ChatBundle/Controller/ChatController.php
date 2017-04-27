<?php

namespace ChatBundle\Controller;

use ChatBundle\Entity\Message;
use ChatBundle\Form\Chat;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ChatController extends Controller
{
    /**
     * @param Request $request
     * @return Response
     * @Route("/chat", name="add_message")
     */
    public function addAction(Request $request)
    {
        $message = new Message();
        $em = $this->getDoctrine()->getManager();
        $form = $this->createForm(Chat::class, $message);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form  ->isValid()){
            $em->persist($message);
            $em->flush();
            return $this->redirectToRoute('add_message');
        }

        return $this->render('@Chat/Default/chat.html.twig', [
            'form'      =>  $form->createView(),
        ]);
    }

}
