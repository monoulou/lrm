<?php

namespace MA\LrmBundle\Form;

use MA\UserBundle\Repository\UserRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use MA\LrmBundle\Repository\DepartementRepository;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
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
        $testPerso = array('Oui'=>'Oui', 'Non'=>'Non');

        $builder
            ->add('civilite',  ChoiceType::class, array('choices' => $civilite))

            ->add('nom', TextType::class)

            ->add('prenom', TextType::class)

            ->add('dateAnniversaire', TextType::class, array(
                'required' => false,
                'attr'=> array(
                    'class' => 'datepicker',
                    'placeholder' => 'jj/mm/aaaa')))

            ->add('dateRelance', TextType::class, array(
                'required' => false,
                'attr'=> array(
                    'class' => 'datepicker',
                    'placeholder' => 'jj/mm/aaaa')))

            ->add('age', TextType::class, array(
                'required' => false
            ))

            ->add('testPersonnalite', ChoiceType::class, array(
                'choices' => $testPerso,
                'required' => false))

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

            ->add('cvCandidat', FileType::class, array(
                'label' => 'cv (PDF, .doc)',
                'required' => false))

            ->add('commentaire', TextareaType::class, array(
                'required' => false
            ))

            ->add('pretention', TextType::class, array(
                'required' => false))

//            ->add('dateCreation')

            ->add('chargeRecrutement', EntityType::class, array(
                'class' => 'MAUserBundle:User',
                'query_builder' => function (UserRepository $ur) {
                    $admin = 'admin';
                    return $ur->createQueryBuilder('u')
                        ->where('u.username != ?1')
                        ->setParameter(1, $admin);

                },
                'placeholder' => 'Chargé de recutement',
                'choice_label' => 'username',
                'expanded' => false,
                'multiple' => false
            ))
            
            ->add('emploi', EntityType::class, array(
                'class' => 'MALrmBundle:Emploi',
                'placeholder' => 'Offre d\'emploi',
                /*'query_builder' => function (UserRepository $er) {
                    return $er->createQueryBuilder('e')
                        ->select('e.intitule')
                        ->select('e.client.denomination');

                },*/
                'choice_label' => 'intituleDenomination',
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
