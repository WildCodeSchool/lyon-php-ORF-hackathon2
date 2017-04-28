<?php

namespace ChatBundle\Controller;

use ChatBundle\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
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
            ->add('submit', SubmitType::class, array('label' => 'Enter'))
            ->getForm();

        return $this->render('ChatBundle:Default:index.html.twig',
            array(
                'form' => $form->createView(),
            ));
    }
}

