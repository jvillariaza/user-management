<?php

namespace Users\ManagementBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\Length;

class ChangePasswordType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('curPassword','password', array('label' => 'Current Password ', 'attr' => array('class' => 'form-control'), 'mapped' => false))
                ->add('password', 'repeated', array('first_name' => 'NewPassword', 'second_name' => 'ConfirmPassword', 'type' => 'password'));
    }

    public function getName()
    {
        return 'changepassword';
    }
}