<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UniStudent_model extends CI_Model
{
    private $table = "uni_students";
    private $tableChild = "uni_student_admission";
    public function __construct()
    {
        parent::__construct();
    }

    public function create($data)
    {

        $insertOrUpdateData = [
            "enrollement" => $data["enrollement"],
            "aadhar" => $data["aadhar"],
            "sname" => $data["sname"],
            "fname" => $data["fname"],
            "mname" => $data["mname"],
            "dob" => $data["dob"],
            "mobile" => $data["mobile"],
            "wmobile" => $data["wmobile"],
            "address" => $data["address"],
            "pincode" => $data["pincode"],
            "district" => $data["district"],
            "state" => $data["state"],
            "university_id" => $data["university_id"],
            "course_id" => $data["course_id"],
            "sem_yearly" => $data["sem_yearly"],
            "fee" => $data["fee"],
            "discount" => $data["discount"],
            "education_type" => $data["education_type"],
            "uni_enrollment" => $data["uni_enrollment"],
            "session_start" => $data["session_start"],
            "admission_status" => $data["admission_status"],
            "remark" => $data["remark"]
        ];

        $this->db->insert($this->table, $insertOrUpdateData);

        /* Insert Fee */
        $childData = [
            "student_id" => $this->db->insert_id(),
            "university_id" => $data["university_id"],
            "course_id" => $data["course_id"],
            "sem_yearly" => $data["sem_yearly"],
            "fee" => $data["fee"],
            "discount" => $data["discount"],
            "is_current" => 1,
            "created_at" => date("Y-m-d H:i:s")
        ];

        $this->db->insert($this->tableChild, $childData);

        if ($this->db->trans_status() == true) {
            return true;
        }
        return false;
    }

    public function update($data, $enroll)
    {
        $insertOrUpdateData = [
            "aadhar" => $data["aadhar"],
            "sname" => $data["sname"],
            "fname" => $data["fname"],
            "mname" => $data["mname"],
            "dob" => $data["dob"],
            "mobile" => $data["mobile"],
            "wmobile" => $data["wmobile"],
            "address" => $data["address"],
            "pincode" => $data["pincode"],
            "district" => $data["district"],
            "state" => $data["state"],
            "uni_enrollment" => $data["uni_enrollment"],
            "session_start" => $data["session_start"],
            "admission_status" => $data["admission_status"],
            "remark" => $data["remark"]
        ];

        $this->db->where('enrollement', $enroll);
        $this->db->update($this->table, $insertOrUpdateData);
        // echo $this->db->last_query(); exit;
        if ($this->db->trans_status()) {
            return true;
        }
        return false;

    }


    public function all()
    {
        $this->db->order_by("uni_students.id", "DESC");
        $this->db->select('uni_students.*, university.name AS university_name, university_course.course_name, university_course.type AS course_type');
        $this->db->from('uni_students');
        $this->db->join('university', 'uni_students.university_id = university.id');
        $this->db->join('university_course', 'uni_students.course_id = university_course.id');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function findByEnroll($enrollment)
    {
        $this->db->select('uni_students.*, university.name AS university_name, university_course.course_name, university_course.type AS course_type');
        $this->db->from('uni_students');
        $this->db->join('university', 'uni_students.university_id = university.id');
        $this->db->join('university_course', 'uni_students.course_id = university_course.id');
        $this->db->join('university_course_fees', 'uni_students.sem_yearly = university_course_fees.sem_year');
        $this->db->where('uni_students.enrollement', $enrollment);
        $query = $this->db->get();
        // echo $this->db->last_query(); 
        return $query->row();
    }

    public function promote($student_id, $university, $course, $next_sem_year,$next_fees, $discount, $remarks)
    {

        try {
            $this->db->trans_begin();
            $student = [
                "sem_yearly" => $next_sem_year,
                "fee" => $next_fees,
                "discount" => $discount,
                "remark" => $remarks,
                'updated_at'=> date('Y-m-d H:i:s')
            ];
    
            $this->db->where('id', $student_id);
            $this->db->update($this->table, $student);
    
            $data = ["is_current" => 0];
            $this->db->where('student_id', $student_id);
            $this->db->update($this->tableChild, $data);
    
            $childData = [
                "student_id" => $student_id,
                "university_id" => $university,
                "course_id" => $course,
                "sem_yearly" => $next_sem_year,
                "fee" => $next_fees,
                "discount" => $discount,
                "is_current" => 1,
                "created_at" => date("Y-m-d H:i:s")
            ];
            
            $array = [
                "student_id" => $student_id,
                "university_id" => $university,
                "course_id" => $course,
                "sem_yearly" => $next_sem_year
            ];

            $this->db->from($this->tableChild);
            $this->db->where($array);
            $query = $this->db->get();

            if($query->num_rows() == 0){
                $this->db->insert($this->tableChild, $childData);
            } else {
                $this->db->where($array);
                $this->db->update($this->tableChild, $childData);
            }

           
            
            $this->db->trans_commit();

            if ($this->db->trans_status()) {
                return true;
            }
            return false;
        }
        catch(Exception $e) {
            $this->db->trans_rollback();
            return false;
          }   
    }

    public function studentSemYears($student_id=0)
	{
		$this->db->order_by('sem_yearly');
		$query = $this->db->get_where('uni_student_admission', array('student_id'=> $student_id));
        return $query->result_array();

	}

    public function getAdmissionFee($admission_id)
	{
		$query = $this->db->get_where('uni_student_admission', array('id'=> $admission_id));
        return $query->row();
	}

    public function getDepositedFee($admission_id)
	{
        $this->db->select("SUM(amount) AS total_deposited");
		$query = $this->db->get_where('uni_admission_fees', array('admission_id'=> $admission_id));
        $result= $query->row();
        $total_deposited = $result->total_deposited;
        if($total_deposited){
            return $total_deposited;
        } 

        return 0;
	}

    public function fee_payment($admission_id, $amount, $remarks, $due_date, $payment_mode)
    {
        try{
            $data = [
                "admission_id" => $admission_id,
                "amount" => $amount,
                "remarks" => $remarks,
                'payment_mode'=> $payment_mode,
                "created_at" => date("Y-m-d H:i:s")
            ];

            $this->db->insert('uni_admission_fees', $data);
            // echo $this->db->last_query(); exit;
            if ($this->db->trans_status()) {
                $this->db->where('id', $admission_id);
		        $this->db->update('uni_student_admission', ["next_due_date"=> $due_date]);
                return true;
            }
            return false;  
        }
        catch(Exception $e) {
            return false;
        } 
    }  

    public function get_fee_payments($student_id)
    {
        $this->db->order_by("uni_admission_fees.id", "DESC");
        $this->db->select('uni_admission_fees.*, uni_student_admission.sem_yearly');
        $this->db->from('uni_student_admission');
        $this->db->join('uni_admission_fees', 'uni_student_admission.id = uni_admission_fees.admission_id');
        $this->db->where('uni_student_admission.student_id', $student_id);
        $query = $this->db->get();
        // echo $this->db->last_query(); exit;
        return $query->result_array();
    }

    public function get_payment($payment_id)
    {
        $this->db->select('uni_admission_fees.*, uni_student_admission.sem_yearly');
        $this->db->from('uni_admission_fees');
        $this->db->join('uni_student_admission', 'uni_student_admission.id = uni_admission_fees.admission_id');
        $this->db->where('uni_admission_fees.id', $payment_id);
        $query = $this->db->get();
        return (array) $query->row();
    }

}
