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
                            University Courses
                            <span style="float: right; font-weight: bold;">
                             <a href="<?php echo base_url();?>universitycourse/new_course">New Course</a>
                            </span>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>University</th>
                                        <th>Course Name</th>
                                        <th>Course Code</th>
                                        <th>Type</th>
                                        <th>Total(Sem/Year)</th>

                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach($all as $cdata) { ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $cdata['id'];?></td>
                                        <td><?php echo $cdata['university_name'];?></td>
                                        <td><?php echo $cdata['course_name'];?></td>
                                        <td><?php echo $cdata['course_code'];?></td>

                                        <td><?php echo $cdata['type'];?></td>
                                         <td><?php echo $cdata['total']." ".$cdata['type'];?></td>
                                        <td class="center">
											<a href="<?php echo base_url();?>universitycourse/edit/<?php echo $cdata['id'];?>" class="label label-success label-sm">Edit</a> &nbsp;
											<a href="#" class="label label-danger label-sm">Delete</a>
                                             <a href="<?php echo base_url();?>semesteryear/manage/<?php echo $cdata['id'];?>" class="label label-primary label-sm">Semester/Year</a>                                        
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