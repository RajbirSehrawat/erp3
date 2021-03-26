<?php
if (!defined('BASEPATH'))
        exit('No direct script access allowed');
class StudentResultModel extends CI_Model{
    
    public function index(){
		
        
		//$condition = "paper_code = '" . $search . "'";
        $this->db->select('*');
		$this->db->from('results_details');
		//$this->db->where($condition);
		$query = $this->db->get();
		return $query->result();
	}
	
	public function getSubDet(){
		
        $this->db->select('*');
		$this->db->from('subject_details');
		$query = $this->db->get();
		return $query->result();
	}
	
	public function add_result(){
		
		
		if(isset($_POST) && isset($_POST['enrollment_id']) && $_POST['enrollment_id'] != ''){
			$getEnrol = $_POST['enrollment_id'];
			$getCount  = count($_POST['subject']);
			
			$getObt = 0;
			$getMin = 0;
			$getMax = 0;
			
			for($i = 0; $i < $getCount; $i++){
					
				$getObt = $getObt + $_POST['marks_obtain'][$i];
				$getMin = $getMin + $_POST['min_marks'][$i];
				$getMax = $getMax + $_POST['max_marks'][$i];
				
				$data = array(
					'enrollment_id' => $getEnrol,
					'subject' => $_POST['subject'][$i],
					'code' => $_POST['code'][$i], 
					'marks_obtain' => $_POST['marks_obtain'][$i], 
					'min_marks' => $_POST['min_marks'][$i], 
					'max_marks' => $_POST['max_marks'][$i], 
					'created_date' => date('Y-m-d'), 
				);
				$this->db->insert('marks_details', $data);
			}
			

			if($getObt != '' && $getMin != '' && $getMax != ''){
				
				$getCertificate = 'ECC'.date('Ymdhis');
				
				if($getObt >= $getMin){
					$getResult = 'PASSED';
				} else {
					$getResult = 'FAILED';
				}
				
				$getPercentage1 = ($getObt * 100) / $getMax;
				$getPercentage = round($getPercentage1, 2);
				
				if($getPercentage >= 80 && $getPercentage <= 100){
					$getDivivsion = 'EXCELENT';
				} else if($getPercentage >= 60 && $getPercentage < 80){
					$getDivivsion = 'FIRST';
				} else if($getPercentage >= 50 && $getPercentage < 60){
					$getDivivsion = 'SECOND';
				} else if($getPercentage >= 0 && $getPercentage < 50){
					$getDivivsion = 'THIRD';
				} else {
					$getDivivsion = '';
				}
				
				
				$data = array(
					'certificate_no' => $getCertificate,
					'enrollment_id' =>  $getEnrol,
					'result' => $getResult, 
					'Devision' => $getDivivsion, 
					'marks_obtain_tot' => $getObt, 
					'min_marks_tot' => $getMin, 
					'max_marks_tot' => $getMax, 
					'percentage' => $getPercentage, 
					'created_date' => date('Y-m-d'), 
				);
				return $this->db->insert('results_details', $data);	
			}
			
			
			
			
			
		}
		 
		
        /* $this->db->select('*');
		$this->db->from('subject_details');
		$query = $this->db->get();
		return $query->result(); */
	}
	
	public function getCurDetails($id){
		
        $this->db->select('*');
		$this->db->where('id',$id);
		$this->db->from('subject_details');
		$query = $this->db->get();
		return $query->result();
	}
	
	public function get_print_data($id){
		//echo 'dsfdsf'.$id;
		$condition = "id = '" . $id . "'";
        $this->db->select('*');
		$this->db->from(' results_details');
		$this->db->where($condition);
		$query = $this->db->get();
		return $query->result();
	}
	
	public function get_certificates($search){
		
        
		$condition = "enrollment = '" . $search . "'";
        $this->db->select('*');
		$this->db->from('student');
		$this->db->where($condition);
		$query = $this->db->get();
		//echo '<pre>'; print_r($query); die;
		return $query->result();
		
		
    }
	
	
	public function get_coursedetails($courDet){
		
        
		$condition = "course_code = '" . $courDet . "'";
        $this->db->select('*');
		$this->db->from('courses');
		$this->db->where($condition);
		$query = $this->db->get();
		return $query->result();
		
		
    }
	
}	