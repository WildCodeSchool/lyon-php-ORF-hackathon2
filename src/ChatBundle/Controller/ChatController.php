<?php

namespace ChatBundle\Controller;

use ChatBundle\Entity\Message;
use ChatBundle\Form\Chat;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;

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
        $message = new Message();
        $user = $request->getSession()->get('user');
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('ChatBundle:User')->find($user->getId());
        $form = $this->createForm(Chat::class, $message);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $message->setUser($user);
            $em->persist($message);
            $em->flush();
            return $this->redirectToRoute('add_message');
        }

        $chatContent = $this->getDoctrine()->getRepository('ChatBundle:User')->findAll();

        return $this->render('@Chat/Default/chat.html.twig', [
            'form'      =>  $form->createView(),
            'chatcontent' => $chatContent,
            'message' => $message,
        ]);
    }
}
