<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UniCourse_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function create($university, $course_code, $course_name, $type)
	{
		$data = array('university_id' => $university, 'course_code' => $course_code, 'course_name' => $course_name, 'type' => $type);
		$this->db->insert('university_course', $data);
		//echo $this->db->last_query(); 
		if ($this->db->trans_status() == true) {
			return true;
		} else {
			return false;
		}
	}


	public function update($id, $university, $course_code, $course_name, $type)
	{
		$data = array('university_id' => $university, 'course_code' => $course_code, 'course_name' => $course_name, 'type' => $type);
		$this->db->where('id', $id);
		$this->db->update('university_course', $data);

		if ($this->db->trans_status() == true) {
			return true;
		}

		return false;
	}

	public function all()
	{
		$result = array();
		$this->db->order_by("university_course.course_name", "ASC");

		$this->db->select('university_course.*, university.name AS university_name');
		$this->db->from('university_course');
		$this->db->join('university', 'university.id = university_course.university_id');
		$query = $this->db->get();
		// echo $this->db->last_query(); exit;

		foreach ($query->result_array() as $row) {
			$result[] = $row;
		}
		return $result;
	}

	public function find($cid)
	{
		$result = array();
		$query = $this->db->get_where('university_course', array('id' => $cid));
		foreach ($query->result_array() as $row) {
			return $row;
		}
		return $result;
	}

	public function findByUniversity($id)
	{
		$result = array();
		$query = $this->db->get_where('university_course', array('university_id' => $id));
		$result = $query->result_array();
		return $result;
	}


	public function chk_name($id, $name)
	{
		$this->db->where('id!=', $id);
		$this->db->where('course_name', $name);
		$query = $this->db->get('university_course');
		// echo $this->db->last_query(); exit; 
		if ($query->num_rows() == 0) {
			return true;
		} else {
			return false;
		}
	}

	public function chk_code($id, $code)
	{
		$this->db->where('id!=', $id);
		$this->db->where('course_code', $code);
		$query = $this->db->get('university_course');
		//echo $this->db->last_query(); exit; 
		if ($query->num_rows() == 0) {
			return true;
		} else {
			return false;
		}
	}
}
