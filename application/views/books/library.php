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
                            View Student Record
                            
                        </div>
                        <!-- /.panel-heading -->
             <div class="panel-body">
            <div class="col-md-8"> <br/>          
           <?php if($this->session->flashdata('success_msg')) { ?>
				<div class="alert alert-success"> <?php echo $this->session->flashdata('success_msg');  ?></div>
				<?php } if($this->session->flashdata('error_msg')) { ?>
					<div class="alert alert-danger" > <?php echo $this->session->flashdata('error_msg'); ?></div>
				<?php }  ?>
			
				</div>
				    <?php echo form_open('books/library');?>
                                       <div class="col-md-6">
                                         <div class="form-group">
                                            <label>Enrollment Number</label>
                                            <input class="form-control"  name="enrollment" value="<?php echo set_value('enrollment'); ?>">
                                            <?php if(form_error('enrollment')) { 
                                             	echo form_error('enrollment','<p class="text-danger">','</p>'); 
                                            } ?>
                                        </div>
                                        </div>
                                      
                                     
                                          
                                      
                                       
                                       <div class="col-md-12">   
                                        
                                        <button type="submit" class="btn btn-success" name="search" value="Search">Search</button>
                                        <button type="reset" class="btn btn-danger">Reset Button</button>
                                        </div>
                                    </form>
				
                            
                            <!-- /.table-responsive -->
                        
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