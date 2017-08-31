<?php

namespace MA\LrmBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class CalendarEventType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title',  TextType::class)
            //->add('allDay')
            ->add('startDate', TextType::class, array(
                //'widget' => 'single_text',
                //'html5' => false,
                'attr'=> array('class' => 'dateTimePicker')))
            ->add('endDate', TextType::class, array(
                //'widget' => 'single_text',
                //'html5' => false,
                'attr'=> array('class' => 'dateTimePicker')));
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
            //->add('backgroundColor')
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
