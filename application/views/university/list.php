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
                            Universities
                            <span style="float: right; font-weight: bold;">
                             <a href="<?php echo base_url();?>university/create">Add New</a>
                            </span>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Sr. No</th>
                                        <th>Univeristy Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $ii =1; foreach($all as $cdata) { ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $ii; ?></td>
                                        <td><?php echo $cdata['name'];?></td>
                                        <td class="center">
											<a href="<?php echo base_url();?>university/edit/<?php echo $cdata['id'];?>" class="label label-success label-sm">Edit</a> &nbsp;
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