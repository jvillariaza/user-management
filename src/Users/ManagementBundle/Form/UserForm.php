<?php

namespace Users\ManagementBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserForm extends AbstractType
{
	public function buildForm(FormBuilderInterface $formBuilder, array $formOptions)
	{
		$formBuilder->add('firstName', 'text')
					->add('lastName', 'text')
					->add('email', 'email')
					->add('password', 'repeated', array(
						'first_name'  => 'password',
						'second_name' => 'confirmPass',
						'type' 		  => 'password',
						));
		/*$formBuilder->add('email', 'email');
		$formBuilder->dd('password', 'repeated', array(
						'first_name'  => 'password',
						'second_name' => 'confirmPass',
						'type' 		  => 'password',
						));*/
	}
	public function setDefaultOptions(OptionsResolverInterface $resolver)
	{
		$resolver->setDefaults(array(
			'data_class' => 'Users\ManagementBundle\Entity\User'
		));

	}
	public function getName()
	{
		return 'user';
	}

}