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
                            New Student
                        </div>
             <div class="col-md-8"> <br>          
           				</div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                      <form action="<?php echo base_url(); ?>StudentResult/add_result" onsubmit="return validate();" method="post" accept-charset="utf-8">
									  <div class="col-md-4">
											<div class="form-group">
												<label>Enrollment Number</label>
												<input class="form-control" type="text" id="enrollment_id" name="enrollment_id" value="">
											</div>
										</div>
										<div style="clear:both;"></div>
										<?php $i = 1; ?>
										
											<div class="col-md-12">
											
												<div class="col-md-2">
													<div class="form-group">
														<label>Subject</label>
														
														<select name="subject[]" id="subject_<?php echo $i; ?>" onchange="getDetVal(<?php echo $i; ?>);" class="form-control">
															<option value=""> Select </option>
															<?php foreach($getSubArr as $key => $val){  ?>
															<option value="<?php echo $val->id; ?>"><?php echo $val->subject; ?></option>
															<?php } ?>
														</select>
														
													</div>
												</div>
												<div class="col-md-2">
													<div class="form-group">
														<label>Paper Code</label>
														<input id="code_<?php echo $i; ?>" readonly class="form-control" name="code[]" value="">
														<!--select name="code" id="code_<?php echo $i; ?>" class="form-control">
															<option value=""> Select </option>
															<?php //foreach($getSubArr as $key => $val){  ?>
															<option value="<?php echo $val->id; ?>"><?php echo $val->paper_code; ?></option>
															<?php //} ?>
														</select-->
														
													</div>
												</div>
												
												<div class="col-md-2">
													<div class="form-group">
														 <label>Marks Obtain</label>
														<input class="form-control" id="marks_obtain_<?php echo $i; ?>" name="marks_obtain[]" value="">
													</div>
												</div>
												<div class="col-md-2">
													<div class="form-group">
														 <label>Min Marks</label>
														<input class="form-control" readonly id="min_marks_<?php echo $i; ?>" name="min_marks[]" value="">
													</div>
												</div>
												<div class="col-md-2">
													<div class="form-group">
														 <label>Max Marks</label>
														<input class="form-control" readonly id="max_marks_<?php echo $i; ?>" name="max_marks[]" value="">
													</div>
												</div>
												<div class="col-md-1">
													<div class="form-group">
														<label>ddsd</label>
														<input class="form-control" type="button" name="Add" onclick="appendHtml();" value="+">
													</div>
												</div>
											</div>
										<div class="appendDiv">	
										</div>
										<?php $i++; ?>
													<input class="form-control" type="hidden" name="count" value="<?php $i; ?>">
										<div style="clear:both;"></div>
                                        
                                       <div class="col-md-12">   
                                        	
											<button type="submit" class="btn btn-success" name="register" value="sbumit">Submit</button>
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
    <script>
	
	/* function validate(){
		var t = $("#enrollment_id").val();
		if(t == ''){
			alert('Please provide Enrollment No. ');
			return false;
		}
	}
	
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
  	} );  	*/
  	
	var i = '<?php echo $i; ?>';
	
	function appendHtml(){
		

		html = '<div id=\"increaseDiv_'+i+'\">';
		html += '<div class="col-md-12">';
		
		html +='			<div class="col-md-2">';
		html +='				<div class="form-group">';
		
		html +='					<select name="subject[]" onchange="getDetVal('+i+')" id=\"subject_'+i+'\" class="form-control">';
		html +='						<option value=""> Select </option>';
								<?php foreach($getSubArr as $key => $val){ ?>
		html +='						<option value="<?php echo $val->id; ?>"><?php echo $val->subject; ?></option>';
								<?php } ?>
		html +='					</select>';
		html +='				</div>';
		html +='			</div>';
		html +='			<div class="col-md-2">';
		html +='				<div class="form-group">';
		html +=' 			<input id=\"code_'+i+'\" class="form-control" name="code[]" readonly value="">';
		
		html +='				</div>';
		html +='			</div>';
		html +='			<div class="col-md-2">';
		html +='				<div class="form-group">';
		
		html +='					<input class="form-control" id=\"marks_obtain_'+i+'\" name="marks_obtain[]" value="">';
		html +='				</div>';
		html +='			</div>';
		html +='			<div class="col-md-2">';
		html +='				<div class="form-group">';
		
		html +='					<input class="form-control" readonly id=\"min_marks_'+i+'\" name="min_marks[]" value="">';
		html +='				</div>';
		html +='			</div>';
		html +='			<div class="col-md-2">';
		html +='				<div class="form-group">';
		
		html +='					<input class="form-control" readonly id=\"max_marks_'+i+'\" name="max_marks[]" value="">';
		html +='				</div>';
		html +='			</div>';
		html +='			<div class="col-md-1">';
		html +='				<div class="form-group">';
		
		html +='					<input class="form-control" type="button" name="Demove" onclick="removeHtml();" value="-">';
		html +='				</div>';
		html +='			</div>';
		html +='		</div>';
		html +='		</div>';
		
		i++;
		
		$(".appendDiv").append(html);
	}
	
	function removeHtml(){
		i--;
		$("#increaseDiv_"+i).remove();
		
	}
	
	function getDetVal(id){
		var getSelectVal = $("#subject_"+id+" option:selected").val();
		dataStr = "id="+getSelectVal;
		if(getSelectVal != ''){
			$.ajax({
				url : "<?php echo base_url(); ?>index.php/StudentResult/getDetVal",
				type: "POST",
				data: dataStr,
				success: function(result) { 
					var r = result.split(',');
					$("#code_"+id).val(r[0]);
					$("#min_marks_"+id).val(r[1]);
					$("#max_marks_"+id).val(r[2]);
				},
				error: function (jqXHR, textStatus, errorThrown)
				{
					alert('Some error');
				}
			});
		}
	}
	
	
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
	
  /*
  $( function() {
    $( "#course_suggest" ).autocomplete({
		maxShowItems: 5,
		source: 'http://www.excelclass.in/erp2/course/suggest_courses'
    });
  } );
*/
  </script>
    
<?php $this->load->view('common/footer');?>


