<?php

namespace Users\ManagementBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\Length;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('firstName', 'text', array('label' => 'First Name: ', 'attr' => array('class' => 'form-control')))
                ->add('lastName', 'text', array('label' => 'Last Name: ', 'attr' => array('class' => 'form-control')))
                ->add('email','email', array('label' => 'Email Address: ', 'attr' => array('class' => 'form-control')))
                ->add('password', 'repeated', array(
                    'first_name'  => 'password',
                    'second_name' => 'confirm',
                    'invalid_message' => 'Passwords did not match.',
                    'type'        => 'password'
                ));
    }

    public function getName()
    {
        return 'user';
    }
}