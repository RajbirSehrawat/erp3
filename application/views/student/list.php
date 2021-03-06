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
                            Students List
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                         <div class="col-md-8"> <br/>          
           <?php if($this->session->flashdata('success_msg')) { ?>
				<div class="alert alert-success"> <?php echo $this->session->flashdata('success_msg');  ?></div>
				<?php } if($this->session->flashdata('error_msg_msg')) { ?>
					<div class="alert alert-danger" > <?php echo $this->session->flashdata('error_msg_msg'); ?></div>
				<?php }  ?>
				</div>
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Sno.</th>
                                        <th>Enroll. No.</th>
                                        <th>Name</th>
                                        <th>Fname</th>
                                        <th>Mobile</th>
                                        <th>Course</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                
                                <?php $ii=1; foreach($all_students as $cdata) { ?>
                                    <tr class="odd gradeX">
                                    	 <td><?php echo $ii;?></td>
 													<td class="center"><?php echo $cdata['enrollment'];?></td>
                                        <td><?php echo $cdata['student_name'];?></td>
                                        <td><?php echo $cdata['father_name'];?></td>
                                        <td><?php echo $cdata['phone'];?></td>
                                        <td>
															<?php
															 		$ci =&get_instance();
                                            	 		$ci->load->model('Enquiry_model');
                                        			  	echo $ci->Enquiry_model->course_name($cdata['course_code']);
                                        		?>                                        
                                        </td>
                                       
                                        <td class="center" style="width:20%;">
												<a href="<?php echo base_url();?>student/receiptView/<?php echo $cdata['id'];?>" class="label label-primary label-sm">View</a> 
                                        		<a href="<?php echo base_url();?>student/edit/<?php echo $cdata['id'];?>" class="label label-success label-sm">Edit</a> 
												<a href="<?php echo base_url();?>student/fee/<?php echo $cdata['enrollment'];?>" class="label label-primary label-sm">Fee</a> 
											    <a href="#" class="label label-danger label-sm">Delete</a>                                        
                                        </td>
                                    </tr>
                              <?php $ii++; } ?>
                                   
                                </tbody>
                            </table>
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