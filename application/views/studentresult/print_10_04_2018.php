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

<!-- -->

.cerDetailsReg {
    float: left;
    width: 12cm;
    margin-left: 4cm;
}

.stuName {
    text-align: center;
    font-size: 20px;
}

.cerDetails {
    margin-top: 5.5cm;
}

.mainDiv {
    text-align: center;
}

.p1 {
    float: left;

    text-align: center;
}

.datePlace {
    margin-top: 12.5cm;
    margin-left: 20cm;
}

<!-- -->


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
	
	margin-left: 2cm;
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
                            Print Certification
                        </div>
                        
						
						
						
                            <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
							<div class="row">
							
							
							
							<?php if(isset($cert_detail)){ ?>
							<div class="col-sm-12">
								<input type="button" onclick="printDiv('printableArea')" value="print a div!" />
								<!--button onClick="window.print()">Print this page</button-->
							</div>
							<div class="row">
							<div class="col-sm-12">
							<page size="A4">
							<div class="mar" id="printableArea">
								
								<div class="cerDetails">
									<div class="cerDetailsReg">
										<?php echo $cert_detail[0]['enrollment_id']; ?>
									</div>
									<div class="cerDetailslef">
										<?php echo $cert_detail[0]['certificate_no']; ?>
									</div>
								</div>
								<div class="mainDiv">
										<div class="qrcode mainDiv1">
											<p>Qr code print here</p>
										</div>
										<div class="setDetAll mainDiv1">
											<div class="stuName">
												<?php echo $stud_detail[0]['student_name']; ?>
											</div>
											<div class="stuName1">
												<p>dsfjhkjdsfhjksdf</p>
											</div>
											<div class="stuName2">
												<p>som para</p><h2 class="cname"><?php echo $course_detail[0]['course_name']; ?></h2>
											</div>
											<div class="stuName3">
												<p>from</p>
											</div>
											<div class="stuName3">
												<div class="p1">grade</div><div class="p1">greade</div><div class="p1">grade</div>
											</div>
										</div>
										<div class="mainDiv1">
											
										</div>
								</div>	
								<div class="datePlace">
									<div class="date">
										<?php echo date('d-m-Y'); ?>
									</div>
									<div class="Place">
										<?php echo 'Palwal'; ?>
									</div>									
								</div>
							
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