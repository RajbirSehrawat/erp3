<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calling_model extends CI_Model {
   public function __construct()
    {
           parent::__construct();
           // Your own constructor code
    }

   public function new_call() 
     {
    		$sname= $this->input->post('sname');
			$mobile = $this->input->post('mobile');
			//$course = $this->input->post('course_name');
			$doe= $this->input->post('doe');
			$ndoc= $this->input->post('ndoc');
			$remark= $this->input->post('remark');
      	$dd=date('Y-m-d');
   		$data = array(
    			  'student_name' => $sname,
    			  'mobile' => $mobile,
    			//  'course' => $course,
    			  'call_date ' => $doe	,
    			  'next_call_date'=> $ndoc,
     			  'remark '=> $remark,
     			  'create_date' => $dd,
     			  'modify_date'=>$dd
			);

			$this->db->insert('callings', $data);
			//echo $this->db->last_query(); exit; 
			if($this->db->trans_status()==true) 
		   	{
					return true;
				}
			else 
				{
					return false;
				}
	  }
	  public function edit_call() 
     {
     		$sname= $this->input->post('sname');
			$mobile = $this->input->post('mobile');
			$course = $this->input->post('course_name');
			$doe= $this->input->post('doe');
			$ndoc= $this->input->post('ndoc');
			$remark= $this->input->post('remark');
      	$dd=date('Y-m-d');
      	$call_id = $this->input->post('call_id');
   		$data = array(
    			  'student_name' => $sname,
    			  'mobile' => $mobile,
    			  'course' => $course,
    			  'call_date ' => $doe	,
    			  'next_call_date'=> $ndoc,
     			  'remark '=> $remark,
     			  'modify_date'=>$dd
			);

			$this->db->where('id', $call_id);
			$this->db->update('callings', $data);
			//echo $this->db->last_query(); exit; 
			if($this->db->trans_status()==true) 
		   	{
					return true;
				}
			else 
				{
					return false;
				}
	  }
 
  public function all_calls()
	{
		$result=array();
		$this->db->order_by('id','DESC');
		$query = $this->db->get('callings');
		foreach ($query->result_array() as $row)
		{
        $result[]=$row;
		}
		return $result;
	}
	
	public function today_calls($date)
	{
		$result=array();
		$this->db->where('next_call_date', $date);
		$this->db->order_by('id','DESC');
		$query = $this->db->get('callings');
		foreach ($query->result_array() as $row)
		{
        $result[]=$row;
		}
		return $result;
	}
	public function view_call($cid)
	{
		$result=array();
		$query = $this->db->get_where('callings', array('id' => $cid));
		foreach ($query->result_array() as $row)
		{
       	return $row;
		}
		
	}
	
}