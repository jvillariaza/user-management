<?php
namespace Users\ManagementBundle\Helper;

use Symfony\Component\Security\Core\Encoder\PasswordEncoderInterface;

class Sha256SaltedHelper implements PasswordEncoderInterface
{
	public function encodePassword($rawPassword, $salt)
	{
		//Encrypt password with sha256
		return hash('sha256', $salt.$rawPassword);
	}
	public function isPasswordValid($encoded, $rawPassword, $salt)
	{
		return $encoded === $this->encodePassword($rawPassword, $salt);
	}
}