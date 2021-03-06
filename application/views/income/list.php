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
                            Particular List
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
                                        
                                        <th>Particular</th>
                                        <th>Amount</th>
                                        <th>Date</th>
                                        <th>Balance</th>
                                         <th>Remark</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php  $i = 1; foreach($all_courses as $cdata) { ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $i."."; $i++;?></td>
                                        <td><?php echo $cdata['particular'];?></td>
                                        <td><?php echo $cdata['amount']; ?></td>
                                        <td><?php echo $cdata['particular_date'];?></td>
                                        <td><?php echo $cdata['balance'];?></td>
                                        <td class="center"><?php echo $cdata['remark'];?></td>
                                        <td class="center">
														<a href="<?php echo base_url();?>income/edit/<?php echo $cdata['id'];?>" class="label label-success label-sm">Edit</a> &nbsp;
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