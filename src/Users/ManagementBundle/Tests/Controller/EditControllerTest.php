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
		$this->assertTrue($client->getResponse()->isRedirect('/dashboard'));
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
		$this->assertTrue($client->getResponse()->isRedirect('/changePassword/40'));
		//$this->assertTrue($crawler->filter('html:contains("Successfully changed password.")')->count() > 0);
	}
}