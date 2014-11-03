<?php
/**
 * Mail Helper
 *
 * This class can be used again if ever there are other mailing service better than swiftMailer.
 * @author Joan Villariaza
 */
namespace Users\ManagementBundle\Helper;

class MailHelper
{
	const EMAIL_FROM = 'joan.villariaza@chromedia.com';
	const CONTENT_TYPE = 'text/html';

	public function __construct($mailer)
	{
		$this->mailer = $mailer;
	}

    public function sendWithSwiftMailer($subject, $mailto, $body) 
    {
		$message = \Swift_Message::newInstance()
				->setContentType(self::CONTENT_TYPE)
				->setSubject($subject)
				->setFrom(self::EMAIL_FROM)
				->setTo($mailto)
				->setBody($body);

		$this->mailer->send($message);
    }
}