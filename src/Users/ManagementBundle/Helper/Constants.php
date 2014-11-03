<?php

/**
 * Constants
 * 
 * This class contains all the constant variables used throughout the system.
 * 
 * @author Joan Villariaza
 */

namespace Users\ManagementBundle\Helper;

class Constants
{
	/**
	 * Email Subjects
	 */
	const CONFIRMATION_EMAIL_SUBJECT = "Confirm Your Email";
	const FORGOT_PASSWORD_SUBJECT = "Forgot Password";

	/**
	 *  Alert Messages
	 */
	const SUCCESSFUL_PASSWORD_RESET = "Successfully reset password.";
	const EXPIRED_URL = "The URL that you are trying to access has expired. Please request a new one.";
	const EMAIL_SENT = "Please click the link sent to your mailbox to continue this transaction. Thank you.";
	const EMAIL_NOT_FOUND = "Please use a valid and existing email address.";
	const SUCCESSFUL_REGISTRATION = "You have successfully created your account. Please click the link sent to your mailbox for account confirmation. Thank you.";
	const SUCCESSFUL_CONFIRMATION = "You have successfully activated your account. You may login now!";
}