<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Certification extends CI_Controller {

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
	 
	public function __construct() {
		//load database in autoload libraries 
		parent::__construct(); 
		$this->load->model('CertificationModel');         
		$this->load->helper('url');
	}
	
	
	
	public function index($enID)
	{
		//print($enID); die;
		if(isset($enID)){
			$certificates=new CertificationModel;
			$data=$certificates->get_certificates($enID);
			$getUserDet = json_decode(json_encode($data), True);
			//echo '<pre>'; print_r($data); die;
			if(isset($data) && $data != null){
				
				if($getUserDet[0]['enrollment'] != ''){
					
					$getCourseDetails = $certificates->get_coursedetails($getUserDet[0]['course_code']);
					$getCourse = json_decode(json_encode($getCourseDetails), True);
					//echo '<pre>';print_r($getCourse);
					$getMarkDetails = $certificates->get_markdetails($getUserDet[0]['enrollment']);
					$getMarks = json_decode(json_encode($getMarkDetails), True);
					//echo '<pre>'; print_r($getMarks); die;
					if($getMarks[0]['enrollment_id'] != ''){
						$getResultDetails = $certificates->get_resultdetails($getMarks[0]['enrollment_id']);
						$getResult = json_decode(json_encode($getResultDetails), True);
						
						$dataArr = array(
							
							'student_detail'	=>  $getUserDet,
							'marks_detail' 		=>  $getMarks,
							'results_detail'	=>  $getResult,
							'course_detail'	=>  $getCourse,
							
						);
						$this->load->view('certification/index',$dataArr);		
					}
				}
			} else {
				$errorMsg = "Student Not Exits";
				$this->load->view('certification/index',$errorMsg);
			}
			
			 	
		} else {
			$this->load->view('certification/index');
		}
		
	}
	
	
}
