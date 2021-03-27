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
                            University Course Sem/Years

                            <span style="float: right; font-weight: bold;">
                             <a href="<?php echo base_url();?>universitycourse">Back To Courses</a>
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
                                <div class="col-lg-12">

                                    <?php if(validation_errors()) { ?>
                                        <div class="alert alert-danger">
                                            <?php echo validation_errors(); ?>
                                        </div>
                                    <?php } ?>

                                      <?php echo form_open('semesteryear/manage/'.$course_data['id']);?>
                                                                           
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                 <label>University</label>
                                            <input class="form-control" readonly="" name="university" value="<?php echo $course_data['uni_name'];?>">
                                                 
                                            </div>
                                        </div>
                                       
                                        <div class="col-md-4">
                                             <div class="form-group">
                                                <label>Course</label>
                                                <input type="hidden" name="course" value="<?php echo $course_data['id'];?>">
                                                <input class="form-control" readonly="" name="course_name" value="<?php echo $course_data['course_name'];?>">
                                                
                                             </div>
                                         </div>
                                         <div class="col-md-4">
                                             <div class="form-group">
                                                <label>Type</label>
                                        <input class="form-control" readonly="" name="course_type" value="<?php echo $course_data['type'];?>">
                                                
                                             </div>
                                         </div>
                                         <div class="col-md-12">
                                              <hr>
                                         </div>
                                       
                                        <?php for($i=1; $i<= $course_data['total']; $i++) { ?>
                                          <div class="col-md-12">
                                            <div class="col-md-4">
                                                 <div class="form-group">
                                                    <label>Course</label>
                                                    <input class="form-control" readonly="" name="fname" value="<?php echo $i." ".$course_data['type'];?>"> 
                                                 </div>
                                            </div>
                                            <div class="col-md-4">
                                                 <div class="form-group">
                                                    <label>Total Fee</label>
                                                    <input class="form-control" name="fee[<?php echo $i?>]" 
                                                    value="<?php if(isset($sem_year[$i-1])) { echo $sem_year[$i-1]['fee']; } ?>" 
                                                    placeholder="Enter amount" required="required" pattern="[0-9]+" title="Enter only numbers in fees"> 
                                                 </div>
                                            </div>
                                         </div>
                                        <?php } ?>
                                        <div style="clear:both;"></div>
                                        
                                        
                                       <div class="col-md-12">   
                                            <button type="submit" class="btn btn-lg btn-success" name="save" value="save"> Save </button>

                                        </div>
                                    </form>
                                </div>
                               
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                            <div style="clear:both;"></div>
                            
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
