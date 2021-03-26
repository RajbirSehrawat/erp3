<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StudentResult extends CI_Controller {

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
		$this->load->model('StudentResultModel');         
		$this->load->helper('url');
	}
	
	
   public function index()
   {
       $studentResult=new StudentResultModel;
       $data['data']=$studentResult->index();
       //$this->load->view('includes/header');       
       $this->load->view('studentresult/index',$data);
       //$this->load->view('includes/footer');
   }
   public function add_result(){
		$student=new StudentResultModel;
		
		$getSubArr['getSubArr'] = $student->getSubDet();
		//echo '<pre>';print_r($getSubArr); die;
		//$this->load->view('includes/header');
		$this->load->view('studentresult/add_result', $getSubArr);
		//$this->load->view('includes/footer');      
		$result = $student->add_result();
		//$this->load->view('includes/header');
	   if($result != ''){
		   redirect(base_url('index.php/StudentResult'));
		   
	   }
   }
   /**
    * Store Data from this method.
    *
    * @return Response
   */
   public function store()
   {
       $studentResult=new StudentResultModel;
       $studentResult->insert_product();
       redirect(base_url('products'));
    }
   /**
    * Edit Data from this method.
    *
    * @return Response
   */
   public function edit($id)
   {
       $product = $this->db->get_where('products', array('id' => $id))->row();
       //$this->load->view('includes/header');
       $this->load->view('products/edit',array('product'=>$product));
       //$this->load->view('includes/footer');   
   }
   /**
    * Update Data from this method.
    *
    * @return Response
   */
   public function update($id)
   {
       $studentResult=new StudentResultModel;
       $studentResult->update_product($id);
       redirect(base_url('products'));
   }
   /**
    * Delete Data from this method.
    *
    * @return Response
   */
   public function delete($id)
   {
       $this->db->where('id', $id);
       $this->db->delete('products');
       redirect(base_url('products'));
   }
	
	public function getDetVal(){
		$id = $_POST['id'];
		//$dataArr = array();
		if($id != ''){
			$studentResult=new StudentResultModel;
			$getRes = $studentResult->getCurDetails($id);
			$array = json_decode(json_encode($getRes), true);
				$p_code = $array[0]['paper_code'];
				$p_mirk = $array[0]['min_marks'];
				$p_mxrk = $array[0]['max_marks'];
				$dataArr = array(
					'p_code' => $p_code,
					'p_mirk' => $p_mirk,
					'p_mxrk' => $p_mxrk	
				);
				echo $p_code.','.$p_mirk.','.$p_mxrk;
		}
	}
	
	public function printCertification($id){
		//$this->load->view('includes/header');
		if(isset($id) && $id != ''){
			$studentResult=new StudentResultModel;
			$getPrintData = $studentResult->get_print_data($id);
			$arrayData = json_decode(json_encode($getPrintData), true);
			if($arrayData[0]['enrollment_id'] != ''){
				$data=$studentResult->get_certificates($arrayData[0]['enrollment_id']);
				$getUserDet = json_decode(json_encode($data), True);
				if($getUserDet[0]['course_code'] != ''){
					$getCourseDetails = $studentResult->get_coursedetails($getUserDet[0]['course_code']);
					$getCourse = json_decode(json_encode($getCourseDetails), True);
					
// QR code

	/*
	    $this->load->library('ciqrcode');
		$config['cacheable']	= false;
	    $qr_text = $getUserDet[0]['enrollment'].",".$getUserDet[0]['student_name'].";
		$params['qrcode'] = $qr_text;
		$params['size'] = 2;
		$params['savename'] = FCPATH.'tes.png';
		$this->ciqrcode->initialize($config);
		$this->ciqrcode->generate($params);
	*/	

		
		
		// End QR code
		


					$dataArr = array(
							
						'cert_detail'	=>  $arrayData,
						'stud_detail'	=>  $getUserDet,
						'course_detail'	=>  $getCourse,
	
					);
					$this->load->view('studentresult/print',$dataArr);	
				}
			}
			
			
			
		} else {
			$this->load->view('studentresult/print');
		}
		
		//$this->load->view('includes/footer');   
	}
	
	
}

