<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// Frontpage Mod Names 
//citpage links - fp_mod_city

class Home extends CI_Controller {

	public function index()
	{
    	parent::__construct();
	}
	
	public function _remap($method,$params = array())
	{
    	
    	$this->retrieve_page($method, $params);
	}
	
	private function retrieve_page($method, $params){
		$data['base_url_override'] = "http://www.mannydasilva.com/foundation/admin/";
		$url = base_url();
		$section = $method;
		$component = $params;
		$data['params'] = 'home';
		// params injections
		
		if(isset($section) == "index"){
			$section = 'home';
		}

		// components
		$data['component'] = $this->load->view("components/home/add",$data, TRUE);
		if (!empty($params)) {
		    
		}
		// components ENDS
		
		// navigation
		$data['mainNav'] = $this->load->view('navigations/main_nav', $data , TRUE);

		// external Libraries
		$libArrays = array(
			$url."application/js/foundation.min.js",
			$url."application/js/foundation/foundation.topbar.js",
			$url."application/js/foundation/foundation.accordion.js",
			$url."application/js/vendor/app.js",
			$url."application/js/foundation/foundation.orbit.js",
			"http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js",


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
		$this->load->view('header',$data);
    	$this->load->view('template_default',$data);
    	$this->load->view('footer',$libs);
	}

}



