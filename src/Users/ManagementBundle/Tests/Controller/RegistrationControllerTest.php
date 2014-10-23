<?php
namespace Users\ManagementBundle\Tests\Controller;

use Users\ManagementBundle\Controller\RegistrationController;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class RegistrationControllerTest extends WebTestCase
{
	public function testRegisterAction()
	{
		$client = static::createClient();

		$crawler = $client->request('POST', '/register');
		$client->followRedirects(false);
		$client->enableProfiler();

		$registrationForm = $crawler->selectButton('Create Account')->form();

		// submit the form for registration
		$crawler = $client->submit($registrationForm, array(
			'form[firstName]' => 'Joan',
			'form[lastName]' => 'Villariaza',
			'form[email]' => 'jhoanne.villariaza@gmail.com',
			'form[password][password]' => 'joan@123',
			'form[password][confirm]' => 'joan@123'
		));

		$this->assertEquals(200, $client->getResponse()->getStatusCode());
        
        
        $mailCollector = $client->getProfile()->getCollector('swiftmailer');

        $mailCollector->getMessageCount();

        // Check that an e-mail was sent
        $this->assertEquals(1, $mailCollector->getMessageCount());

        $collectedMessages = $mailCollector->getMessages();
        $message = $collectedMessages[0];

        // Asserting e-mail data
        $this->assertInstanceOf('Swift_Message', $message);
        $this->assertEquals('Confirm Your Email', $message->getSubject());
        $this->assertEquals('joan.villariaza@chromedia.com', key($message->getFrom()));
        $this->assertEquals('jhoanne.villariaza@gmail.com', key($message->getTo()));
        /*$this->assertEquals(
            'Hello Joan,

			Thank you for signing up to our website.

			Before you will officially part of the team, you still have to confirm your email by following the link below.

			http://localhost/symfony/web/app_dev.php/confirmEmail/40?confirmationId=de2a17cd07e98af9e70dfe59c2acdb4c275c894f66c1804f047429712483f5dd

			Cheers!',
            $message->getBody()
        );*/

	}
}