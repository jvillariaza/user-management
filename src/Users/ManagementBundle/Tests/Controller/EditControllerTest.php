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
			'account[firstName]' => 'Edited Name',
			'account[lastName]' => 'Edited Last Name'
		));

		$this->assertEquals(302, $client->getResponse()->getStatusCode());
		//$this->assertTrue($client->getResponse()->isRedirect('http://localhost/editAccount/40'));
	}

	public function testChangePasswordAction()
	{
		$client = static::createClient();

		$crawler = $client->request('GET', '/changePassword/40');

		$changePasswordForm = $crawler->selectButton('Change Password')->form();

		// submit the form
		$crawler = $client->submit($changePasswordForm, array(
			'changepassword[curPassword]' => 'joan@123',
			'changepassword[password][NewPassword]' => 'joan@123',
			'changepassword[password][ConfirmPassword]' => 'joan@123'
		));

		$this->assertEquals(302, $client->getResponse()->getStatusCode());
		//$this->assertTrue($client->getResponse()->isRedirect('http://localhost/changePassword/40'));
	}
}