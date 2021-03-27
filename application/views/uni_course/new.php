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
                           Univeristy New Course
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
                                      
                                    <?php echo form_open('universitycourse/new_course');?>

                                        <div class="form-group">
                                           <label>University</label>
                                           <select class="form-control" name="university">
                                            <?php 
                                            foreach ($university as $uni) { ?>
                                               <option value="<?php echo $uni['id']; ?>"><?php echo $uni['name']; ?></option>
                                            <?php } ?>
                                           </select>
                                           
                                        </div>
                                        <div class="form-group">
                                            <label>Course Code</label>
                                            <input class="form-control" name="course_code" value="<?php echo set_value('course_code'); ?>">
                                            
                                        </div>
                                        <div class="form-group">
                                           <label>Course Name</label>
                                            <input class="form-control" name="course_name" value="<?php echo set_value('course_name'); ?>">
                                            
                                        </div>

                                        <div class="form-group">
                                           <label>Course Type</label>
                                           <select class="form-control" name="type">
                                               <option value="Semester">Semester</option>
                                               <option value="Year">Year</option>
                                           </select>
                                            
                                        </div>

                                        <div class="form-group">
                                           <label>Total (Year/Semester)</label>
                                           <select class="form-control" name="total">
                                            <?php for($i=1; $i<=10; $i++) { ?>
                                               <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                           <?php } ?>
                                           </select>
                                            
                                        </div>

                                                                               
                                        
                                        <button type="submit" class="btn btn-default" name="new_course" value="change password">Add Course</button>
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
