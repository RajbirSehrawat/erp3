<?php
if (!defined('BASEPATH'))
        exit('No direct script access allowed');
class SetUpModel extends CI_Model{
    
    public function index(){
		
        
		//$condition = "paper_code = '" . $search . "'";
        $this->db->select('*');
		$this->db->from('subject_details');
		//$this->db->where($condition);
		$query = $this->db->get();
		return $query->result();
		
		
    }
	
	public function add() {
		
		if($this->input->post('paper_code') != ''){
			$data = array(
				'paper_code' => $this->input->post('paper_code'),
				'subject' => $this->input->post('subject'),
				'min_marks'=> $this->input->post('min_marks'),
				'max_marks'=> $this->input->post('max_marks'),
				'created_date' => date('Y-m-d'),
			);
			return $this->db->insert('subject_details', $data);
		}
		
		//print_r($data); die;
        
    }
	
	public function update_product($id) 
    {
		$data=array(
            'paper_code' => $id['paper_code'],
            'subject'=> $id['subject'],
			'min_marks'=> $id['min_marks'],
			'max_marks'=> $id['max_marks'],
			'modify_date'=> date('Y-m-d'),
			
        );
		
        if($id['id']==0){
			return $this->db->insert('subject_details',$data);
        }else{
			$this->db->where('id',$id['id']);
            return $this->db->update('subject_details',$data);
        }        
    }
	
	function getEqueryDet(){
		$query = $this->db->query("SELECT e.*,co.course_name FROM enquiry as e INNER JOIN courses as co ON(co.course_code = e.course) WHERE MONTH(e.create_date) = MONTH(CURRENT_DATE()) AND YEAR(e.create_date) = YEAR(CURRENT_DATE())");
		return $query->result();
	}
	
	function getEqueryFee(){
		$query = $this->db->query("SELECT f.*, s.student_name,s.phone,s.course_fee, c.course_name FROM fee as f INNER JOIN student as s ON(s.enrollment = f.enrollment) LEFT JOIN courses as c ON(c.course_code = s.course_code) WHERE MONTH(due_date) = MONTH(CURRENT_DATE()) AND YEAR(due_date) = YEAR(CURRENT_DATE()) ORDER BY id DESC");
		return $query->result();
	}
	
	function getEqueryReg(){
		$query = $this->db->query("SELECT s.*, co.course_name as course FROM student as s INNER JOIN courses as co ON(co.course_code = s.course_code) WHERE MONTH(join_date) = MONTH(CURRENT_DATE()) AND YEAR(join_date) = YEAR(CURRENT_DATE())");
		return $query->result();
	}
	
	function getEqueryCal(){
		$query = $this->db->query("SELECT c.*, co.course_name FROM callings as c INNER JOIN courses as co ON(co.course_code = c.course)  WHERE MONTH(next_call_date) = MONTH(CURRENT_DATE()) AND YEAR(next_call_date) = YEAR(CURRENT_DATE())");
		return $query->result();
	}
	
}
?>