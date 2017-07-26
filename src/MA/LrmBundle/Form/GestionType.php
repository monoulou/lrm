<?php

namespace MA\LrmBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class GestionType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
        $builder
            
            ->add('candidat', EntityType::class, array(
                'class' => 'MALrmBundle:Candidat',
                'placeholder' => 'candidat',
                'choice_label' => 'nom',
                'expanded' => false,
                'multiple' => false
            ))

            ->add('dateIntegration', TextType::class, array(
                'attr'=> array(
                    'class' => 'datepicker',
                    'placeholder' => 'jj/mm/aaaa')))

            ->add('emploi', EntityType::class, array(
            'class' => 'MALrmBundle:Emploi',
            'placeholder' => 'offre',
            'choice_label' => 'intitule',
            'expanded' => false,
            'multiple' => false
        ))
            
            ->add('chargeRecrutement', EntityType::class, array(
                'class' => 'MAUserBundle:User',
                'placeholder' => 'charge RH',
                'choice_label' => 'username',
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
            'data_class' => 'MA\LrmBundle\Entity\Gestion'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'ma_lrmbundle_gestion';
    }


}
