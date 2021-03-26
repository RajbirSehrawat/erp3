<?php 
	$this->load->view('common/header');
	$this->load->view('common/leftmenu');
?> 
<div id="page-wrapper" style="min-height: 300px;">
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
                         <div class="col-md-8"> <br>          
           				</div>
                            <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
							
							<div class="row">
							<div class="col-sm-12">
							<table width="100%" class="table table-striped table-bordered table-hover dataTable no-footer dtr-inline" id="dataTables-example" role="grid" aria-describedby="dataTables-example_info" style="width: 100%;">
                                
								<thead>
                                    <tr role="row"><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 31px;">Sno.</th>
									<th class="sorting_disabled" rowspan="1" colspan="1" style="width: 119px;">Certificate. No.</th>
									<th class="sorting_disabled" rowspan="1" colspan="1" style="width: 69px;">Enrollment No.</th>
									<th class="sorting_disabled" rowspan="1" colspan="1" style="width: 81px;">Result</th>
									<th class="sorting_disabled" rowspan="1" colspan="1" style="width: 58px;">Devision</th>
									<th class="sorting_disabled" rowspan="1" colspan="1" style="width: 225px;">Marks Obtain</th>
									<th class="sorting_disabled" rowspan="1" colspan="1" style="width: 225px;">Marks Total</th>
									<th class="sorting_disabled" rowspan="1" colspan="1" style="width: 225px;">Percentage</th>
									<th class="sorting_disabled" rowspan="1" colspan="1" style="width: 165px;">Action</th></tr>
                                </thead>
                                <tbody>
									<?php $j = 1; foreach($data as $val){ ?>	
									<tr class="gradeX odd" role="row">
                                    	<td><?php echo  $j; ?></td>
 										<td class="center"><?php echo $val->certificate_no; ?></td>
                                        <td><?php echo $val->enrollment_id; ?></td>
                                        <td><?php echo $val->result; ?></td>
                                        <td><?php echo $val->Devision; ?></td>
                                        <td><?php echo $val->marks_obtain_tot; ?></td>
                                       <td><?php echo $val->max_marks_tot; ?></td>
                                       <td><?php echo $val->percentage; ?></td>
                                       
                                        <td class="center" style="width:20%;">
											<a href="<?php echo base_url(); ?>StudentResult/printCertification/<?php echo $val->id; ?>" class="label label-success label-sm">Certificate</a>
											<a href="<?php echo base_url(); ?>Certification/index/<?php echo $val->enrollment_id; //$val->id; ?>" class="label label-success label-sm">MarkSheet</a> 
										</td>
                                    </tr>
									<?php $j++;} ?>
									</tbody>
                            </table>
							</div>
							</div>
							</div>
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
  
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true,
            "ordering": false
        });
    });
      
    $( function() {
   	 $( "#datepicker" ).datepicker({
    	  changeMonth: true,
    	  changeYear: true,
    	  dateFormat: 'yy-mm-dd',
		  yearRange: "-50:+0", // last hundred years
   	 });
  	});
	$( function() {
    $( "#join_date" ).datepicker({
     	 changeMonth: true,
     	 changeYear: true,
     	 dateFormat: 'yy-mm-dd'
    });
  	} );  	
  	
  	function load_more(course_code)
  	{
		$('#course_name').attr("readonly", true);
  		$.ajax({
        url : "http://www.excelclass.in/erp2/student/ajax_load",
        type: "POST",
        data: 'course_code='+course_code,
        dataType: "JSON",
        success: function(html) {     	
        		$('#course_fee').val(html.course_fee);
        		$('#course_duration').val(html.course_duration);
				$('#tax').val(html.tax);
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
    }
    function all_expense() {
    		var all_qty = $('#qnty').val();
    		var all_amt = $('#amount').val();
    		if (all_qty == '') {
    			all_qty = 1;    			
    		}
    		if (all_amt == '') {
    			all_amt = 1;    			
    		}
    		var all_total = (all_qty * all_amt);
    		$('#total_expense').val(all_total);
    }
	
  $( function() {
    $( "#course_suggest" ).autocomplete({
		maxShowItems: 5,
		source: 'http://www.excelclass.in/erp2/course/suggest_courses'
    });
  } );

  </script>
<?php $this->load->view('common/footer');?>