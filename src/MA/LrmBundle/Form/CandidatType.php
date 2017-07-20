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

class CandidatType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $civilite = array('Mme.'=>'Madame', 'M.'=>'Monsieur');

        $builder
            ->add('civilite',  ChoiceType::class, array('choices' => $civilite))

            ->add('nom', TextType::class)

            ->add('prenom', TextType::class)

            ->add('dateAnniversaire', TextType::class, array(
                'attr' => array('class'=> 'dateNaissance')))
            
            ->add('age', TextType::class, array(
                'attr' => array('class'=> 'inputAge')))

            ->add('adresse', TextType::class)

            ->add('ville', TextType::class, array(
                'attr' => array('class'=> 'ville')))

            ->add('departement', TextType::class, array(
                'attr' => array('class'=> 'departement')))

            ->add('pays', TextType::class, array(
                'attr' => array('class'=> 'pays')))

            ->add('villeCodePostal', TextType::class, array(
                'attr' => array('class'=> 'cp',
                    'maxlength' => 5)))

            ->add('telephone', TextType::class)

            ->add('email', EmailType::class)

            ->add('commentaire', TextareaType::class)

//            ->add('dateCreation')

            ->add('chargeRecrutement', EntityType::class, array(
                'class' => 'MAUserBundle:User',
                'placeholder' => 'Chargé de recutement',
                'choice_label' => 'username',
                'expanded' => false,
                'multiple' => false
            ))
            ->add('emploi', EntityType::class, array(
                'class' => 'MALrmBundle:Emploi',
                'placeholder' => 'offre d\'emploi',
                'choice_label' => 'intitule',
                'expanded' => false,
                'multiple' => false
            ));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MA\LrmBundle\Entity\Candidat'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'ma_lrmbundle_candidat';
    }


}
