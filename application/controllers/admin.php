<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// Frontpage Mod Names 
//citpage links - fp_mod_city

class Admin extends CI_Controller {

	public function index()
	{
    	parent::__construct();
	}
	
	public function _remap($method,$params)
	{
    	
    	$this->retrieve_page($method, $params);
	}
	
	private function retrieve_page($method, $params){
		
		$url = base_url();
		$nav = "";
		$controller = $this->uri->segment(2);
		if($controller == ""){$controller = 'admin';}

		$ci =& get_instance();
		$ci->load->library('session');
		$sessionData = $ci->session->userdata('logged_in');
		
		if($this->uri->segment(1) == "admin" && $this->uri->segment(2) != "login"){
			$ci =& get_instance();
			$ci->load->library('session');
	
			if($sessionData == '0' ){redirect( 'admin/login', 'refresh');}
		}

		if($this->uri->segment(2) != "login"){
			// navigation
			$nav['mainNav'] = $this->load->view('navigations/main_nav2', '' , TRUE);
		}


		if($this->uri->segment(2) == "logout"){
			$ci->session->sess_destroy();
			redirect( 'admin/login', 'refresh');

		}

		$data['component'] = $this->load->view("components/".$controller."/add","", TRUE);


		// external Libraries
		$libArrays = array(
			$url."application/js/foundation.min.js",
			$url."application/js/foundation/foundation.topbar.js",
			$url."application/js/vendor/app.js",
			$url."application/js/vendor/ajax.js",
			$url."application/js/vendor/form_detection.js",
			$url."application/js/foundation/foundation.tab.js",
			$url."application/js/foundation/foundation.alert.js"
			);

		/*if($this->uri->total_segments() == 3 || $this->uri->total_segments() == 7){
			array_push($libArrays, $url."application/js/vendor/form_detection.js");
			array_push($libArrays, $url."application/js/vendor/ajax.js");
			array_push($libArrays, $url."application/js/foundation/foundation.alert.js");
			<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
		}*/

		$libs['libs'] = $libArrays;
		// external Libraries ENDS



		// views
		$this->load->view('header',$nav);
    	$this->load->view('template_default',$data);
    	$this->load->view('footer',$libs);
	}

}



