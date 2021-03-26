<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class University extends CI_Controller {
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
	public function index()
	{
 
		$data['all'] = $this->University_model->all();
		$this->load->view('university/list',$data);
	}

	public function create()
	{

		if($this->input->post('new_university')) 
		{
			$this->form_validation->set_rules('name', 'University Name', 'trim|required|is_unique[university.name]');
			
	   	   	if ($this->form_validation->run() == FALSE){
		      		$this->load->view('university/new');
	      	}
	      	else {
	         	
	         	$name = $this->input->post('name');
	         	$result = $this->University_model->create($name);
				if($result == false){
					$this->session->set_flashdata('error_msg','University not added, Please try again');
	      		} else {
	      		 	$this->session->set_flashdata('success_msg','University added successfully');
	      		}
	      		redirect('university/create');
	      	}
      	} else {    	
			$this->load->view('university/new');
		}
	}


	public function edit($id='') 
	{
		if($this->input->post('edit_university'))
		{
			$this->form_validation->set_rules('name', 'University Name', 'trim|required|callback_chk_name');
			$id = $this->input->post('university_id');
	   	   	
	   	   	if ($this->form_validation->run() == FALSE)	{
		      	$data['data'] = $this->University_model->find($id);
					$this->load->view('university/edit', $data );
	      	}
	      	else
	      	{
	         	$name = $this->input->post('name');
	         	$result = $this->University_model->update($id, $name);
				if($result == false){
					$this->session->set_flashdata('error_msg','University not added, Please try again');
	      		} else  {
	      		 	$this->session->set_flashdata('success_msg','University added successfully');
	      		}
	      		 redirect('university/edit/'.$id);
	      	}
		} else {
			$data['data'] = $this->University_model->find($id);
			$this->load->view('university/edit', $data );
		}
	}
	public function chk_name($name)
 	{
 		$id = $this->input->post('university_id');
 		$result = $this->University_model->chk_name($id, $name);
 		if($result){
 		 	return true;
 		} else {
 		 	$this->form_validation->set_message('chk_name', 'University name already exists');
 		 	return false;
 		}
 	}
	  
}
