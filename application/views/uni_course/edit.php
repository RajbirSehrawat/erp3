<?php 
	$this->load->view('common/header');
	$this->load->view('common/leftmenu');
?>       

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                  &nbsp;
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           University Course Edit
                            <span style="float: right; font-weight: bold;">
                             <a href="<?php echo base_url();?>universitycourse">University Courses</a>
                            </span>
                        </div>
             <div class="col-md-8"> <br/>          
           <?php if($this->session->flashdata('success_msg')) { ?>
				<div class="alert alert-success"> <?php echo $this->session->flashdata('success_msg');  ?></div>
				<?php } if($this->session->flashdata('error_msg_msg')) { ?>
					<div class="alert alert-danger" > <?php echo $this->session->flashdata('error_msg_msg'); ?></div>
				<?php }  ?>
				</div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <?php if(validation_errors()) { ?>
                                        <div class="alert alert-danger">
                                            <?php echo validation_errors(); ?>
                                        </div>
                                    <?php } ?>

                                      <?php echo form_open('universitycourse/edit');?>
                                        <div class="form-group">
                                           <label>University</label>
                                           <select class="form-control" name="university">
                                        <?php foreach ($university as $uni) { ?>
                                        <option value="<?php echo $uni['id']; ?>" 
                                            <?php if($course_data['university_id'] == $uni['id']) {echo 'selected';}?>>
                                                    <?php echo $uni['name']; ?>
                                        </option>
                                        <?php } ?>
                                           </select>
                                           
                                        </div>
                                        <div class="form-group">
                                            <label>Course Code</label>
                                            <input type="hidden" name="course_id" value="<?php echo $course_data['id'];?>" />
                                            <input class="form-control" name="course_code" value="<?php  if(set_value('course_code')) { echo set_value('course_code'); } else { echo $course_data['course_code'];} ?>">
                                        </div>
                                        <div class="form-group">
                                           <label>Course Name</label>
                                            <input class="form-control" name="course_name" value="<?php  if(set_value('course_name')) { echo set_value('course_name'); } else { echo $course_data['course_name'];} ?>">
                                           
                                        </div>
                                        <div class="form-group">
                                           <label>Course Type</label>
                                           <select class="form-control" name="type">
                                               <option value="Semester" <?php if($course_data['type'] == 'Semester') {echo 'selected';}?>>Semester</option>
                                               <option value="Year" <?php if($course_data['type'] == 'Year') {echo 'selected';}?>>Year</option>
                                           </select>
                                            
                                        </div>
                                        
                                          
                                        
                                        <button type="submit" class="btn btn-default" name="edit_course" value="change password">Update Course</button>
                                        <button type="reset" class="btn btn-default">Reset Button</button>
                                    </form>
                                </div>
                               
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
 <?php $this->load->view('common/footer');?>
