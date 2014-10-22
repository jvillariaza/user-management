<?php

namespace Users\ManagementBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class EditControllerTest extends WebTestCase
{
	public function testEditAccountAction()
	{
		$client = static::createClient();

		$crawler = $client->request('GET', '/editAccount/40');

		$registrationForm = $crawler->selectButton('Edit Account')->form();

		// submit the form for registration
		$crawler = $client->submit($registrationForm, array(
			'form[firstName]' => 'Jhoanne',
			'form[lastName]' => 'Villariaza'
		));

		$this->assertEquals(302, $client->getResponse()->getStatusCode());
	}

	public function testChangePasswordAction()
	{
		$client = static::createClient();

		$crawler = $client->request('GET', '/changePassword/40');

		$changePasswordForm = $crawler->selectButton('Change Password')->form();

		// submit the form
		$crawler = $client->submit($changePasswordForm, array(
			'form[password]' => 'thisismynewpassword',
			'form[newPassword][NewPassword]' => 'joan@123',
			'form[newPassword][ConfirmPassword]' => 'joan@123'
		));
		$this->assertEquals(302, $client->getResponse()->getStatusCode());
	}
}