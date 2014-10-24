<?php
namespace Users\ManagementBundle\Helper;

class MailHelper
{
	public function SwiftMessageMailer($subject, $mailto, $body)
	{
		// mailer
		$message = \Swift_Message::newInstance()
				->setSubject($subject)
				->setFrom('joan.villariaza@chromedia.com')
				->setTo($mailto)
				->setBody($body);
	}
}