<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class mail_lib {
    
    public function contact_message($reciever)
    {
		$sender = $_POST['email'];
		$subject = 'Contact form submission';
		
		$headers = "From: " . strip_tags($_POST['email']) . "\r\n";
		$headers .= "Reply-To: ". strip_tags($_POST['email']) . "\r\n";
		//$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		$headers .= "X-Mailer: PHP/".phpversion();
	


		$message = '<html><body>';
		$message .= '<h1>Website Contact Form submission</h1>';
		$message .= '<h3>Contact name</h3>';
		$message .= $_POST['name'];
		$message .= '<h3>Contact email</h3>';
		$message .= $_POST['email'];
		$message .= '<h3>Contact Message</h3>';
		$message .= $_POST['message'];
		$message .= '</body></html>';

	
		$ci =& get_instance();
		$ci->load->library('email');

		$config['protocol'] = 'sendmail';
		$config['mailpath'] = '/usr/sbin/sendmail';
		$config['charset'] = 'iso-8859-1';
		$config['wordwrap'] = TRUE;
		$config['mailtype'] = 'HTML';
		$ci->email->initialize($config);
		$ci->email->set_mailtype("html");
		$ci->email->from('support@ceowd.com', 'Website');
		$ci->email->to('cosmicmule@yahoo.com'); 
		//$ci->email->cc('cosmicmule@yahoo.com'); 
	

		$ci->email->subject($subject);
		$ci->email->message($message);	

		$ci->email->send();

		return true;
    }

    

}
