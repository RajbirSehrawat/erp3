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
                            Promote Student
                        </div>
             <div class="col-md-12"> <br/>          
           <?php if($this->session->flashdata('success_msg')) { ?>
				<div class="alert alert-success"> <?php echo $this->session->flashdata('success_msg');  ?></div>
				<?php } 
                if($this->session->flashdata('error_msg')) { ?>
					<div class="alert alert-danger" > <?php echo $this->session->flashdata('error_msg'); ?></div>
				<?php }  ?>
				</div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <?php echo form_open('student/promote/');?>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Enrollment Number</label>
                                            <input class="form-control" readonly="" name="enrollement" value="<?php  if(set_value('enrollement')) { echo set_value('enrollement'); } ?>">
                                            <?php if(form_error('enrollement')) { 
                                             	echo form_error('enrollement','<p class="text-danger">','</p>'); 
                                            } ?>
                                        </div>
                                    </div>
                                   
                                    <div class="col-md-2">
                                        <div class="form-group">
                                           <label>&nbsp;</label>
                                            <button type="submit" class="form-control btn btn-success" name="edit_student" value="sbumit">Check Info</button>
                                        </div>
                                    </div>
                                        
                                    <div style="clear:both;"></div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Student Name :</label>
                                            Rajbir Singh
                                        </div>
                                        </div>
                                        
                                        <div class="col-md-3">
                                         <div class="form-group">
                                            <label>Father Name :</label>
                                            Bijender Singh
                                         </div>
                                         </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                               <label>Mobile :</label>
                                               9991141485
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                               <label>Course :</label>
                                               B.Com
                                            </div>
                                        </div>
                                    <div style="clear:both;"></div>
                                    <hr>
                                     <div class="col-md-4">
                                           <div class="form-group">
                                             <label>Course Name</label>
                                            <select name="course_name" class="form-control" id='course_name' onchange="load_more(this.value);" >
                                            <option value=""> Select Course</option>
                                            <?php  
                                                  $ci =&get_instance();
                                                  $ci->load->model('Course_model');
                                               $all_course = $ci->Course_model->all_courses();    
                                                    foreach($all_course AS $course_data) 
                                                    {
                                                        echo "<option value='".$course_data['course_code']."' ". set_select('course_name', $course_data['course_code']).">".$course_data['course_name']."</option>"; 
                                                               }                                            
                                                    ?>
                                            </select>
                                             <?php if(form_error('course_name')) { 
                                                echo form_error('course_name','<p class="text-danger">','</p>'); 
                                            } ?>
                                         </div>
                                         </div>
                                        <div class="col-md-4">
                                        <div class="form-group">
                                           <label>Course Fee</label>
                                            <input class="form-control" id="course_fee" readonly="" name="course_fee" value="<?php echo set_value('course_fee'); ?>">
                                             <?php if(form_error('course_fee')) { 
                                                echo form_error('course_fee','<p class="text-danger">','</p>'); 
                                            } ?>
                                        </div>
                                        </div>
                                    <div style="clear:both;"></div>
                                         <div class="col-md-12">
                                          <div class="form-group">
                                             <label>Remark</label>
                                            <input class="form-control" name="remark" value="<?php  if(set_value('remark')) { echo set_value('remark'); }  ?>">
                                             <?php if(form_error('remark')) { 
                                             	echo form_error('remark','<p class="text-danger">','</p>'); 
                                            } ?>
                                         </div>
                                         </div> 
                                       <div class="col-md-12">   
                                        
                                        <button type="submit" class="btn btn-danger" name="promote_student" value="sbumit">Promote Now</button>
                                        
                                        </div>
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
