<?php

namespace MA\LrmBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class CalendarEventType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $color = array( 'Important'=>'#ee2930', 'Normal'=>'#337ab7', 'Mémo'=>'#9A939E');

        $builder
            ->add('title',  TextType::class)
            ->add('startDate', DateType::class, array(
                //'widget' => 'single_text',
                // do not render as type="date", to avoid HTML5 date pickers
                //'html5' => false,
                'attr'=> array('class' => 'dateTimePicker')))
            ->add('endDate', DateType::class, array(
                //'widget' => 'single_text',
                // do not render as type="date", to avoid HTML5 date pickers
                //'html5' => false,
                'attr'=> array('class' => 'dateTimePicker')))
            //->add('chargeRecrutement')
            //->add('commentaire', TextareaType::class)
           /* ->add('startDate', TextType::class, array(
                'attr'=> array('class' => 'dateTimePicker')))
            ->add('endDate', TextType::class, array(
                'attr'=> array('class' => 'dateTimePicker')));*/
            //->add('url')
            //->add('className')
            //->add('editable')
            //->add('startEditable')
            //->add('durationEditable')
            //->add('rendering')
            //->add('overlap')
            //->add('constraint')
            //->add('source')
            //->add('color')
           ->add('backgroundColor', ChoiceType::class, array('choices' => $color ));
            //->add('textColor')
            //->add('customFields');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MA\LrmBundle\Entity\CalendarEvent'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'ma_lrmbundle_calendarevent';
    }


}
