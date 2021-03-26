<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class University_model extends CI_Model {
   public function __construct()
    {
           parent::__construct();
           // Your own constructor code
    }

	public function create($name) 
    {
   		$data = array('name' => $name);
		$this->db->insert('university', $data);
		//echo $this->db->last_query(); 
		if($this->db->trans_status()==true){
			return true;
		} else {
			return false;
		}
	}


 	public function update($id, $name) 
    {
   		$data = array('name'=> $name);

		$this->db->where('id', $id);
		$this->db->update('university', $data);
			
		if($this->db->trans_status()==true){
			return true;
		}
		
		return false;
	}

  	public function all($status='')
	{
		$result=array();
		if($status != ''){
			$this->db->where('status', $status);
		}

		$this->db->order_by("name", "ASC");
		$query = $this->db->get('university');
		foreach ($query->result_array() as $row){
        	$result[]=$row;
		}
		return $result;
	}

	public function find($cid)
	{
		$result=array();
		$query = $this->db->get_where('university', array('id' => $cid));
		foreach ($query->result_array() as $row){
       		return $row;
		}
		return $result;
	}


	public function chk_name($id, $name)
	{
	 	$this->db->where('id!=', $id);
	 	$this->db->where('name', $name);
	 	$query= $this->db->get('university');
		// echo $this->db->last_query(); exit; 
		if($query->num_rows()==0){
			return true;	 
		} else {
			return false;        		
		}    
	}

}