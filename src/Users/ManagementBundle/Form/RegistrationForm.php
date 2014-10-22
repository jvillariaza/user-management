<?php
namespace Users\ManagementBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationForm extends AbstractType
{
	public function buildRegisterForm(FormBuilderInterface $builder, array $options)
	{
		$builder->add('user', new UserType());
        
        $builder->add('Register', 'submit');
    }

    public function getName()
    {
        return 'registration';
    }
}