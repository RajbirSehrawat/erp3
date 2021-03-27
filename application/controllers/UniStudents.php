<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UniStudents extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('UniStudent_model');
        $this->load->model('UniCourse_model');
        $this->load->model('SemYear_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['all'] = $this->UniStudent_model->all();
        $this->load->view('uni_student/list', $data);
    }

    public function create()
    {

        if ($this->input->post('submit')) {
        } else {
            $this->load->view('uni_student/add-edit');
        }
    }

    public function edit($id = '')
    {
        if ($this->input->post('submit')) {
        } else {
            $data['data'] = $this->UniStudent_model->find($id);
            $this->load->view('uni_student/add-edit', $data);
        }
    }

    public function chk_code($id = 0, $code = "")
    {
        $result = $this->UniStudent_model->chk_code($id, $code);
        if ($result) {
            return true;
        } else {
            $this->form_validation->set_message('chk_name', 'Enrollment number already exists.');
            return false;
        }
    }

    public function getCourses($id = 0)
    {
        $results = $this->UniCourse_model->findByUniversity($id);
        $option = "<option value=''>Select Course</option>";
        foreach ($results as $key => $result) {
            $option .= "<option value='" . $result["id"] . "'>" . $result["course_name"] . "</option>";
        }

        echo json_encode(["success" => 1, "html" => $option]);
    }

    public function getDuration($id = 0)
    {
        $course = $this->UniCourse_model->find($id);
        $type = $course["type"];
        $results = $this->SemYear_model->findByCourse($id);
        $option = "<option value=''>Select Course</option>";
        foreach ($results as $key => $result) {
            $option .= "<option value='" . $result["id"] . "'>" . $result["sem_year"] . " " . $type . "</option>";
        }

        echo json_encode(["success" => 1, "html" => $option]);
    }

    public function getFee($id = 0)
    {
        $result = $this->SemYear_model->findFeeByID($id); 
        $fee = "";
        if(!empty($result)){
            $fee = $result["fee"];
        }
        echo json_encode(["success" => 1, "fee" => $fee]);  
    }
}
