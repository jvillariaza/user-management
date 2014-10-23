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
		$registrationForm = $crawler->selectButton('Register')->form();
		
		// submit the form for registration
		$crawler = $client->submit($registrationForm, array(
			'user[firstName]' => 'Joan',
			'user[lastName]' => 'Villariaza',
			'user[email]' => 'jhoanne.villariaza@gmail.com',
			'user[password][password]' => 'joan@123',
			'user[password][confirm]' => 'joan@123'
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

        /*$this->assertEquals('',
            $message->getBody()
        );*/

	}
}