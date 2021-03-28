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

    public function createOrUpdate($data = array())
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
            "remark" => $data["remark"]
        ];

        if (!empty($data["id"])) {
            $this->db->where('id', $data["id"]);
            $this->db->update($this->table, $insertOrUpdateData);
        } else {
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
        }

        if ($this->db->trans_status() == true) {
            return true;
        }
        return false;
    }


    public function all()
    {
    }

    public function find($id)
    {
    }

    public function chk_code($id, $code)
    {
    }
}
