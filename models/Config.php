<?php
/**
 * Config.php Database Class base model for other models
 * 
 * PHP Version 7.4.4
 * 
 * @category  PHP_WebApplication_Software
 * @package   User_Management_System
 * @author    Steven Automobile Sales <sales@stevenautomobilesales.com>
 * @copyright 2021 Steven Automobile Sales
 * @license   SSLIC: https://stevenautomobilesales.com
 * @link      https://stevenautomobilesales.com
 */

class Config
{
	const SYSTEM_TIMEZONE           = 'America/Kentucky/Monticello';
	const EMAIL_SMTP_METHOD         = 'yes';
	const SYSTEM_EMAIL_ID           = 'sales@stevenautomobilesales.com';
	const SYSTEM_EMAIL_PASSWORD     = 'DDQOW-M]q4Td';
	const SYSTEM_EMAIL_HOST         = 'stevenautomobilesales.com';
	const SYSTEM_EMAIL_SENDER_NAME  = 'Stevens Automobile Sales';
	const SYSTEM_PORT_NO            = 587;
	const APP_ADDRESS               = 'https://stevenautomobilesales.com';


	/**
	 * Error & Success messasge alert
	 * 
	 * @param $type    The type of error message
	 * @param $message The message string to be displayed
	 * 
	 * @return html  
	 */
	public function showMessage($type, $message)
	{
		return  '<div class="alert alert-' . $type . ' alert-dismissible"> 
					<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong class="text-center">' . $message . '</strong>
				</div>';
	}

	public function scream($item)
    {
        echo $item;
    }
}
