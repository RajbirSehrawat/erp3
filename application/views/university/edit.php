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
                             Edit University
                             <span style="float: right; font-weight: bold;">
                             <a href="<?php echo base_url();?>university">View List</a>
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
                                      <?php echo form_open('university/edit');?>
                                        <div class="form-group">
                                            <label>University Name</label>
                                            <input type="hidden" name="university_id" value="<?php echo $data['id'];?>" />
                                            <input class="form-control" name="name" value="<?php  if(set_value('name')) { echo set_value('name'); } else { echo $data['name'];} ?>">
                                            <?php if(form_error('name')) { 
                                             	echo form_error('name','<p class="text-danger">','</p>'); 
                                            } ?>
                                        </div>
                                        
                                        
                                        <button type="submit" class="btn btn-default" name="edit_university" value="change password">Update</button>
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
