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
                            New Call
                        </div>
             <div class="col-md-12"> <br/>          
           <?php if($this->session->flashdata('success_msg')) { ?>
				<div class="alert alert-success"> <?php echo $this->session->flashdata('success_msg');  ?></div>
				<?php } if($this->session->flashdata('error_msg_msg')) { ?>
					<div class="alert alert-danger" > <?php echo $this->session->flashdata('error_msg_msg'); ?></div>
				<?php }  ?>
				</div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                      <?php echo form_open('calling/new_call');?>
                                      <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Student Name</label>
                                            <input class="form-control" name="sname" value="<?php echo set_value('sname'); ?>">
                                            <?php if(form_error('sname')) { 
                                             	echo form_error('sname','<p class="text-danger">','</p>'); 
                                            } ?>
                                        </div>
                                        </div>
                                       
                                        <div class="col-md-6">
                                        <div class="form-group">
                                             <label>Mobile</label>
                                            <input class="form-control" name="mobile" value="<?php echo set_value('mobile'); ?>">
                                             <?php if(form_error('mobile')) { 
                                             	echo form_error('mobile','<p class="text-danger">','</p>'); 
                                            } ?>
                                        </div>
                                        </div>
                                       <div style="clear:both;"></div>

                                        <div class="col-md-6">
                                        <div class="form-group">
                                             <label>Date of Enquiry</label>
                                            <input class="form-control" name="doe" value="<?php if(set_value('doe')) { echo set_value('doe'); } else { echo date('Y-m-d'); }; ?>">
                                             <?php if(form_error('doe')) { 
                                             	echo form_error('doe','<p class="text-danger">','</p>'); 
                                            } ?>
                                        </div>
                                        </div>
                                         
                                       <div class="col-md-6">
                                        <div class="form-group">
                                             <label>Next Date of Calling </label>
                                            <input class="form-control" id="join_date" readonly="" name="ndoc" value="<?php echo set_value('ndoc'); ?>">
                                             <?php if(form_error('ndoc')) { 
                                             	echo form_error('ndoc','<p class="text-danger">','</p>'); 
                                            } ?>
                                        </div>
                                        </div>
                                         <div class="col-md-6">
                                          <div class="form-group">
                                             <label>Remark</label>
                                            <input class="form-control" name="remark" value="<?php echo set_value('remark'); ?>">
                                             <?php if(form_error('remark')) { 
                                             	echo form_error('remark','<p class="text-danger">','</p>'); 
                                            } ?>
                                         </div>
                                         </div>
                                       <div class="col-md-12">   
                                        <button type="submit" class="btn btn-success" name="submit" value="sbumit">Submit</button>
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
