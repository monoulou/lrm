<?php

namespace MA\LrmBundle\Form;

use MA\LrmBundle\Repository\ClientRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EmploiType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $siteParution = array( 'Indeed'=> 'Indeed', 'Monster' => 'Monster', 'APEC'=>'APEC', 'Lesjeudis.com'=>'Lesjeudis.com', 'Pôle Emploi'=>'Pôle Emploi', 'Autre'=>'Autre');
        $typeContrat = array( 'CDI' => 'CDI', 'CDD' => 'CDD');

        
        $builder
            ->add('intitule', TextType::class)

            ->add('siteParution',  ChoiceType::class, array(
                'choices' => $siteParution,
                'multiple' => true))

            ->add('contrat', ChoiceType::class, array(
                'choices' => $typeContrat ))

            ->add('description', TextareaType::class, array(
                'required' => false))

            ->add('nombrePoste', TextType::class)

            ->add('villeCodePostal', TextType::class, array(
                'attr' => array('class'=> 'cp',
                                'placeholder' => 'Saisir un code postal',
                                'maxlength' => 5)))

            ->add('villeActivite', TextType::class, array(
                'attr' => array('class'=> 'ville',
                                'placeholder' => 'Saisir une ville')))
            
            
            ->add('client', EntityType::class, array(
                'class' => 'MALrmBundle:Client',
                'query_builder' => function (ClientRepository $cr) {
                    $enCours = 'En cours';
                    $FactuPartielle = 'Partiellement Facturé';
                    return $cr->createQueryBuilder('c')
                            ->where('c.etat = ?1')
                            ->orWhere('c.etat = ?2')
                            ->setParameter(1, $enCours)
                            ->setParameter(2, $FactuPartielle);
                },
                'placeholder' => 'Client',
                'choice_label' => 'denomination',
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
            'data_class' => 'MA\LrmBundle\Entity\Emploi'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'ma_lrmbundle_emploi';
    }


}
