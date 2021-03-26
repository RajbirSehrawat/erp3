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
    margin: 0;
    box-shadow: 0;
  }
}
</style>

<title>Landscape To Fit Paper Page</title>
</head>
<body>
<page size="A4" layout="portrait">
<div class="row" style="padding-top:230px;"></div>
<div class="row">
<div style="width:14%; float:left;">&nbsp;</div>

<?php $effectiveDate = date('Y-m-d', strtotime("+".$stud_detail[0]['course_duration']." months", strtotime($stud_detail[0]['join_date']))); ?>
<div style="width:32%;float:left; font-size:20px;"><?php echo $cert_detail[0]['enrollment_id']; ?></div>
<div style="width:26%;float:left;">&nbsp;</div>
<div style="width:18%;float:left;font-size:22px;"><?php echo $cert_detail[0]['certificate_no']; ?></div>
</div>
<div style="clear:both;"></div>
<div class="row" style="padding-top:20px;">
<div style="width:10%; float:left;">&nbsp;</div>
<div style="width:28%;float:left;"><img src="<?php echo base_url();?>tes.png" style="width:110px; height:110px;"/></div>
<div style="width:35%;float:left;">
<span style="font-size:36px; font-weight:bold; text-transform: uppercase;">&nbsp;<?php echo $stud_detail[0]['student_name']; ?></span>
<br/>
<span style="font-family:Monotype Corsiva, Times, Serif; font-size:22px; padding-top:20px !important;">has successfully completed his / her</span>
</div>
<div style="width:18%;float:left;">&nbsp;</div>
</div>
<div style="clear:both;"></div>
<div class="row" style="padding-top:1px;">
<div style="width:10%; float:left;">&nbsp;</div>
<div style="width:15%;float:left;">&nbsp;</div>
<div style="width:57%;float:left; text-align:center;">
<span style="font-size:15px;font-family:Monotype Corsiva, Times, Serif; font-size:22px; ">course in &nbsp;</span>
<span style="font-size:28px;"> <?php echo $course_detail[0]['course_name']; ?> </span>
</div>
<div style="width:8%;float:left;">&nbsp;</div>
</div>
<div style="clear:both;"></div>
<div class="row" style="padding-top:10px;">
<div style="width:10%; float:left;">&nbsp;</div>
<div style="width:25%;float:left;">&nbsp;</div>
<div style="width:37%;float:left;">
<span style="font-family:Monotype Corsiva, Times, Serif; font-size:22px;">From &nbsp;</span>
<span style="font-size:26px;"><?php echo date("d-M-Y", strtotime($stud_detail[0]['join_date'])); ?> </span>
<span style="font-family:Monotype Corsiva, Times, Serif; font-size:22px;"> to &nbsp; </span>
<span style="font-size:26px;"><?php echo date("d-M-Y", strtotime("-1 day", strtotime($effectiveDate))); ?> </span>
</div>
<div style="width:18%;float:left;">&nbsp;</div>
</div>
<div style="clear:both;"></div>
<div class="row" style="padding-top:10px;">
<div style="width:10%; float:left;">&nbsp;</div>
<div style="width:30%;float:left;">&nbsp;</div>
<div style="width:32%;float:left;font-family:Monotype Corsiva, Times, Serif; font-size:30px; ">
<?php //echo '<pre>'; print_r($cert_detail); die;  ?>
He/She Got <b><?php if($cert_detail[0]['percentage'] > '80' && $cert_detail[0]['percentage'] <= '100') { echo 'A+'; } else if($cert_detail[0]['percentage'] > '60' && $cert_detail[0]['percentage'] <= '80') { echo 'A'; } else if($cert_detail[0]['percentage'] > '40' && $cert_detail[0]['percentage'] <= '60') { echo 'B'; } else { echo "C"; }  ?> </b> Grade.
</div>
<div style="width:18%;float:left;">&nbsp;</div>
</div>
<div style="clear:both;"></div>
<div class="row" style="padding-top:160px;">
<div style="width:10%; float:left;">&nbsp;</div>
<div style="width:30%;float:left;">&nbsp;</div>
<div style="width:38%;float:left;">&nbsp;</div>
<div style="width:12%;float:left;">
<span>Date  <span>: <?php echo date('d-m-Y'); ?> <br/>
<span>Place <span>: Palwal
</div>
</div>
</page>

</body>
</html>