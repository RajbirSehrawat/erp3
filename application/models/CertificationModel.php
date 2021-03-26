<?php
if (!defined('BASEPATH'))
        exit('No direct script access allowed');
class CertificationModel extends CI_Model{
    
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
	
	public function get_markdetails($markDet){
		
        
		$condition = "marks_details.enrollment_id = '" . $markDet . "'";
        $this->db->select('*');
		$this->db->from('marks_details');
		$this->db->join('subject_details', 'subject_details.id = marks_details.subject','INNER');
		$this->db->where($condition);
		$query = $this->db->get();
		return $query->result();
		
		
    }
	
	public function get_resultdetails($resukDet){
		
        /*
		$condition = "enrollment_id = '" . $resukDet . "'";
        $this->db->select('*');
		$this->db->from('results_details');
		$this->db->where($condition);
		$query = $this->db->get();
		return $query->result();
	*/
	
	$condition = "enrollment_id = '" . $resukDet . "'";
        $this->db->select('*');
		$this->db->from('results_details');
                //$this->db->join('subject_details', 'subject_details.id = results_details.subject','INNER');
		$this->db->where($condition);
		$query = $this->db->get();
		return $query->result();	
		
    }
	
	
	
	
    
}
?>