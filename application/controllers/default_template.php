<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// Frontpage Mod Names 
//citpage links - fp_mod_city

class Default_template extends CI_Controller {

	public function index()
	{
    	parent::__construct();
	}
	
	public function _remap($method,$params)
	{
    	
    	$this->retrieve_page($method, $params);
	}
	
	private function retrieve_page($method, $params){
		$data['base_url_override'] = "http://www.mannydasilva.com/foundation/admin/";
		$url = base_url();
		$method = $this->uri->segment(1);
		
		if(empty($method)){
			$method = "home";
		}

		// components
		$data['component'] = $this->load->view("components/".$method."/add","", TRUE);
		// components ENDS
		
		// navigation
		$data['mainNav'] = $this->load->view('navigations/main_nav', $data , TRUE);

		// external Libraries
		$libArrays = array(
			$url."application/js/foundation.min.js",
			
			$url."application/js/vendor/jquery.fancybox.js",
			$url."application/js/vendor/form_detection.js",

			$url."application/js/foundation/foundation.topbar.js",
			
			$url."application/js/foundation/foundation.orbit.js",
			$url."application/js/foundation/foundation.tab.js",
			$url."application/js/foundation/foundation.alert.js",
			$url."application/js/vendor/app.js",
			);

		$libs['libs'] = $libArrays;
		// external Libraries ENDS

		// views
		$this->load->view('header',$data);
    	$this->load->view('template_default',$data);
    	$this->load->view('footer',$libs);
	}

}



