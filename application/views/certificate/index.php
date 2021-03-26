<?php 
	$this->load->view('common/header');
	$this->load->view('common/leftmenu');
?> 
<script>
function printDiv(divName) {
     document.getElementById(divName).style.marginTop = "50px";
	 var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;
	 //divName.style.marginTop = "10cm";
	 
	//var printWin = window.open('','','left=2,top=10cm,width=1,height=1,toolbar=0,scrollbars=0,status  =0');
     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>

<style>

.headDiv{
	 margin-top: 9cm;
	margin-bottom : 25px;
	
}
.cname
{
	
	text-align: center;
	color: green;
	border: 0px solid black;
}

.pass_year {
	text-align: center;
}
.qrcode
{
	
	margin-left: 0cm;
	border: 1px;
	width: 2.5cm;
    border: 1px solid green;
    height: 2.5cm;
	    float: left;
}
.gh
{
	border: 1px solid green;
    
	
}

.studDetails{
	margin-bottom : 10px;
}

.studMarkDetails{
	text-align: center;
	padding: 2px;
	margin-bottom : 10px;
}

th {
	padding: 2px;
}

td {
	padding: 2px;
}

td.colon {
    width: 141px;
}

</style>
<div id="page-wrapper" style="min-height: 311px;">
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Print Certificate
                        </div>
                        <!-- /.panel-heading -->
						 <div class="panel-body">
							<div class="col-md-8"> 
							<div class="col-sm-6">
							<form method="post" action="<?php echo base_url(); ?>Certificates/index">
								<div id="dataTables-example_filter" class="dataTables_filter">
									<label>
									Search:
									<input type="text" class="form-control input-sm" placeholder="" value="" name="search" aria-controls="dataTables-example">
									<button type="submit" class="btn btn-success" name="submit" value="sbumit">Submit</button>
									</label>
								</div>
							</form>
							</div>
							</div>
						</div>
						
						
                            <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
							<div class="row">
							
							
							
							<?php if(isset($student_detail)){ ?>
							<div class="col-sm-12">
								<input type="button" onclick="printDiv('printableArea')" value="print a div!" />
								<!--button onClick="window.print()">Print this page</button-->
							</div>
							<div class="row">
							<div class="col-sm-12">
							<page size="A4">
							<div class="mar" id="printableArea">
								<!--div class="col-sm-12 gh" -->
								<div class="headDiv">
									<!--div class="col-sm-2"--> 
										<div class="qrcode">
											<p>Qr code print here</p>
										</div>
									<!--/div-->	
									<!--div class="col-sm-8"-->
										<div class="couse_details">
											<!--div class="col-sm-12"-->	
												<div class="course">
													<h2 class="cname"><?php echo $course_detail[0]['course_name']; ?></h2>
												</div>
											<!--/div-->	
											<!--div class="col-sm-12"-->	
												<div class="pass_year">
													<p>EXAMINATION <?php echo date('Y'); ?></p>
												</div>
											<!--/div-->	
										</div>
									<!--/div-->
								<!--/div-->
								</div>
							<!--table border="2 px solid black;"-->
								<div class="studDetails">
									<table border="0" width = "100%" >
									<?php //echo '<pre>'; print_r($results_detail); ?>
									
										<tr>
											<td class="colon">Student's Name</td>
											<td>:</td>
											<td align="left">  <?php echo $student_detail[0]['student_name']; ?></td>
											<td class="colon">Enrolment No.</td>
											<td>:</td>
											<td align="left">  <?php echo $student_detail[0]['enrollment']; ?></td>
										</tr>
										<tr>
											<td class="colon">Father's Name</td>
											<td>:</td>
											<td align="left">  <?php echo $student_detail[0]['father_name']; ?></td>
											<td class="colon">Center Code</td>
											<td>:</td>
											<td align="left">  <?php //echo $student_detail[0]['father_name']; ?></td>
										</tr>
										<tr>
											<td class="colon">Center Name</td>
											<td>:</td>
											<td align="left">  <?php //echo $student_detail[0]['father_name']; ?></td>
										</tr>
								</table>
								</div>
								<div class="studMarkDetails">
									<table border="2px solid black" width = "100%">
									<?php //echo '<pre>'; print_r($results_detail); ?>
									<thead>
										<tr>
											<th align="center">SNO. </th>
											<th align="center">CODE </th>
											<th align="center">SUBJECTS</th>
											<th align="center">MARKS OBTAINED</th>
											<th align="center">MIN MARKS</th>
											<th align="center">MAX MARKS</th>
										</tr>
									</thead>
									<tbody>
										<?php $i = 1; foreach($marks_detail as $mark){ ?>
										<tr>
											<td align="center"><?php echo $i; ?></td>
											<td align="center"><?php echo $mark['code']; ?></td>
											<td align="center"><?php echo $mark['subject']; ?></td>
											<td align="center"><?php echo $mark['marks_obtain']; ?></td>
											<td align="center"><?php echo $mark['min_marks']; ?></td>
											<td align="center"><?php echo $mark['max_marks']; ?></td>
										</tr>
										<?php $i++;} ?>
										<tr>
											<td></td>
											<td></td>
											<td align="center"><strong>GRAND TOTAL</strong></td>
											<td align="center"><?php echo $results_detail[0]['marks_obtain_tot']; ?></td>
											<td align="center"><?php echo $results_detail[0]['min_marks_tot']; ?></td>
											<td align="center"><?php echo $results_detail[0]['max_marks_tot']; ?></td>
										</tr>
									</tbody>
									
								</table>
								</div>
								<div class="studRestDetails">
									<table width="100%">
									<tr>
										<td class="colon">In Words</td>
										<td>:</td>
										<td align="left"><?php echo $results_detail[0]['marks_obtain_tot']; ?></td>
										<td class="colon">Result</td>
										<td>:</td>
										<td align="left"><?php echo $results_detail[0]['result']; ?></td>
									</tr>
									<tr>
										<td class="colon">Percentage</td>
										<td >:</td>
										<td align="left"><?php echo $results_detail[0]['percentage']. '%'; ?></td>
										<td class="colon">Division</td>
										<td>:</td>
										<td align="left">
											<?php 
												if($results_detail[0]['Devision'] == 1){
													echo $results_detail[0]['Devision']. 'st'; 	
												} else if($results_detail[0]['Devision'] == 2){
													echo $results_detail[0]['Devision']. 'nd';
												} else if($results_detail[0]['Devision'] == 3){
													echo $results_detail[0]['Devision']. 'rd';
												} else {
													echo '';
												}
												
											?>
										</td>
									</tr>
									<tr>
										<td class="colon">Dated</td>
										<td>:</td>
										<td align="left"><?php echo date('d-M-Y'); ?></td>
									</tr>
								</table>
								</div>
							<!--/table-->
							</div>
							</page>
							</div>
							</div>
							<?php  } ?>
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
 <?php $this->load->view('common/footer');?>         