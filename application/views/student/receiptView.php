<?php $this->load->view('common/header');?>  
<style type="text/css">
body {
  background: rgb(204,204,204); 
}
page {
  background: white;
  display: block;
  margin: 0 auto;
  margin-bottom: 0.5cm;
  box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
}
page[size="A4"] {  
  width: 21cm;
  height: 29.7cm; 
}

@media print {
  body, page {
    margin: 0;
    box-shadow: 0;
  }
  button { display:none;}
}

#name{
	font-weight: bold;
}
#copyname{
	
	font-weight: bold;
}
#record {
	padding-top: 6px;
}
</style> 
<button onclick="window.print();">Print</button>
<page size="A4">
<div class="col-xs-12" >
	<div class="col-xs-7" >
		<h2 id="name">Excel Computer Classes</h2>
		<p>1st Floor Dharam Plaza, Shiv Colony Railway Road, Palwal</p>
		<p> <b>M.</b> 9991 252 252 &nbsp; &nbsp; <b> Website:</b> www.excelclass.in</p>
	</div>
	<div class="col-xs-5">
		<p style="text-align:right; margin-top:25px;"> 
			<?php 
				if($student_data['image'] != ''){
			?>
			<img src="<?php echo base_url(); ?>uploads/photo/<?php echo $student_data['image']; ?>" width="140" height="140" alt="imgae" />
			<?php		
				} else {
			?>
				<img src="<?php echo base_url(); ?>uploads/photo/avatar12.jpg" alt="imgae" width="140" height="140" />
			<?php	
				}
			?>
		</p>
	</div>
	<div class="col-xs-12" style="border-bottom:2px solid #ccc;"></div>	
</div>
<div class="col-xs-12" id="record">
	<div class="col-xs-6">Enrollment Number</div>
	<div class="col-xs-6"><?php echo $student_data['enrollment'];?></div>
</div>
<div class="col-xs-12" id="record">
	<div class="col-xs-6">Student Name</div>
	<div class="col-xs-6"><?php echo $student_data['student_name'];?></div>
</div>
<div class="col-xs-12" id="record">
	<div class="col-xs-6">Father’s Name</div>
	<div class="col-xs-6">SHRI <?php echo $student_data['father_name'];?></div>
</div>
<div class="col-xs-12" id="record">
	<div class="col-xs-6">Mother’s Name</div>
	<div class="col-xs-6">SMT. <?php echo $student_data['mname'];?></div>
</div>
<div class="col-xs-12" id="record">
	<div class="col-xs-6">Course Code</div>
	<div class="col-xs-6"><?php echo $student_data['course_code'];?></div>
</div>
<div class="col-xs-12" id="record">
	<div class="col-xs-6">Course Name</div>
	<div class="col-xs-6">
		<?php
			$ci =&get_instance();
            $ci->load->model('Enquiry_model');
            echo $ci->Enquiry_model->course_name($student_data['course_code']);
      ?>  	
	</div>
</div>
<div class="col-xs-12" id="record">
	<div class="col-xs-6">Gender</div>
	<div class="col-xs-6">
		<?php 
			if($student_data['gender'] == 1) { 
				echo 'Male'; 
			} else if($student_data['gender'] == 2) { 
				echo 'Female';
			} else if($student_data['gender'] == 3) {
				echo 'Transgender';
			} else {
				echo '';
			}
		?>
	</div>
</div>
<div class="col-xs-12" id="record">
	<div class="col-xs-6">Mobile No.</div>
	<div class="col-xs-6"><?php echo $student_data['phone'];?></div>
</div>
<div class="col-xs-12" id="record">
	<div class="col-xs-6">Alt. Mobile No.</div>
	<div class="col-xs-6"><?php echo $student_data['alt_mobile'];?></div>
</div>	
<div class="col-xs-12" id="record">
	<div class="col-xs-6">Address.</div>
	<div class="col-xs-6"><?php echo $student_data['address'];?></div>
</div>

<div class="col-xs-12" id="record">
	<div class="col-xs-6">Date of Birth</div>
	<div class="col-xs-6"><?php echo date('m-d-Y', strtotime($student_data['dob'])); ?></div>
</div>
<div class="col-xs-12" id="record">
	<div class="col-xs-6">Email ID</div>
	<div class="col-xs-6"><?php echo $student_data['email']; ?></div>
</div>
<div class="col-xs-12" id="record">
	<div class="col-xs-6">Caste</div>
	<div class="col-xs-6"><?php echo $student_data['caste']; ?></div>
</div>
<div class="col-xs-12" id="record">
	<div class="col-xs-6">Course Fee</div>
	<div class="col-xs-6"><?php echo $student_data['course_fee'];?></div>
</div>
<div class="col-xs-12" id="record">
	<div class="col-xs-6">Date of Joining</div>
	<div class="col-xs-6"><?php echo date('m-d-Y', strtotime($student_data['join_date']));?></div>
</div>
<div class="col-xs-12" id="record">
	<div class="col-xs-6">10th Certificate</div>
	<div class="col-xs-6">
		<?php 
			if($student_data['marksheet_sc'] == '' ){ 	
		  echo 'No'; 	
		 } else {
			echo 'Yes';
		 } ?>
	</div>
</div>
<div class="col-xs-12" id="record">
	<div class="col-xs-6">12th Certificate</div>
	<div class="col-xs-6">
		<?php 
			if($student_data['marksheet_sr_sc'] == '' ){ 	
		  echo 'No'; 	
		 } else {
			echo 'Yes';
		 } ?>
	</div>
</div>
<div class="col-xs-12" id="record">
	<div class="col-xs-6">Aadhar</div>
	<div class="col-xs-6">
		<?php 
			if($student_data['adhar'] == '' ){ 	
		  echo 'No'; 	
		 } else {
			echo 'Yes';
		 } ?>
	</div>
</div>
<div class="col-xs-12" id="record">
	<div class="col-xs-6">Mode</div>
	<div class="col-xs-6">
		<?php
			if($student_data['education_type'] == 1){
				echo 'Regular';
			} else if($student_data['education_type'] == 2){
				echo 'Distance';
			} else {
				echo '';
			}
			
		?>
	</div>
</div>
<div class="col-xs-12" id="record">
	<div class="col-xs-6">Remark</div>
	<div class="col-xs-6"><?php echo $student_data['remark'];?></div>
</div>

<div class="col-xs-12" > <div class="col-xs-12" style="border-bottom:2px solid #ccc; padding-bottom:6px; padding-top:20px;">&nbsp;</div> </div>
<div class="col-xs-12" style="padding-top:10px;">
	<div class="col-xs-12">
		<p style="text-align:left; font-weight:800">Declaration :</p>
		<p>I solemnly declare that I have studied all the rules and regulations of Excel Computer Classes. I am attending Excel Computer Classes for <b><?php echo $student_data['course_code'];?> </b> and the information given by me is absolutely true & best of my knowledge. If anything wrong or mischief done by me then only I will be responsible for that act.</p>	
		<!--p><b>Thank you for your business!</b></p-->	
		<!--<div class="col-xs-4" style="text-align:right;">
			<?php 	echo '<img src="'.base_url().'tes.png" />'; ?>
		</div>-->
		<p style="text-align:left;">Student Signature</p>	
		<p style="text-align:right;">for <strong>Excel Computer Classes</strong></p>	
	</div>
	
</div>
<!--end of block one -->
<div class="col-xs-12"> 
<div class="col-xs-12" style="border-bottom:2px dotted #000; padding:15px 0"></div>
</div>
<!-- start of block tow -->


</page>

</div>
    <!-- /#wrapper -->
</body>
</html>