<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calling extends CI_Controller {
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
       $this->load->model('Calling_model');
 		 $this->load->library('form_validation');
   }
   
	public function index()
	{ 
		$data['all_calls'] = $this->Calling_model->all_calls();
		$this->load->view('calling/list',$data);
	}

	public function new_call()
	{

		if($this->input->post('submit')) 
		{
			$this->form_validation->set_rules('sname', 'Student Name', 'trim|required');
			$this->form_validation->set_rules('mobile', 'Mobile', 'trim|required|is_natural_no_zero|exact_length[10]');
			//$this->form_validation->set_rules('course_name', 'Course Name', 'trim|required');
			$this->form_validation->set_rules('doe', 'Date of Enquiry', 'trim|required');
			
			$this->form_validation->set_rules('ndoc', 'Next Date of Calling', 'trim');
			$this->form_validation->set_rules('remark', 'Remark', 'trim');
			
   	   if ($this->form_validation->run() == FALSE)
      	{
	      	$this->load->view('calling/new');
      	}
      	else
      	{
         	
         	 $result = $this->Calling_model->new_call();
				 if($result == false)
				 {
						$this->session->set_flashdata('error_msg','Call not added, Please try again');
      		 }
      		 else 
      		 {
      		 	$this->session->set_flashdata('success_msg','Call added successfully');
      		 }
      		 redirect('calling/new_call');
      	}
      }
      else 
      {    	
			$this->load->view('calling/new');
		}
	}
	
	public function edit($call_id = '') 
	{
		if($this->input->post('edit_call'))
		{
			$this->form_validation->set_rules('sname', 'Student Name', 'trim|required');
			$this->form_validation->set_rules('mobile', 'Mobile', 'trim|required|is_natural_no_zero|exact_length[10]');
			//$this->form_validation->set_rules('course_name', 'Course Name', 'trim|required');
			$this->form_validation->set_rules('doe', 'Date of Enquiry', 'trim|required');
			
			$this->form_validation->set_rules('ndoc', 'Next Date of Calling', 'trim');
			$this->form_validation->set_rules('remark', 'Remark', 'trim');
			$call_id = $this->input->post('call_id');
   	   if ($this->form_validation->run() == FALSE)
      	{
	      	$data['call_data'] = $this->Calling_model->view_call($call_id);
				$this->load->view('calling/edit', $data );
      	}
      	else
      	{
         	 $result = $this->Calling_model->edit_call();
				 if($result == false)
				 {
						$this->session->set_flashdata('error_msg','Call not update, Please try again');
      		 }
      		 else 
      		 {
      		 	$this->session->set_flashdata('success_msg','Call update successfully');
      		 }
      		 redirect('calling/edit/'.$call_id);
      	}
		}
		else 
		{
			$data['call_data'] = $this->Calling_model->view_call($call_id);
			$this->load->view('calling/edit', $data );
		}
	}
	
	function today($date)
	{
		$data['all_calls'] = $this->Calling_model->today_calls($date);
		$this->load->view('calling/list',$data);
	}
	
  
}
