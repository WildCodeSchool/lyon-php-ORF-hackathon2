<?php

namespace ChatBundle\Controller;

use ChatBundle\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class DefaultController extends Controller
{
    /**
     * @param Request $request
     * @Route("/", name="homepage")
     * @return \Symfony\Component\HttpFoundation\Response
     */

    public function indexAction(Request $request)
    {
        $user = new User();

        $form = $this->createFormBuilder($user)
            ->add('name', TextType::class)
            ->add('baseline', TextType::class)
            ->add('submit', SubmitType::class, array('label' => 'Envoyer'))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user = $form->getData();


        $em = $this->getDoctrine()->getManager();
        $em->persist($user);
        $em->flush();

        return $this->redirectToRoute('add_message');
    }

        $session = $request->getSession();
        $session->start();

        // set and get session attributes
        $session->set('name', 'roxanne');
        $user = $session->get('name');

        // set flash messages
        $session->getFlashBag()->add('notice', 'Session ouverte');

        // retrieve messages
        foreach ($session->getFlashBag()->get('notice', array()) as $message) {
            echo '<div class="flash-notice">'.$message.'</div>';
        }

        return $this->render('ChatBundle:Default:index.html.twig',
            array(
                'form' => $form->createView(),
                'user' => $user
            ));
    }
}

