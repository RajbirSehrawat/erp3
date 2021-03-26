<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student_model extends CI_Model {
   public function __construct()
    {
           parent::__construct();
           // Your own constructor code
		   $this->load->library('upload');
    }

   public function new_student() 
     {
    		
			 if(!empty($_FILES['marksheet_sc']['name'])){
				$path1 = $_FILES['marksheet_sc']['name'];
				$newName1 = $this->input->post('enrollement')."sc"."_".pathinfo($path1, PATHINFO_EXTENSION); 
			
                $config1['upload_path'] = './uploads/marksheet_10/';
                $config1['allowed_types'] = 'jpg|jpeg|png|gif|pdf|xlx|xlxs|odt|txt|doc|docx|csv';
                //$config['file_name'] = $_FILES['marksheet_sc']['name'];
				$config1['file_name'] = $newName1;
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config1);
                $this->upload->initialize($config1);
                
                if($this->upload->do_upload('marksheet_sc')){
				
                    $uploadData1 = $this->upload->data();
                    $marksheet_sc = $uploadData1['file_name'];
                }else{
				
                    $marksheet_sc = '';
                }
            }else{
				
                $marksheet_sc = '';
            }
			
			 if(!empty($_FILES['marksheet_sr_sc']['name'])){
				$path2 = $_FILES['marksheet_sr_sc']['name'];
				$newName2 = $this->input->post('enrollement')."_sr_sc"."_".pathinfo($path2, PATHINFO_EXTENSION); 
			
                $config2['upload_path'] = './uploads/marksheet_12/';
                $config2['allowed_types'] = 'jpg|jpeg|png|gif|pdf|xlx|xlxs|odt|txt|doc|docx|csv';
                //$config['file_name'] = $_FILES['marksheet_sc']['name'];
				$config2['file_name'] = $newName2;
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config2);
                $this->upload->initialize($config2);
                
                if($this->upload->do_upload('marksheet_sr_sc')){
				
                    $uploadData2 = $this->upload->data();
                    $marksheet_sr_sc = $uploadData2['file_name'];
                }else{
				
                    $marksheet_sr_sc = '';
                }
            }else{
				
                $marksheet_sr_sc = '';
            }
			
			
			if(!empty($_FILES['adhar']['name'])){
				$path3 = $_FILES['adhar']['name'];
				$newName3 = $this->input->post('enrollement')."_aadhar"."_".pathinfo($path3, PATHINFO_EXTENSION); 
			
                $config3['upload_path'] = './uploads/adhar_card/';
                $config3['allowed_types'] = 'jpg|jpeg|png|gif|pdf|xlx|xlxs|odt|txt|doc|docx|csv';
                //$config['file_name'] = $_FILES['marksheet_sc']['name'];
				$config3['file_name'] = $newName3;
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config3);
                $this->upload->initialize($config3);
                
                if($this->upload->do_upload('adhar')){
				
                    $uploadData3 = $this->upload->data();
                    $adhar = $uploadData3['file_name'];
                }else{
				
                    $adhar = '';
                }
            }else{
				
                $adhar = '';
            }
			
			 if(!empty($_FILES['image']['name'])){
				$path4 = $_FILES['image']['name'];
				$newName4 = $this->input->post('enrollement')."_img"."_".pathinfo($path4, PATHINFO_EXTENSION); 
			
                $config4['upload_path'] = './uploads/photo/';
                $config4['allowed_types'] = 'jpg|jpeg|png|gif|pdf|xlx|xlxs|odt|txt|doc|docx|csv';
                //$config['file_name'] = $_FILES['marksheet_sc']['name'];
				$config4['file_name'] = $newName4;
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config4);
                $this->upload->initialize($config4);
                
                if($this->upload->do_upload('image')){
				
                    $uploadData4 = $this->upload->data();
                    $image = $uploadData4['file_name'];
                }else{
				
                    $image = '';
                }
            }else{
				
                $image = '';
            }
			
			
			
			//print_r('ad--'.$adhar.'---image--'.$image.'---12---'.$marksheet_sr_sc.'----10---'.$marksheet_sr_sc);
			//die;
			
			$enrollement = $this->input->post('enrollement');
			$aadhar = $this->input->post('aadhar');
			$sname = $this->input->post('sname');
			
			$fname = $this->input->post('fname');
			$mname = $this->input->post('mname');
			$caste_name = $this->input->post('caste_name');
			$gender = $this->input->post('gender');
			$dob = $this->input->post('dob');
			
			$address = $this->input->post('address');
			$mobile = $this->input->post('mobile');
			$alt_mobile = $this->input->post('alt_mobile');
			$email = $this->input->post('email');
			
			$course_name = $this->input->post('course_name');
			$course_fee = $this->input->post('course_fee');
			$course_tax = $this->input->post('tax');
			
			$course_duration = $this->input->post('course_duration');
			$discount = $this->input->post('discount');
			$join_date = $this->input->post('join_date');
			$marksheet_sc = $marksheet_sc;
			$marksheet_sr_sc = $marksheet_sr_sc;
			$image = $image;
			$adhar = $adhar;
			$education_type = $this->input->post('education_type');
			$remark = $this->input->post('remark');
			$dd = date('Y-m-d');
      	
			$data = array(
    			  'enrollment ' => $enrollement,
    			  'aadhar_no' => $aadhar,
    			  'student_name' => $sname,
    			  
				  'father_name' => $fname,
				  'mname' => $mname,
				  'alt_mobile' => $alt_mobile,
    			  'caste' => $caste_name,
				  'gender' => $gender,
    			  'dob' => $dob,
    			  'address' => $address,
    			  'phone' => $mobile,
    			  'email' => $email,
 				  
    			  'course_code '=> $course_name,
    			  'course_fee  '=> $course_fee,
    			  'tax_amount' => $course_tax,
    			  'tax' => 18,
    			  'course_duration  '=> $course_duration,
    			  'course_discount' => $discount,
    			  'join_date' => $join_date,
				  'marksheet_sc' => $marksheet_sc,
				  'marksheet_sr_sc' => $marksheet_sr_sc,
				  'image' => $image,
				  'adhar' => $adhar,
				  'education_type' => $education_type,
    			  'remark' => $remark,
     			  'create_date' => $dd,
     			  'modify_date'=>$dd
			);
			
			
			$this->db->insert('student', $data);
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
	  public function edit_student() 
     {
		 
		 if(!empty($_FILES['marksheet_sc']['name'])){
				$path1 = $_FILES['marksheet_sc']['name'];
				$newName1 = $this->input->post('enrollement')."sc"."_".pathinfo($path1, PATHINFO_EXTENSION); 
			
                $config1['upload_path'] = './uploads/marksheet_10/';
                $config1['allowed_types'] = 'jpg|jpeg|png|gif|pdf|xlx|xlxs|odt|txt|doc|docx|csv';
                //$config['file_name'] = $_FILES['marksheet_sc']['name'];
				$config1['file_name'] = $newName1;
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config1);
                $this->upload->initialize($config1);
                
                if($this->upload->do_upload('marksheet_sc')){
				
                    $uploadData1 = $this->upload->data();
                    $marksheet_sc = $uploadData1['file_name'];
                }else{
				
                    $marksheet_sc = '';
                }
            }else{
				
                $marksheet_sc = '';
            }
			
			 if(!empty($_FILES['marksheet_sr_sc']['name'])){
				$path2 = $_FILES['marksheet_sr_sc']['name'];
				$newName2 = $this->input->post('enrollement')."_sr_sc"."_".pathinfo($path2, PATHINFO_EXTENSION); 
			
                $config2['upload_path'] = './uploads/marksheet_12/';
                $config2['allowed_types'] = 'jpg|jpeg|png|gif|pdf|xlx|xlxs|odt|txt|doc|docx|csv';
                //$config['file_name'] = $_FILES['marksheet_sc']['name'];
				$config2['file_name'] = $newName2;
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config2);
                $this->upload->initialize($config2);
                
                if($this->upload->do_upload('marksheet_sr_sc')){
				
                    $uploadData2 = $this->upload->data();
                    $marksheet_sr_sc = $uploadData2['file_name'];
                }else{
				
                    $marksheet_sr_sc = '';
                }
            }else{
				
                $marksheet_sr_sc = '';
            }
			
			
			if(!empty($_FILES['adhar']['name'])){
				$path3 = $_FILES['adhar']['name'];
				$newName3 = $this->input->post('enrollement')."_aadhar"."_".pathinfo($path3, PATHINFO_EXTENSION); 
			
                $config3['upload_path'] = './uploads/adhar_card/';
                $config3['allowed_types'] = 'jpg|jpeg|png|gif|pdf|xlx|xlxs|odt|txt|doc|docx|csv';
                //$config['file_name'] = $_FILES['marksheet_sc']['name'];
				$config3['file_name'] = $newName3;
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config3);
                $this->upload->initialize($config3);
                
                if($this->upload->do_upload('adhar')){
				
                    $uploadData3 = $this->upload->data();
                    $adhar = $uploadData3['file_name'];
                }else{
				
                    $adhar = '';
                }
            }else{
				
                $adhar = '';
            }
			
			 if(!empty($_FILES['image']['name'])){
				$path4 = $_FILES['image']['name'];
				$newName4 = $this->input->post('enrollement')."_img"."_".pathinfo($path4, PATHINFO_EXTENSION); 
			
                $config4['upload_path'] = './uploads/photo/';
                $config4['allowed_types'] = 'jpg|jpeg|png|gif|pdf|xlx|xlxs|odt|txt|doc|docx|csv';
                //$config['file_name'] = $_FILES['marksheet_sc']['name'];
				$config4['file_name'] = $newName4;
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config4);
                $this->upload->initialize($config4);
                
                if($this->upload->do_upload('image')){
				
                    $uploadData4 = $this->upload->data();
                    $image = $uploadData4['file_name'];
                }else{
				
                    $image = '';
                }
            }else{
				
                $image = '';
            }
			
		 
    		$enrollement = $this->input->post('enrollement');
			$aadhar = $this->input->post('aadhar');
			$sname = $this->input->post('sname');
						
			$fname = $this->input->post('fname');
			$mname = $this->input->post('mname');
			$caste_name = $this->input->post('caste_name');
			$gender = $this->input->post('gender');
			$dob = $this->input->post('dob');
			
			$address = $this->input->post('address');
			$mobile = $this->input->post('mobile');
			$alt_mobile = $this->input->post('alt_mobile');
			$email = $this->input->post('email');
			
			$course_name = $this->input->post('course_name');
			$course_fee = $this->input->post('course_fee');
			$course_tax = $this->input->post('tax');
			
			$course_duration = $this->input->post('course_duration');
			$discount = $this->input->post('discount');
			$join_date = $this->input->post('join_date');
			$marksheet_sc = $marksheet_sc;
			$marksheet_sr_sc = $marksheet_sr_sc;
			$image = $image;
			$adhar = $adhar;
			$education_type = $this->input->post('education_type');
			
			$remark = $this->input->post('remark');
      	$dd = date('Y-m-d');
      	$student_id = $this->input->post('student_id');
      	
   		$data = array(
    			  'enrollment ' => $enrollement,
    			  'aadhar_no' => $aadhar,
    			  'student_name' => $sname,
    			  
					'father_name' => $fname,
					'mname' => $mname,
				  'alt_mobile' => $alt_mobile,
    			  'caste' => $caste_name,
    			  'gender' => $gender,
				  'dob' => $dob,
    			  'address' => $address,
    			  'phone' => $mobile,
    			  'email' => $email,
 				  
    			  'course_code '=> $course_name,
    			  'course_fee  '=> $course_fee,
    			  'tax_amount' => $course_tax,
    			  'course_duration  '=> $course_duration,
    			  'course_discount' => $discount,
    			  'marksheet_sc' => $marksheet_sc,
				  'marksheet_sr_sc' => $marksheet_sr_sc,
				  'image' => $image,
				  'adhar' => $adhar,
				  'education_type' => $education_type,
				  'join_date' => $join_date,
    			  'remark' => $remark,
     			  'modify_date'=>$dd
			);

			$this->db->where('id', $student_id);
			$this->db->update('student', $data);
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
 
  public function all_students()
	{
		$result=array();
		$this->db->order_by("id", "DESC");
		$query = $this->db->get('student');
		foreach ($query->result_array() as $row)
		{
        $result[]=$row;
		}
		return $result;
	}
	public function view_student($cid)
	{
		$result=array();
		$query = $this->db->get_where('student', array('id' => $cid));
		//echo $this->db->last_query(); exit;
		foreach ($query->result_array() as $row)
		{
       	return $row;
		}	
	}
	
	public function ajax_load_course($coure_code)
	{
		$result=array();
		$query = $this->db->get_where('courses', array('course_code' => $coure_code));
		foreach ($query->result_array() as $row)
		{
			return $row;
		}
		return $result;
	}
	
	public function view_student_by_enroll($enrollement)
	{
		$result=array();
		$query = $this->db->get_where('student', array('enrollment' => $enrollement));
		//echo $this->db->last_query(); exit;
		foreach ($query->result_array() as $row)
		{
       	return $row;
		}	
	}
	
	public function view_student_by_id($id)
	{
		$result=array();
		$query = $this->db->get_where('student', array('id' => $id));
		//echo $this->db->last_query(); exit;
		foreach ($query->result_array() as $row)
		{
       	return $row;
		}	
	}
	
	
	public function student_fee($enrollement)
	{
		$result=array();
		$this->db->order_by("id", "DESC");
		$query = $this->db->get_where('fee', array('enrollment' => $enrollement));
		foreach ($query->result_array() as $row)
		{
        $result[]=$row;
		}
		return $result;
	}
	public function amount_deposited($enrollement)
	{
		$amount_deposit = 0;
		$query = $this->db->get_where('fee', array('enrollment' => $enrollement));
		foreach ($query->result_array() as $row)
		{
        $result[]=$row;
        $amount_deposit = $amount_deposit + $row['amount'];
		}
		return $amount_deposit;
	}
	
	public function add_fee()
	{
		$enrollment = $this->input->post('enrollement');
		$amount_add = $this->input->post('amount_add');
		$remark = $this->input->post('remark');
		$due_date = $this->input->post('due_date');
      	$dd = date('Y-m-d');
		$tid = time();
      	
   		$data = array(
    			  'enrollment' => $enrollment,
    			  'amount' => $amount_add,
    			  'remark' => $remark,
				  'tid' => $tid,
    			  'due_date' => $due_date,
    			  'deposite_date' => $dd
			);

		$this->db->insert('fee', $data);
		echo $this->db->last_query(); //exit; 
		if($this->db->trans_status()==true) 
		{
			return $this->db->insert_id();;
		}
		else 
		{
			return false;
		}	
	}
	
	public function update_fee()
	{
		$enrollment = $this->input->post('enrollement');
		$fee_id = $this->input->post('fee_id');
		$amount_add = $this->input->post('amount_add');
		$remark = $this->input->post('remark');
		$due_date = $this->input->post('due_date');
      	$dd = date('Y-m-d');
      	
   		$data = array(
    			  'amount' => $amount_add,
    			  'remark' => $remark,
    			  'due_date' => $due_date,
    			  'deposite_date' => $dd
			);

		$this->db->where('id', $fee_id);
		$this->db->update('fee', $data);
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
	public function fee_receipt($receipt_id)
	{
		$result=array();
		$query = $this->db->get_where('fee', array('id' => $receipt_id));
		//echo $this->db->last_query(); exit;
		foreach ($query->result_array() as $row)
		{
			return $row;
		}	
	}

}