<?php

namespace ChatBundle\Controller;

use ChatBundle\Entity\Message;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ChatController extends Controller
{
    /**
     * @param Request $request
     * @Route("/chat", name="chat")
     * @return \Symfony\Component\HttpFoundation\Response
     */

    public function indexAction(Request $request)
    {
        $message = new Message();

        $form = $this->createFormBuilder($message)
            ->add('message', TextType::class)
            ->add('submit', SubmitType::class, array('label' => 'Enter'))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user = $form->getData();


        $em = $this->getDoctrine()->getManager();
        $em->persist($user);
        $em->flush();

        return $this->redirectToRoute('chat');
    }

        return $this->render('ChatBundle:Default:chat.html.twig',
            array(
                'form' => $form->createView(),
            ));
    }
}

