<?php

namespace Users\ManagementBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\Length;

class PasswordType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('password', 'repeated', array(
                    'first_name'  => 'NewPassword',
                    'second_name' => 'ConfirmPassword',
                    'type'        => 'password'
                ));
    }

    public function getName()
    {
        return 'password';
    }
}