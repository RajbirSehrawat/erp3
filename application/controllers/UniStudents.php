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
            $this->form_validation->set_rules('enrollement', 'Enrollement Number', 'trim|required');
            $this->form_validation->set_rules('aadhar', 'Aadhar Number', 'trim');
            $this->form_validation->set_rules('sname', 'Student Name', 'trim|required');

            $this->form_validation->set_rules('fname', 'Father Name', 'trim|required');
            $this->form_validation->set_rules('mname', 'Mother Name', 'trim');
            $this->form_validation->set_rules('dob', 'Date of Birth', 'trim|required');

            $this->form_validation->set_rules('address', 'Address', 'trim|required');
            $this->form_validation->set_rules('mobile', 'Mobile', 'trim|required|is_natural_no_zero|exact_length[10]');
            $this->form_validation->set_rules('wmobile', 'Whatsapp Mobile', 'trim|is_natural_no_zero|exact_length[10]');

            $this->form_validation->set_rules('pincode', 'Pincode', 'trim|required|is_natural_no_zero');
            $this->form_validation->set_rules('district', 'District', 'trim|required');
            $this->form_validation->set_rules('state', 'State', 'trim|required');

            $this->form_validation->set_rules('university_id', 'University', 'trim|required|is_natural_no_zero');
            $this->form_validation->set_rules('course_id', 'Course', 'trim|required|is_natural_no_zero');
            $this->form_validation->set_rules('sem_yearly', 'Sem / Yearly', 'trim|required|is_natural_no_zero');

            $this->form_validation->set_rules('fee', 'Fee', 'trim|required|is_natural');
            $this->form_validation->set_rules('discount', 'Discount', 'trim|required|is_natural|less_than['.$this->input->post('fee').']');

            $this->form_validation->set_rules('education_type', 'Education Type', 'trim|required');
            $this->form_validation->set_rules('remark', 'Remark', 'trim');

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('uni_student/add');
            } else {
                $result = $this->UniStudent_model->create($this->input->post());
                if ($result == false) {
                    $this->session->set_flashdata('error_msg', 'Student not added, Please try again');
                } else {
                    $this->session->set_flashdata('success_msg', 'Student added successfully');
                }
                redirect('unistudents/create');
            }
        } else {
            $this->load->view('uni_student/add');
        }
    }

    public function edit($enrollment = '')
    {
        
        if ($this->input->post('submit')) {
            
            $this->form_validation->set_rules('aadhar', 'Aadhar Number', 'trim');
            $this->form_validation->set_rules('sname', 'Student Name', 'trim|required');

            $this->form_validation->set_rules('fname', 'Father Name', 'trim|required');
            $this->form_validation->set_rules('mname', 'Mother Name', 'trim');
            $this->form_validation->set_rules('dob', 'Date of Birth', 'trim|required');

            $this->form_validation->set_rules('address', 'Address', 'trim|required');
            $this->form_validation->set_rules('mobile', 'Mobile', 'trim|required|is_natural_no_zero|exact_length[10]');
            $this->form_validation->set_rules('wmobile', 'Whatsapp Mobile', 'trim|is_natural_no_zero|exact_length[10]');

            $this->form_validation->set_rules('pincode', 'Pincode', 'trim|required|is_natural_no_zero');
            $this->form_validation->set_rules('district', 'District', 'trim|required');
            $this->form_validation->set_rules('state', 'State', 'trim|required');

            $this->form_validation->set_rules('remark', 'Remark', 'trim');

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('uni_student/edit');
            } else {
                $result = $this->UniStudent_model->update($this->input->post(), $enrollment);
                if ($result) {
                    $this->session->set_flashdata('success_msg', 'Student updated successfully');
                } else {
                    $this->session->set_flashdata('error_msg', 'Student updated, Please try again');
                }
                redirect('unistudents');
            }
        } else {
            $dataObject = $this->UniStudent_model->findByEnroll($enrollment);
            if (!empty($dataObject)) {
                $data['data'] = (array) $dataObject;
            } else {
                redirect('unistudents');
            }
            $this->load->view('uni_student/edit', $data);
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

    function check_discount($discount=0, $fee=0) 
    { 
        if ($discount >= $fee) { 
            $this->form_validation->set_message('discount', 'The discount must be less than total fee.'); 
            return false;
        }
        else { 
            return true; 
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
            $option .= "<option value='" . $result["sem_year"] . "'>" . $result["sem_year"] . " " . $type . "</option>";
        }

        echo json_encode(["success" => 1, "html" => $option]);
    }

    public function getUniFee($course_id = 0, $sem_year = 0)
    {
        $result = $this->SemYear_model->findFeeByID($course_id, $sem_year);
        $fee = "";
        if (!empty($result)) {
            $fee = $result["fee"];
        }
        echo json_encode(["success" => 1, "fee" => $fee]);
    }

    public function promote($enrollment='')
    {
        $dataObject = $this->UniStudent_model->findByEnroll($enrollment);
            if (!empty($dataObject)) {
                $data['uni_student'] = (array) $dataObject;
                $student_id = $data['uni_student']['id'];
                $university = $data['uni_student']['university_id'];
                $course = $data['uni_student']['course_id'];
                $current_sem_year = $data['uni_student']['sem_yearly'];
                $next_sem_year = $current_sem_year + 1;
                $next_class = $this->SemYear_model->findFeeByID($course, $next_sem_year);
                // print_r($next_class);

                $data['next_class'] = $next_class;
            } else {
                $this->session->set_flashdata('error_msg', 'No record were found, Please try again');
                redirect('unistudents');
            }

        
        if ($this->input->post('submit')) {
            $this->form_validation->set_rules('enrollement', 'Enrollement Number', 'trim|required');   
            $this->form_validation->set_rules('course_fee', 'Fee', 'trim|required|is_natural');
            $this->form_validation->set_rules('discount', 'Discount', 'trim|required|is_natural|less_than['.$this->input->post('course_fee').']');
            $this->form_validation->set_rules('remark', 'Remark', 'trim|required');

            if ($this->form_validation->run()) {
                $discount = $this->input->post('discount');
                $remarks = $this->input->post('remark');
                $next_fees = $next_class['fee'];
                $result = $this->UniStudent_model->promote($student_id, $university, $course, $next_sem_year,$next_fees, $discount, $remarks);
                if ($result == false) {
                    $this->session->set_flashdata('error_msg', 'Student not promoted, Please try again');
                } else {
                    $this->session->set_flashdata('success_msg', 'Student promoted successfully');
                }
                redirect('unistudents/promote/'. $enrollment);
               
            } else {
                $this->load->view('uni_student/promote', $data);
            }
        } else {
            $this->load->view('uni_student/promote', $data);
        }
    }
}
