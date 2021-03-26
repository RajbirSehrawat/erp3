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
                            Edit Enquiry
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
                                      <?php echo form_open('enquiry/edit/'.$enq_data['id']);?>
                                      <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Student Name</label>
                                            <input type="hidden" name="enq_id" value="<?php echo $enq_data['id'];?>" />
                                            <input class="form-control" name="sname" value="<?php  if(set_value('sname')) { echo set_value('sname'); } else { echo $enq_data['student_name'];} ?>">
                                            <?php if(form_error('sname')) { 
                                             	echo form_error('sname','<p class="text-danger">','</p>'); 
                                            } ?>
                                        </div>
                                        </div>
                                        <div class="col-md-6">
                                        <div class="form-group">
                                           <label>Address</label>
                                            <input class="form-control" name="address" value="<?php  if(set_value('address')) { echo set_value('address'); } else { echo $enq_data['address'];} ?>">
                                             <?php if(form_error('address')) { 
                                             	echo form_error('address','<p class="text-danger">','</p>'); 
                                            } ?>
                                        </div>
                                        </div>
                                        <div class="col-md-6">
                                        <div class="form-group">
                                             <label>Mobile</label>
                                            <input class="form-control" name="mobile" value="<?php  if(set_value('mobile')) { echo set_value('mobile'); } else { echo $enq_data['mobile'];} ?>">
                                             <?php if(form_error('mobile')) { 
                                             	echo form_error('mobile','<p class="text-danger">','</p>'); 
                                            } ?>
                                        </div>
                                        </div>
                                        <div class="col-md-6">
                                         <div class="form-group">
                                            <label>Qualification</label>
                                            <input class="form-control" name="education" value="<?php  if(set_value('education')) { echo set_value('education'); } else { echo $enq_data['education'];} ?>">
                                             <?php if(form_error('education')) { 
                                             	echo form_error('education','<p class="text-danger">','</p>'); 
                                            } ?>
                                         </div>
                                         </div>
										 <div style='clear:both;'></div>
										
                                         <div class="col-md-6">                                   
                                          <div class="form-group">
                                             <label>Course</label>
                                            <?php  
                                            	  $ci =&get_instance();
                                            	  $ci->load->model('Course_model');
                                                  $course_name = $ci->Course_model->course_by_code($enq_data['course'])  
											?>
											<input type="text" name="course_name" id="course_suggest" readonly class="form-control" ondblclick="this.readOnly = false" onblur="this.readOnly = true" value="<?php  if(set_value('course_name')) { echo set_value('course_name'); } else { echo $course_name;} ?>"/>
                                             <?php if(form_error('course_name')) { 
                                             	echo form_error('course_name','<p class="text-danger">','</p>'); 
                                            } ?>
                                         </div>
                                         </div>
                                         <div class="col-md-6">
                                          <div class="form-group">
                                             <label>Refer By</label>
                                           	<select class="form-control" name="reffer_by">
                                            <?php 
                                               $ci->load->model('Common_model');
                                               $all_reff = $ci->Common_model->all_refferby();    
                                            		foreach($all_reff AS $reff_data) 
                                            		{
                                            			if(set_select('reffer_by', $reff_data['reffer_by'])) {
																		$selected='selected';                                            			
                                            			} elseif($reff_data['reffer_by']==$enq_data['reffer_by']){
																		$selected='selected';
                                            			} else {
                                            				$selected='';
                                            			}
                                            			echo "<option value='".$reff_data['reffer_by']."' ". $selected.">".$reff_data['reffer_by']."</option>"; 
															   }                                    		
                                            		?>
                                           
                                             <?php if(form_error('reffer_by')) { 
                                             	echo form_error('reffer_by','<p class="text-danger">','</p>'); 
                                            } ?>
                                           </select>
                                         </div>
                                         </div>
                                         <div class="col-md-12">
                                          <div class="form-group">
                                             <label>Remark</label>
                                            <input class="form-control" name="remark" value="<?php  if(set_value('remark')) { echo set_value('remark'); } else { echo $enq_data['remark'];} ?>">
                                             <?php if(form_error('remark')) { 
                                             	echo form_error('remark','<p class="text-danger">','</p>'); 
                                            } ?>
                                         </div>
                                         </div>
                                       <div class="col-md-12">   
                                        
                                        <button type="submit" class="btn btn-success" name="edit_enquiry" value="sbumit">Submit</button>
                                        <button type="reset" class="btn btn-danger">Reset Button</button>
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
