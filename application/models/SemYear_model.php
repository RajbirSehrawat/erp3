<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SemYear_model extends CI_Model {
   public function __construct()
    {
        parent::__construct();
    }

 	public function deleteAndCeate($course, $fee) 
    {
    	
    	$data = array();
    	foreach($fee as $key=>$val){
    		$data[] = array('course_id' => $course, 'sem_year'=> $key, 'fee'=> $val);
    	}

    	$this->db->where('course_id', $course);
		$this->db->delete('university_course_fees');

    	$this->db->insert_batch('university_course_fees', $data);
		// echo $this->db->last_query(); exit;
		if($this->db->trans_status()==true){
			return true;
		} else {
			return false;
		}
	}

  	public function all()
	{
		$result=array();
		$this->db->order_by("university_course.course_name", "ASC");
		
		$this->db->select('university_course.*, university.name AS university_name');
		$this->db->from('university_course');
		$this->db->join('university', 'university.id = university_course.university_id');
		$query = $this->db->get();
		// echo $this->db->last_query(); exit;

		foreach ($query->result_array() as $row){
        	$result[]=$row;
		}
		return $result;
	}

	public function find($cid)
	{
		$result=array();
		$this->db->select('university_course.*, university.name AS uni_name');
		$this->db->from('university_course');
		$this->db->join('university', 'university.id = university_course.university_id');
		$this->db->where('university_course.id', $cid);
		$query = $this->db->get();
		// $query = $this->db->get_where('university_course', array('id' => $cid));
		foreach ($query->result_array() as $row){
       		return $row;
		}
		return $result;
	}

	public function findByCourse($course_id)
	{
		$result=array();
		$this->db->order_by('sem_year','ASC');
		$query = $this->db->get_where('university_course_fees', array('course_id' => $course_id));
		// $query = $this->db->get_where('university_course_fees', array('course_id' => $course_id));
		foreach ($query->result_array() as $row){
        	$result[] = $row;
		}

		return $result;
	}

}