<?php
$this->load->view('common/header');
$this->load->view('common/leftmenu');
?>
<style>
    .mb-1{
        margin-bottom: 1rem !important;
        padding: 2px 9px;
    }
</style>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            &nbsp;
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    University Students List
                    <a href="<?php echo base_url(); ?>unistudents/create" class="btn btn-sm btn-primary pull-right mb-1">Admit New Student</a>
                </div>
                <div class="panel-body">
                    <div class="col-md-8"> <br />
                        <?php if ($this->session->flashdata('success_msg')) { ?>
                            <div class="alert alert-success"> <?php echo $this->session->flashdata('success_msg');  ?></div>
                        <?php }
                        if ($this->session->flashdata('error_msg_msg')) { ?>
                            <div class="alert alert-danger"> <?php echo $this->session->flashdata('error_msg_msg'); ?></div>
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
                                <th>University</th>
                                <th>Course</th>
                                <th>Current Sem/Year</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $ii =1; foreach($all as $uni_student) { ?>
                                <tr>
                                    <td><?php echo $ii; ?></td>
                                    <td><?php echo $uni_student['enrollement']; ?></td>
                                    <td><?php echo $uni_student['sname']; ?></td>
                                    <td><?php echo $uni_student['fname']; ?></td>
                                    <td><?php echo $uni_student['mobile']; ?></td>
                                    <td><?php echo $uni_student['university_name']; ?></td>
                                    <td><?php echo $uni_student['course_name']; ?></td>
                                    <td><?php echo $uni_student['sem_yearly']. " ".$uni_student['course_type']; ?></td>
                                    <td class="center" style="width:20%;">
                                        <a href="<?php echo base_url(); ?>unistudents/edit/<?php echo $uni_student['enrollement']; ?>" class="label label-success label-sm">Edit</a>
                                        <a href="<?php echo base_url(); ?>unistudents/promote/<?php echo $uni_student['enrollement']; ?>" class="label label-primary label-sm">Promote</a>
                                        <a href="<?php echo base_url(); ?>unistudents/fee/<?php echo $uni_student['enrollement']; ?>" class="label label-warning label-sm">Fee</a>
                                        <a href="#" class="label label-danger label-sm">Delete</a>
                                    </td>
                                </tr>
                            <?php $ii++; } ?>
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('common/footer'); ?>