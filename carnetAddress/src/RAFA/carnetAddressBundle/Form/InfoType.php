<?php

namespace RAFA\carnetAddressBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class InfoType extends AbstractType
{
    private $user;

    public function __construct($user){
        $this->user=$user;
    }
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname',     'text')
            ->add('lastname',      'text')
            ->add('address',       'text')
            ->add('phone',         'text')
            ->add('website',       'text')
            ->add('user',           null, array('choices' => array($this->user)))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'RAFA\carnetAddressBundle\Entity\Info'
        ));
    }
}
