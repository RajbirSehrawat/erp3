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
                            Promote University Student
                        </div>
             <div class="col-md-12"> <br/>          
           <?php if($this->session->flashdata('success_msg')) { ?>
				<div class="alert alert-success"> <?php echo $this->session->flashdata('success_msg');  ?></div>
				<?php } 
                if($this->session->flashdata('error_msg')) { ?>
					<div class="alert alert-danger" > <?php echo $this->session->flashdata('error_msg'); ?></div>
				<?php }  ?>

                <?php if(validation_errors()) { ?>
                    <div class="alert alert-danger" > <?php echo validation_errors(); ?></div>
                <?php } ?>
				</div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <?php echo form_open('unistudents/promote/'.$uni_student['enrollement']);?>
                                    
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Enrollment :</label>
                                            <?php echo $uni_student['enrollement']; ?>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Student Name :</label>
                                            <?php echo $uni_student['sname']; ?>
                                        </div>
                                    </div>
                                        
                                        <div class="col-md-3">
                                         <div class="form-group">
                                            <label>Father Name :</label>
                                            <?php echo $uni_student['fname']; ?>
                                         </div>
                                         </div>
                                        
                                         <div class="col-md-3">
                                         <div class="form-group">
                                            <label>Mother Name :</label>
                                            <?php echo $uni_student['mname']; ?>
                                         </div>
                                         </div>
                                         <div style="clear:both;"></div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                               <label>Mobile :</label>
                                               <?php echo $uni_student['mobile']; ?>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                               <label>City :</label>
                                               <?php echo $uni_student['district']; ?>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                               <label>State :</label>
                                               <?php echo $uni_student['state']; ?>
                                            </div>
                                        </div>
                                        <div style="clear:both;"></div>
                                                                     
                                        <div class="col-md-3">
                                            <div class="form-group">
                                               <label>University :</label>
                                               <?php echo $uni_student['university_name']; ?>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                               <label>Course :</label>
                                               <?php echo $uni_student['course_name']; ?>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                               <label>Current Session:</label>
                                               <?php echo $uni_student['sem_yearly']." ".$uni_student['course_type']; ?>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                               <label>Course Type :</label>
                                               <?php
                                                if($uni_student['education_type'] == 1){
                                                    echo "Regular";
                                                } else {
                                                    echo "Distance";
                                                }
                                               ?>
                                            </div>
                                        </div>
                                    <div style="clear:both;"></div>
                                    <hr>
                                    <h4>Fee Payment</h4>
                                    
                                    <div class="col-md-3">
                             
                                        <div class="form-group">
                                           <label>Select Sem/Year</label>
                                            <select class="form-control" onChange="checkUniFee(this.value)">
                                            <option>Select</option>
                                            <?php foreach($my_sem_years as $my) { ?>
                                                <option value="<?php echo $my['id'];?>"><?php echo $my['sem_yearly']," ".$uni_student['course_type'];?></option>
                                            <?php } ?>
                                            </select>
                                        </div>
                                        </div>
                                  
                                    <div class="col-md-3">
                                        <div class="form-group">
                                           <label>Course Fees</label>
                                            <input class="form-control" readonly="" name="course_feeeeeee"
                                             value="">
                                        </div>
                                    </div>
                                        <div class="col-md-3">
                                        <div class="form-group">
                                           <label>Discount</label>
                                            <input class="form-control" name="discount" value="0" readonly="">
                                             <?php if(form_error('discount')) { 
                                                echo form_error('discount','<p class="text-danger">','</p>'); 
                                            } ?>
                                        </div>
                                        </div>
                                        <div class="col-md-3">
                                        <div class="form-group">
                                           <label>Fees Deposited </label>
                                            <input class="form-control" name="discount" value="0" readonly="">
                                             <?php if(form_error('discount')) { 
                                                echo form_error('discount','<p class="text-danger">','</p>'); 
                                            } ?>
                                        </div>
                                        </div>
                                        <div style="clear:both;"></div>
                                    
                                    <div class="col-md-3">
                                        <div class="form-group">
                                           <label>Fees Pending</label>
                                           <input type="text" class="form-control" readonly="" />
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                           <label>Fees Paid Today</label>
                                           <input type="text" class="form-control" />
                                        </div>
                                    </div>
                                    
                                         <div class="col-md-6">
                                          <div class="form-group">
                                             <label>Remark</label>
                                            <input class="form-control" name="remark" value="">
                                             <?php if(form_error('remark')) { 
                                             	echo form_error('remark','<p class="text-danger">','</p>'); 
                                            } ?>
                                         </div>
                                         </div> 
                                        
                                    <?php if(1) { ?>
                                       <div class="col-md-12">   
                                        <button type="submit" class="btn btn-danger" name="submit" value="sbumit">Promote Now</button>
                                        </div>
                                    <?php } ?>
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
