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
        $listMessage = $this->getDoctrine()->getRepository('ChatBundle:Message')->findAll();

        $message = new Message();
        $em = $this->getDoctrine()->getManager();
        $form = $this->createForm(Chat::class, $message);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form  ->isValid()){
            $em->persist($message);
            $em->flush();
            return $this->redirectToRoute('add_message');
        }

        $chatContent = $this->getDoctrine()->getRepository('ChatBundle:User')->findAll();

        return $this->render('@Chat/Default/chat.html.twig', [
            'form'      =>  $form->createView(),
            'chatcontent' => $chatContent,
            'message' => $message,
            'listMessage' => $listMessage,

        ]);


        // SESSIONS MANAGEMENT
        $listMessage = $this->getDoctrine()->getRepository('ChatBundle:Message')->findAll();

        $session = $request->getSession();
        $session->start();

            // set and get session attributes
        $session->set('name', '{{ user.name }}');
        $user = $session->get('name');

            // set flash messages
        $session->getFlashBag()->add('notice', 'Session ouverte : {{ user.name }} ');

        // retrieve messages
        foreach ($session->getFlashBag()->get('notice', array()) as $message) {
            echo '<div class="flash-notice">'.$message.'</div>';
        }



    }

}
