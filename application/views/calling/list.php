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
                            All Calls
                            <span style="float:right;"> <a href="<?php echo base_url().'calling/today/'.date('Y-m-d'); ?>">Today Calling</a></span>
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
                                        <th>Student Name</th>
                                        <th>Mobile</th>
                                        <th>Call Date</th>
                                        <th>Next Date</th>
                                        <th>Remark</th>
                                        <th >Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach($all_calls as $cdata) { ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $cdata['student_name'];?></td>
                                        <td><?php echo $cdata['mobile']; ?></td>
                                        <td><?php echo date('d-M-Y', strtotime($cdata['call_date']));?></td>
                                        <td><?php echo date('d-M-Y', strtotime($cdata['next_call_date']));?></td>
                                        <td><?php echo $cdata['remark']; ?></td>
                                        
                                        
                                        <td class="center">
														<a href="<?php echo base_url();?>calling/edit/<?php echo $cdata['id'];?>" class="label label-success label-sm">Edit</a> &nbsp;
														<a href="#" class="label label-danger label-sm">Delete</a>                                        
                                        </td>
                                    </tr>
                              <?php } ?>
                                   
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