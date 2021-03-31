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
                    Edit Student : <?= $data["sname"] ?>
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
                            <?php echo form_open('unistudents/edit', 'enctype=multipart/form-data'); ?>
                            <input type="hidden" name="id" value="<?= $data["id"]; ?>">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Enrollment Number</label>
                                    <input class="form-control" disabled name="enrollement" value="<?= $data["enrollement"] ?>">
                                    <?php if (form_error('enrollement')) {
                                        echo form_error('enrollement', '<p class="text-danger">', '</p>');
                                    } ?>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Aadhar Number</label>
                                    <input class="form-control" name="aadhar" value="<?php echo $data["aadhar"]; ?>">
                                    <?php if (form_error('aadhar')) {
                                        echo form_error('aadhar', '<p class="text-danger">', '</p>');
                                    } ?>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Name (As per 10th)</label>
                                    <input class="form-control" name="sname" value="<?php echo $data["sname"]; ?>">
                                    <?php if (form_error('sname')) {
                                        echo form_error('sname', '<p class="text-danger">', '</p>');
                                    } ?>
                                </div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Father Name (As per 10th)</label>
                                    <input class="form-control" name="fname" value="<?php echo $data["fname"]; ?>">
                                    <?php if (form_error('fname')) {
                                        echo form_error('fname', '<p class="text-danger">', '</p>');
                                    } ?>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Mother Name (As per 10th)</label>
                                    <input class="form-control" name="mname" value="<?php echo $data["mname"]; ?>">
                                    <?php if (form_error('mname')) {
                                        echo form_error('mname', '<p class="text-danger">', '</p>');
                                    } ?>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Dob (as per 10th)</label>
                                    <input class="form-control" id="datepicker" readonly="" name="dob" value="<?php echo $data["dob"]; ?>">
                                    <?php if (form_error('dob')) {
                                        echo form_error('dob', '<p class="text-danger">', '</p>');
                                    } ?>
                                </div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Mobile</label>
                                    <input class="form-control" name="mobile" value="<?php echo $data["mobile"]; ?>">
                                    <?php if (form_error('mobile')) {
                                        echo form_error('mobile', '<p class="text-danger">', '</p>');
                                    } ?>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Whatsapp No.</label>
                                    <input class="form-control" name="wmobile" value="<?php echo $data["wmobile"]; ?>">
                                    <?php if (form_error('wmobile')) {
                                        echo form_error('wmobile', '<p class="text-danger">', '</p>');
                                    } ?>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Address</label>
                                    <input class="form-control" name="address" value="<?php echo $data["address"]; ?>">
                                    <?php if (form_error('address')) {
                                        echo form_error('address', '<p class="text-danger">', '</p>');
                                    } ?>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Pincode</label>
                                    <input class="form-control" name="pincode" value="<?php echo $data["pincode"]; ?>">
                                    <?php if (form_error('pincode')) {
                                        echo form_error('pincode', '<p class="text-danger">', '</p>');
                                    } ?>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>District</label>
                                    <input class="form-control" name="district" value="<?php echo $data["district"]; ?>">
                                    <?php if (form_error('district')) {
                                        echo form_error('district', '<p class="text-danger">', '</p>');
                                    } ?>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>State</label>
                                    <input class="form-control" name="state" value="<?php echo $data["state"]; ?>">
                                    <?php if (form_error('state')) {
                                        echo form_error('state', '<p class="text-danger">', '</p>');
                                    } ?>
                                </div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>University</label>
                                    <input class="form-control" disabled name="state" value="<?php echo $data["university_name"]; ?>">
                                    <?php if (form_error('university_id')) {
                                        echo form_error('university_id', '<p class="text-danger">', '</p>');
                                    } ?>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Course</label>
                                    <input class="form-control" disabled name="state" value="<?php echo $data["course_name"]; ?>">
                                    <?php if (form_error('course_id')) {
                                        echo form_error('course_id', '<p class="text-danger">', '</p>');
                                    } ?>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Sem/Yearly</label>
                                    <input class="form-control" disabled name="state" value="<?php echo $data["course_type"]; ?>">
                                    <?php if (form_error('sem_yearly')) {
                                        echo form_error('sem_yearly', '<p class="text-danger">', '</p>');
                                    } ?>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Fee</label>
                                    <input class="form-control" id="fee" disabled name="fee" value="<?php echo $data["fee"]; ?>">
                                    <?php if (form_error('fee')) {
                                        echo form_error('fee', '<p class="text-danger">', '</p>');
                                    } ?>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Discount (Rupees)</label>
                                    <input class="form-control" disabled name="discount" value="<?php echo $data["discount"]; ?>">
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
                                        <option value="1" <?php echo ($data["education_type"] == 1) ? "selected" : ""; ?>> Regular</option>
                                        <option value="2" <?php echo ($data["education_type"] == 2) ? "selected" : ""; ?>> Distance</option>
                                    </select>
                                    <?php if (form_error('education_type')) {
                                        echo form_error('education_type', '<p class="text-danger">', '</p>');
                                    } ?>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Remark</label>
                                    <input class="form-control" name="remark" value="<?php echo $data["remark"]; ?>">
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