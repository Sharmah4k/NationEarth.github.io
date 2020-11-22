<?php



define('CONTACTFORM_FROM_ADDRESS', 'sharmah1080@gmail.com'); //your mail for sending
/*define('CONTACTFORM_FROM_NAME', 'yourcompanyname'); //not mandatory*/


/*define('CONTACTFORM_TO_ADDRESS', 'whereyouwanttosendmail@gmail.com'); //where you want to send mail*/
define('CONTACTFORM_TO_NAME', 'yourcompanyname');

// The details of your SMTP service, e.g. Gmail.
define('CONTACTFORM_SMTP_HOSTNAME', 'smtp.gmail.com'); //change it if you using other than gmail
define('CONTACTFORM_SMTP_USERNAME', 'sharmah1080@gmail.com');
define('CONTACTFORM_SMTP_PASSWORD', 'H8894277164#');


/**
 * Optional Settings
 */

// The debug level for PHPMailer. Default is 0 (off), but can be increased from 1-4 for more verbose logging.
define('CONTACTFORM_PHPMAILER_DEBUG_LEVEL', 0);

// Which SMTP port and encryption type to use. The default is probably fine for most use cases.
define('CONTACTFORM_SMTP_PORT', 587);
define('CONTACTFORM_SMTP_ENCRYPTION', 'tls');
