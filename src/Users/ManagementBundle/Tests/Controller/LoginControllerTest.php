<?php

namespace Users\ManagementBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class LoginControllerTest extends WebTestCase
{
    public function testDoLoginActionCorrectCredentials()
    {
        $client = static::createClient();

        $crawler = $client->request('POST', '/login');

        $form = $crawler->selectButton('Login')->form();

        //submit form
        $crawler = $client->submit($form, array(
        	'_username' => 'joan.villariaza@gmail.com',
        	'_password' => 'newRandomPassword'
        	));
        $this->assertEquals(302, $client->getResponse()->getStatusCode());

        $this->assertTrue($client->getResponse()->isRedirect('http://localhost/dashboard'));
    }

    public function testDoLoginActionWrongCredentials()
    {
        $client = static::createClient();

        $crawler = $client->request('POST', '/login');
        $form = $crawler->selectButton('Login')->form();
        //var_dump("nganong empty?");die;

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
        $client->followRedirects(false);
        $client->enableProfiler();

		$registrationForm = $crawler->selectButton('Forgot Password')->form();

		// submit the form
		$crawler = $client->submit($registrationForm, array(
			'form[email]' => 'joan.villariaza@gmail.com'
		));

		$this->assertEquals(302, $client->getResponse()->getStatusCode());

		//sending of email...

        $mailCollector = $client->getProfile()->getCollector('swiftmailer');

        $mailCollector->getMessageCount();

        // Check that an e-mail was sent
        $this->assertEquals(1, $mailCollector->getMessageCount());

        $collectedMessages = $mailCollector->getMessages();
        $message = $collectedMessages[0];

        // Asserting e-mail data
        $this->assertInstanceOf('Swift_Message', $message);
        $this->assertEquals('Forgot Password Request', $message->getSubject());
        $this->assertEquals('joan.villariaza@chromedia.com', key($message->getFrom()));
        $this->assertEquals('joan.villariaza@gmail.com', key($message->getTo()));
    }

    public function testForgotPasswordCheckAction()
    {
    	$client = static::createClient();
        //var_dump("naa ko dire");die;
    	$crawler = $client->request('GET', '/forgotPasswordCheck/1');

    	$resetPasswordForm = $crawler->selectButton('Reset Password')->form();

    	// submit form
    	$crawler = $client->submit($resetPasswordForm, array(
    		'form[password][NewPassword]' => 'newRandomPassword',
    		'form[password][ConfirmPassword]' => 'newRandomPassword'
    	));

    	$this->assertEquals(302, $client->getResponse()->getStatusCode());
        //$this->assertTrue($client->getResponse()->isRedirect('http://localhost/login'));

    }
}
