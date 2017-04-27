<?php

namespace ChatBundle\Controller;

use ChatBundle\Entity\User;
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
        $user = new User();

        $form = $this->createFormBuilder($user)
            ->add('name', TextType::class)
            ->add('baseline', TextType::class)
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

        return $this->render('ChatBundle:Default:index.html.twig',
            array(
                'form' => $form->createView(),
            ));
    }
}

