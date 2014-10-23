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
			'form[firstName]' => 'Edited Name',
			'form[lastName]' => 'Edited Last Name'
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
			'form[curPassword]' => 'joan@123',
			'form[password][NewPassword]' => 'joan@123',
			'form[password][ConfirmPassword]' => 'joan@123'
		));

		$this->assertEquals(302, $client->getResponse()->getStatusCode());
	}
}