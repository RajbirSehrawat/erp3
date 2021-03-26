<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,maximum-scale=1.0">
<link href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
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
page[size="A4"][layout="portrait"] {
  width: 29.7cm;
  height: 21cm;  
}

@media print {
  body, page {
    //margin: 0;
margin-top: 9cm;
	margin-bottom : 25px;
    box-shadow: 0;
  }
}
</style>

<title>Landscape To Fit Paper Page</title>
</head>
<body>
<page size="A4">

<?php 


function numberTowords($num)
{ 
$ones = array( 
1 => "one", 
2 => "two", 
3 => "three", 
4 => "four", 
5 => "five", 
6 => "six", 
7 => "seven", 
8 => "eight", 
9 => "nine", 
10 => "ten", 
11 => "eleven", 
12 => "twelve", 
13 => "thirteen", 
14 => "fourteen", 
15 => "fifteen", 
16 => "sixteen", 
17 => "seventeen", 
18 => "eighteen", 
19 => "nineteen" 
); 
$tens = array( 
1 => "ten",
2 => "twenty", 
3 => "thirty", 
4 => "forty", 
5 => "fifty", 
6 => "sixty", 
7 => "seventy", 
8 => "eighty", 
9 => "ninety" 
); 
$hundreds = array( 
"hundred", 
"thousand", 
"million", 
"billion", 
"trillion", 
"quadrillion" 
); //limit t quadrillion 
$num = number_format($num,2,".",","); 
$num_arr = explode(".",$num); 
$wholenum = $num_arr[0]; 
$decnum = $num_arr[1]; 
$whole_arr = array_reverse(explode(",",$wholenum)); 
krsort($whole_arr); 
$rettxt = ""; 
foreach($whole_arr as $key => $i){ 
if($i < 20){ 
$rettxt .= $ones[$i]; 
}elseif($i < 100){ 
$rettxt .= $tens[substr($i,0,1)]; 
$rettxt .= " ".$ones[substr($i,1,1)]; 
}else{ 
$rettxt .= $ones[substr($i,0,1)]." ".$hundreds[0]; 
$rettxt .= " ".$tens[substr($i,1,1)]; 
$rettxt .= " ".$ones[substr($i,2,1)]; 
} 
if($key > 0){ 
$rettxt .= " ".$hundreds[$key]." "; 
} 
} 
if($decnum > 0){ 
$rettxt .= " and "; 
if($decnum < 20){ 
$rettxt .= $ones[$decnum]; 
}elseif($decnum < 100){ 
$rettxt .= $tens[substr($decnum,0,1)]; 
$rettxt .= " ".$ones[substr($decnum,1,1)]; 
} 
} 
return ucwords($rettxt); 
}
?>

							<?php if(isset($student_detail)){ ?>
							<div class="mar" id="printableArea" style="margin-left: 2%; margin-right: 2%; line-height: 2;">
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
													<h4 class="cname" style="text-align: center;"><strong><?php echo $course_detail[0]['course_name']; ?></strong></h4>
												</div>
											<!--/div-->	
											<!--div class="col-sm-12"-->	
												<div class="pass_year" style="text-align: center;">
													<h4>EXAMINATION <?php echo date('Y'); ?></h4>
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
											<td class="colon">Student Name</td>
											<td>:</td>
											<td align="left">  <?php echo '&nbsp;&nbsp;&nbsp;'.$student_detail[0]['student_name']; ?></td>
											<td class="colon">Enrolment No.</td>
											<td>:</td>
											<td align="left">  <?php echo '&nbsp;&nbsp;&nbsp;'.$student_detail[0]['enrollment']; ?></td>
										</tr>
										<tr>
											<td class="colon">Father Name</td>
											<td>:</td>
											<td align="left">  <?php echo '&nbsp;&nbsp;&nbsp;'.'SH '.$student_detail[0]['father_name']; ?></td>
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
								<div class="studMarkDetails" style="margin-top: 5px; margin-bottom: 5px;">
									<table border="2px solid black" width = "100%">
									<?php //echo '<pre>'; print_r($results_detail); ?>
									<thead>
										<tr >
											<th style="text-align:center; padding: 5px;">SNO. </th>
											<th style="text-align:center; padding: 5px;">CODE </th>
											<th style="text-align:center; padding: 5px;">SUBJECTS</th>
											<th style="text-align:center; padding: 5px;">MARKS OBTAINED</th>
											<th style="text-align:center; padding: 5px;">MIN MARKS</th>
											<th style="text-align:center; padding: 5px;">MAX MARKS</th>
										</tr>
									</thead>
									<tbody>
										<?php $i = 1; foreach($marks_detail as $mark){ ?>
										<tr>
											<td style="text-align:center; 5px;"><?php echo $i; ?></td>
											<td style="text-align:center; padding: 5px;"><?php echo $mark['code']; ?></td>
											<td style="text-align:center; padding: 5px;"><?php echo $mark['subject']; ?></td>
											<td style="text-align:center; padding: 5px;"><?php echo $mark['marks_obtain']; ?></td>
											<td style="text-align:center; padding: 5px;"><?php echo $mark['min_marks']; ?></td>
											<td style="text-align:center; padding: 5px;"><?php echo $mark['max_marks']; ?></td>
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
										<td align="left"><?php echo numberTowords($results_detail[0]['marks_obtain_tot']); ?></td>
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
												if($results_detail[0]['Devision'] == 'FIRST'){
													echo $results_detail[0]['Devision']; 	
												} else if($results_detail[0]['Devision'] == 'SECOND'){
													echo $results_detail[0]['Devision'];
												} else if($results_detail[0]['Devision'] == 'THIRD'){
													echo $results_detail[0]['Devision'];
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
							<?php  } ?>
							
                        
							
</page>

</body>
</html>