<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// Frontpage Mod Names 
//citpage links - fp_mod_city

class Ajax extends CI_Controller {


	public function index()
	{
    	parent::__construct();
    	
	}

	public function _remap($method,$params)
	{
    	$direct_URL = $this->uri->segment_array();
		$direct_URL = $direct_URL[count($direct_URL)];

    	if($direct_URL == 'message'){
    		$this->SendData($method, $params);
    	}
	
	}
	
	private function SendData($method, $params){
		
		$mailer = $this->load->library('mail_lib');
		$sent = $this->mail_lib->contact_message('support@ramonafundinginc.com');

		echo json_encode($sent);

		//echo json_encode('$sent');
	}

	

	

}



