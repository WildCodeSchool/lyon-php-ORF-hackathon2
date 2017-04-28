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
     * @return \Symfony\Component\HttpFoundation\Response
     */

    public function addAction(Request $request)
    {
        $listMessage = $this->getDoctrine()->getRepository('ChatBundle:Message')->findAll();

        $message = new Message();
        $user = $request->getSession()->get('user');
        $em = $this->getDoctrine()->getManager();

        $name = $em->getRepository('ChatBundle:User')->find($user);
        $form = $this->createForm(Chat::class, $message);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $message->setUser($name);
            $em->persist($message);
            $em->flush();
            return $this->redirectToRoute('add_message');
        }

        return $this->render('@Chat/Default/chat.html.twig', [
            'form' => $form->createView(),
            'listMessages' => $listMessage,
            'name' => $name
        ]);
    }
}
