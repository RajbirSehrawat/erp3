<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Book_model extends CI_Model {
   public function __construct()
    {
           parent::__construct();
           // Your own constructor code
    }

   public function new_book() 
     {
    		$bname= $this->input->post('bname');
			$bcode = $this->input->post('bcode');
			$quantity = $this->input->post('quantity');
			$remark= $this->input->post('remark');
      	$dd=date('Y-m-d');
   		$data = array(
    			  'book_name' => $bname,
    			  'book_code' => $bcode,
    			  'book_quantity' => $quantity,
    			  'remark '=> $remark,
     			  'create_date' => $dd,
     			  'modify_date'=>$dd
			);

			$this->db->insert('books_inventory', $data);
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
	  public function edit_book() 
     {
     		$bname = $this->input->post('bname');
			$bcode = $this->input->post('bcode');
			$quantity = $this->input->post('quantity');
			$remark = $this->input->post('remark');
			$book_id = $this->input->post('book_id');
      	$dd=date('Y-m-d');
   		$data = array(
    			  'book_name' => $bname,
    			  'book_code' => $bcode,
    			  'book_quantity' => $quantity,
    			  'remark '=> $remark,
     			  'modify_date'=>$dd
			);

			$this->db->where('id', $book_id);
			$this->db->update('books_inventory', $data);
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
 
  public function sale_book() 
     {
     		$bname = $this->input->post('bname');
			$bcode = $this->input->post('bcode');
			$quantity = $this->input->post('quantity');
			$remark = $this->input->post('remark');
			$book_id = $this->input->post('book_id');
      	$dd=date('Y-m-d');
   		$data = array(
    			  'book_name' => $bname,
    			  'book_code' => $bcode,
    			  'book_quantity' => $quantity,
    			  'remark '=> $remark,
     			  'modify_date'=>$dd
			);

			$this->db->where('id', $book_id);
			$this->db->update('books_inventory', $data);
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
	  
  	public function all_books()
	{
		$result=array();
		$this->db->order_by('id','DESC');
		$query = $this->db->get('books_inventory');
		foreach ($query->result_array() as $row)
		{
        $result[]=$row;
		}
		return $result;
	}
	
	public function view_book($cid)
	{
		$result=array();
		$query = $this->db->get_where('books_inventory', array('id' => $cid));
		foreach ($query->result_array() as $row)
		{
       	return $row;
		}	
	}
	
	public function student_books($enrollment)
	{
		$result=array();
		$query = $this->db->get_where('student_books', array('enrollment_no' => $enrollment));
		//echo $this->db->last_query(); exit; 
		foreach ($query->result_array() as $row)
		{
       	$result[] = $row;
		}
		return $result;	
	}
	
	public function add_student_book() 
     {
    		$enrollment= $this->input->post('enrollment');
			$book_name = $this->input->post('book_name');
			$dd=date('Y-m-d');
   		$data = array(
    			  'enrollment_no' => $enrollment,
    			  'book_code' => $book_name,
    			  'create_date' => $dd,
     			  'modify_date'=>$dd
			);

			$this->db->insert('student_books', $data);
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
	   public function chk_enrollment($enrollment)
	     {
				$query = $this->db->get_where('student', array('enrollment' => $enrollment));
				if($query->num_rows()==1)
        		{
        			return true;	 
        		}
        		else 
        		{
					return false;        		
        		}    
	     }
}