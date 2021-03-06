<?php

namespace  MyApp\UserBundle\Form\Type;

use  MyApp\UserBundle\Form\Type\RegistrationFormType as BaseRegistrationFormType;
use Symfony\Component\Form\FormBuilder;

class RegistrationUserOneFormType extends BaseRegistrationFormType
{
    /**
     * @param FormBuilder $builder
     * @param array       $options
     */
    public function buildForm(FormBuilder $builder, array $options)
    {
        parent::buildForm($builder, $options);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'fos_user_registration_form';
    }
}