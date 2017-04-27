<?php

namespace ChatBundle\Form;

use ChatBundle\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PersonForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
    $builder
        ->add('name', TextType::class,array("label" => 'Nom :'))
        ->add('baseline', TextType::class)

        ->add('save', SubmitType::class,array("label" => "S'enregistrer"));

        $user = new User();    // On crée un objet User

        $formBuilder = $this->createFormBuilder($user); // On crée le FormBuilder

    }


    public function configureOptions(OptionsResolver $resolver)
    {

    }

    public function getBlockPrefix()
    {
        return 'forms_bundle_person';
    }
}
