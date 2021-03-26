<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SemesterYear extends CI_Controller {
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
   	{
    	parent::__construct();
    	is_logged_in();
      	$this->load->model('University_model');
		$this->load->library('form_validation');
   	}


	public function manage($course_id)
	{	
 
		// $data['all'] = $this->SemesterYear_model->all();
		$this->load->view('uni_course/semester_year');
	}

	
	  
}
