<?php

namespace Users\ManagementBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\Length;

class AccountType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('firstName', 'text', array('label' => 'First Name: ', 'attr' => array('class' => 'form-control')))
                ->add('lastName', 'text', array('label' => 'Last Name: ', 'attr' => array('class' => 'form-control')));
    }

    public function getName()
    {
        return 'account';
    }
}