<?php

namespace MA\LrmBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use MA\LrmBundle\Repository\DepartementRepository;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;


class ClientType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $etat = array( 'En cours' => 'En cours', 'Facturé' => 'Facturé', 'Annulé' => 'Annulé', 'Suspendu' => 'Suspendu', 'Autre' => 'Autre' );
        $typeClient = array( 'Prospect'=> 'Prospect', 'Client' => 'Client');
        $civilite = array('Mme.'=>'Madame', 'M.'=>'Monsieur');
        $partenaire = array('Oui'=>'Oui', 'Non'=>'Non');

        $builder
            ->add('denomination', TextType::class)

            ->add('adresse', TextType::class)

            ->add('villeCodePostal', TextType::class, array(
                'attr' => array('class'=> 'cp',
                                'maxlength' => 5)))
                
            ->add('ville', TextType::class, array(
                'attr' => array('class'=> 'ville')))

            ->add('departement', TextType::class, array(
                'attr' => array('class'=> 'departement')))

            ->add('pays', TextType::class, array(
                'attr' => array('class'=> 'pays')))

            ->add('civilite',  ChoiceType::class, array('choices' => $civilite))

            ->add('nomContact', TextType::class)

            ->add('prenomContact', TextType::class)

            ->add('fonctionContact', TextType::class)

            ->add('telephone', TextType::class)

            ->add('email', EmailType::class)
            
            ->add('etat', ChoiceType::class, array('choices' => $etat))

            ->add('typeClient', ChoiceType::class, array(
                'choices' => $typeClient,
                'attr' => array('class'=> 'typeClient')))

            ->add('partenaire', ChoiceType::class, array(
                'choices' => $partenaire,
                'attr' => array('class'=> 'partenaire')))

            ->add('commentaire', TextareaType::class)

            ->add('chargeRecrutement', EntityType::class, array(
                'class' => 'MAUserBundle:User',
                'placeholder' => 'Chargé de recutement',
                'choice_label' => 'username',
                'expanded' => false,
                'multiple' => false
            ));
            //->add('sauvegarder', SubmitType::class);
    }


    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MA\LrmBundle\Entity\Client'
        ));
    }


    public function getBlockPrefix()
    {
        return 'ma_lrmbundle_client';
    }


}