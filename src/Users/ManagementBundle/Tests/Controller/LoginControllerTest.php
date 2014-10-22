<?php

namespace Users\ManagementBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class LoginControllerTest extends WebTestCase
{
    public function testDoLoginActionCorrectCredentials()
    {
        $client = static::createClient();

        $crawler = $client->request('POST', '/login');

        $form = $crawler->selectButton('login')->form();

        //submit form
        $crawler = $client->submit($form, array(
        	'_username' => 'joan.villariaza@gmail.com',
        	'_password' => 'joan@123'
        	));
        $this->assertEquals(302, $client->getResponse()->getStatusCode());

        $this->assertTrue($client->getResponse()->isRedirect('http://localhost/dashboard'));
    }

    public function testDoLoginActionWrongCredentials()
    {
        $client = static::createClient();

        $crawler = $client->request('POST', '/login');

        $form = $crawler->selectButton('login')->form();

        //submit form
        $crawler = $client->submit($form, array(
        	'_username' => 'joan.villariaza@gmail.com',
        	'_password' => 'randomWrongPassword'
        	));
        $this->assertEquals(302, $client->getResponse()->getStatusCode());

        $this->assertTrue($client->getResponse()->isRedirect('http://localhost/login'));
        //$this->assertGreaterThan(0, $crawler->filter('html:contains("Bad credentials")')->count());
    }

    
    public function testForgotPasswordAction()
    {
    	$client = static::createClient();

		$crawler = $client->request('POST', '/forgotPassword');

		$registrationForm = $crawler->selectButton('Forgot Password')->form();

		// submit the form
		$crawler = $client->submit($registrationForm, array(
			'form[email]' => 'joan.villariaza@chromedia.com'
		));

		$this->assertEquals(302, $client->getResponse()->getStatusCode());

		//sending of email...
    }

    public function testForgotPasswordCheckAction()
    {
    	$client = static::createClient();

    	$crawler = $client->request('GET', '/forgotPasswordCheck/15');

    	$resetPasswordForm = $crawler->selectButton('Reset Password')->form();

    	// submit form
    	$crawler = $client->submit($resetPasswordForm, array(
    		'form[password][NewPassword]' => 'thisismynewpassword',
    		'form[password][ConfirmPassword]' => 'thisismynewpassword'
    	));

    	$this->assertEquals(302, $client->getResponse()->getStatusCode());
    	//$this->assertTrue($client->getResponse()->isRedirect('http://localhost/login'));

    }
}
