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
		$this->load->model('UniCourse_model');
		$this->load->model('SemYear_model');
   	}


	public function manage($course_id)
	{	
 		
 		$data['course_data'] = $this->UniCourse_model->find($course_id);
 		$data['sem_year'] = $this->SemYear_model->findByCourse($course_id);
 		// print_r($data); exit;
 		if($this->input->post('save')) {
			
			$this->form_validation->set_rules('course', 'Course', 'trim|required');	   	   	
	   	   	if ($this->form_validation->run() == FALSE){
		      	$this->load->view('uni_course/semester_year', $data);
	      	} else {
	         	$course = $this->input->post('course');
	         	$fees = $this->input->post('fee');
	         	$result = $this->SemYear_model->deleteAndCeate($course, $fees);
				if($result == false){
					$this->session->set_flashdata('error_msg','Not added, Please try again');
	      		} else {
	      		 	$this->session->set_flashdata('success_msg','Added successfully');
	      		}
	      		redirect('semesteryear/manage/'. $course);
	      	}
     	} else {
     		// $data['all'] = $this->SemesterYear_model->all();
			$this->load->view('uni_course/semester_year', $data);
     	}		
	}

	
	  
}
