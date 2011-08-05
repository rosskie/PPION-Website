<?php

class Home extends MY_Controller {
	function  __construct()  {
		/* Inherit the CI_Controller construct because we're using a 
		   custom controller with $this->em for Doctrine already set */
		parent::__construct();
	}
            
    function index() {
		//Just pass in a basic variable into an HTML view
		$data['message'] = "This is home";
		$this->load->view('home', $data);
		
	}
}