<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UniversityCourse extends CI_Controller {
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
    	$this->load->model('UniCourse_model');
    	$this->load->model('University_model');
		$this->load->library('form_validation');
   }
	public function index()
	{
 
		$data['all'] = $this->UniCourse_model->all();
		$this->load->view('uni_course/list', $data);
	}

	public function new_course()
	{
		$data['university'] = $this->University_model->all();

		if($this->input->post('new_course')) 
		{
			$this->form_validation->set_rules('course_code', 'Course Code', 'trim|required|is_unique[university_course.course_code]');
			$this->form_validation->set_rules('course_name', 'Course Name', 'trim|required');
			$this->form_validation->set_rules('university', 'University', 'trim|required|is_natural_no_zero');
			$this->form_validation->set_rules('type', 'Course Type', 'trim|required');
			$this->form_validation->set_rules('total', 'Total Sem/Year', 'trim|required|is_natural_no_zero');
	   	   	
	   	   	if ($this->form_validation->run() == FALSE){
		      	$this->load->view('uni_course/new', $data);
	      	} else {
	         	$ccode = $this->input->post('course_code');
	         	$cname = $this->input->post('course_name');
	         	$university =  $this->input->post('university');
	         	$type =  $this->input->post('type');
	         	$total =  $this->input->post('total');
	         	$result = $this->UniCourse_model->create($university, $ccode, $cname, $type, $total);
				if($result == false){
					$this->session->set_flashdata('error_msg','Course not added, Please try again');
	      		} else {
	      		 	$this->session->set_flashdata('success_msg','Course added successfully');
	      		}
	      		redirect('universitycourse/new_course');
	      	}
     	} else {    	
			$this->load->view('uni_course/new', $data);
		}
	}
	public function edit($course_id = '') 
	{
		$data['university'] = $this->University_model->all();
		if($this->input->post('edit_course')){
			$this->form_validation->set_rules('course_code', 'Course Code', 'trim|required|callback_chk_code');
			$this->form_validation->set_rules('course_name', 'Course Name', 'trim|required');
			$this->form_validation->set_rules('university', 'University', 'trim|required|is_natural_no_zero');
			$this->form_validation->set_rules('type', 'Course Type', 'trim|required');
			$this->form_validation->set_rules('total', 'Total Sem/Year', 'trim|required|is_natural_no_zero');
			$course_id = $this->input->post('course_id');
   	   		if ($this->form_validation->run() == FALSE){
		      	$data['course_data'] = $this->UniCourse_model->find($course_id);
					$this->load->view('uni_course/edit', $data );
	      	} else {
	         	$ccode = $this->input->post('course_code');
	         	$cname = $this->input->post('course_name');
	         	$university =  $this->input->post('university');
	         	$type =  $this->input->post('type');
	         	$total =  $this->input->post('total');
	         	$result = $this->UniCourse_model->update($course_id, $university, $ccode, $cname, $type, $total);
				if($result == false){
					$this->session->set_flashdata('error_msg','Course not updated, Please try again');
	      		} else {
	      		 	$this->session->set_flashdata('success_msg','Course updated successfully');
	      		}
	      		redirect('universitycourse/edit/'.$course_id);
	      	}
		}
		else 
		{
			$data['course_data'] = $this->UniCourse_model->find($course_id);
			$this->load->view('uni_course/edit', $data );
		}
	}
	
	public function chk_code($course_code)
 	{
		$course_id = $this->input->post('course_id');
		$result = $this->UniCourse_model->chk_code($course_id, $course_code);
		if($result){
			return true;
		} else {
			$this->form_validation->set_message('chk_code', 'Course code already exists');
		 	return false;
		}
 	}
	
  
}