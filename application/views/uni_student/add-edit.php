<?php
$this->load->view('common/header');
$this->load->view('common/leftmenu');
?>
<style>
    .mb-1{
        margin-bottom: 1rem !important;
        padding: 2px 9px;
    }
</style>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            &nbsp;
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    New Student
                    <a href="<?php echo base_url(); ?>unistudents" class="btn btn-sm btn-primary pull-right mb-1">List Student</a>
                </div>
                <div class="col-md-8"> <br />
                    <?php if ($this->session->flashdata('success_msg')) { ?>
                        <div class="alert alert-success"> <?php echo $this->session->flashdata('success_msg');  ?></div>
                    <?php }
                    if ($this->session->flashdata('error_msg_msg')) { ?>
                        <div class="alert alert-danger"> <?php echo $this->session->flashdata('error_msg_msg'); ?></div>
                    <?php }  ?>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <?php echo form_open('unistudents/create', 'enctype=multipart/form-data'); ?>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Enrollment Number</label>
                                    <input class="form-control" readonly="" name="enrollement" value="<?php echo 'ECR' . date('Ymdhis'); ?>">
                                    <?php if (form_error('enrollement')) {
                                        echo form_error('enrollement', '<p class="text-danger">', '</p>');
                                    } ?>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Aadhar Number</label>
                                    <input class="form-control" name="aadhar" value="<?php echo set_value('aadhar'); ?>">
                                    <?php if (form_error('aadhar')) {
                                        echo form_error('aadhar', '<p class="text-danger">', '</p>');
                                    } ?>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Name (As per 10th)</label>
                                    <input class="form-control" name="sname" value="<?php echo set_value('sname'); ?>">
                                    <?php if (form_error('sname')) {
                                        echo form_error('sname', '<p class="text-danger">', '</p>');
                                    } ?>
                                </div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Father Name (As per 10th)</label>
                                    <input class="form-control" name="fname" value="<?php echo set_value('fname'); ?>">
                                    <?php if (form_error('fname')) {
                                        echo form_error('fname', '<p class="text-danger">', '</p>');
                                    } ?>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Mother Name (As per 10th)</label>
                                    <input class="form-control" name="mname" value="<?php echo set_value('mname'); ?>">
                                    <?php if (form_error('mname')) {
                                        echo form_error('mname', '<p class="text-danger">', '</p>');
                                    } ?>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Dob (as per 10th)</label>
                                    <input class="form-control" id="datepicker" readonly="" name="dob" value="<?php echo set_value('dob'); ?>">
                                    <?php if (form_error('dob')) {
                                        echo form_error('dob', '<p class="text-danger">', '</p>');
                                    } ?>
                                </div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Mobile</label>
                                    <input class="form-control" name="mobile" value="<?php echo set_value('mobile'); ?>">
                                    <?php if (form_error('mobile')) {
                                        echo form_error('mobile', '<p class="text-danger">', '</p>');
                                    } ?>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Whatsapp No.</label>
                                    <input class="form-control" name="wmobile" value="<?php echo set_value('wmobile'); ?>">
                                    <?php if (form_error('wmobile')) {
                                        echo form_error('wmobile', '<p class="text-danger">', '</p>');
                                    } ?>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Address</label>
                                    <input class="form-control" name="address" value="<?php echo set_value('address'); ?>">
                                    <?php if (form_error('address')) {
                                        echo form_error('address', '<p class="text-danger">', '</p>');
                                    } ?>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Pincode</label>
                                    <input class="form-control" name="pincode" value="<?php echo set_value('pincode'); ?>">
                                    <?php if (form_error('pincode')) {
                                        echo form_error('pincode', '<p class="text-danger">', '</p>');
                                    } ?>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>District</label>
                                    <input class="form-control" name="district" value="<?php echo set_value('district'); ?>">
                                    <?php if (form_error('district')) {
                                        echo form_error('district', '<p class="text-danger">', '</p>');
                                    } ?>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>State</label>
                                    <input class="form-control" name="state" value="<?php echo set_value('state'); ?>">
                                    <?php if (form_error('state')) {
                                        echo form_error('state', '<p class="text-danger">', '</p>');
                                    } ?>
                                </div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>University</label>
                                    <select name="university_id" class="form-control" id='university_id' onchange="getCourses(this.value);">
                                        <option value=""> Select University</option>
                                        <?php
                                        $ci = &get_instance();
                                        $ci->load->model('University_model');
                                        $all = $ci->University_model->all();
                                        foreach ($all as $universityRow) {
                                            echo "<option value='" . $universityRow['id'] . "' " . set_select('university_id', $universityRow['id']) . ">" . $universityRow['name'] . "</option>";
                                        }
                                        ?>
                                    </select>
                                    <?php if (form_error('university_id')) {
                                        echo form_error('university_id', '<p class="text-danger">', '</p>');
                                    } ?>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Course</label>
                                    <select name="course_id" class="form-control" id='course_id' onchange="getDuration(this.value);">
                                        <option value=""> Select Course</option>
                                    </select>
                                    <?php if (form_error('course_id')) {
                                        echo form_error('course_id', '<p class="text-danger">', '</p>');
                                    } ?>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Sem/Yearly</label>
                                    <select name="sem_yearly" class="form-control" id='sem_yearly' onchange="getFee(this.value);">
                                        <option value=""> Select Sem/Yearly</option>
                                    </select>
                                    <?php if (form_error('sem_yearly')) {
                                        echo form_error('sem_yearly', '<p class="text-danger">', '</p>');
                                    } ?>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Fee</label>
                                    <input class="form-control" id="fee" readonly="" name="fee" value="<?php echo set_value('fee'); ?>">
                                    <?php if (form_error('fee')) {
                                        echo form_error('fee', '<p class="text-danger">', '</p>');
                                    } ?>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Discount (Rupees)</label>
                                    <input class="form-control" name="discount" value="<?php echo set_value('discount'); ?>">
                                    <?php if (form_error('discount')) {
                                        echo form_error('discount', '<p class="text-danger">', '</p>');
                                    } ?>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Education Type</label>
                                    <select name="education_type" class="form-control">
                                        <option value=""> Select Caste</option>
                                        <option value="1" <?php echo set_select('education_type', 1); ?>> Regular</option>
                                        <option value="2" <?php echo set_select('education_type', 2); ?>> Distance</option>
                                    </select>
                                    <?php if (form_error('education_type')) {
                                        echo form_error('education_type', '<p class="text-danger">', '</p>');
                                    } ?>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Remark</label>
                                    <input class="form-control" name="remark" value="<?php echo set_value('remark'); ?>">
                                    <?php if (form_error('remark')) {
                                        echo form_error('remark', '<p class="text-danger">', '</p>');
                                    } ?>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-success" name="submit" value="sbumit">Submit</button>
                                <button type="reset" class="btn btn-danger">Reset Button</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('common/footer'); ?>