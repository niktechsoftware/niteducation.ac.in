<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
	
	<title>Candidate Profile</title>
		

	<style type="text/css">
		table tr th{
			text-align: left;
		}		
	</style>
	<style type="text/css" media="print">
	    @page 
	    {
	        size: auto;   /* auto is the initial value */
	        margin-bottom: 0mm;  /* this affects the margin in the printer settings */
	    }
	</style>
	
</head>

<body>

	<div id="page-wrap" style="border: 1px solid #FFF; width:100%;">
		<?php 
	$institute_info = mysql_query("select * from general_settings");
	$info = mysql_fetch_object($institute_info);
?>		
		<table style="width: 100%" border="1">
		
			<tr>
			<td width="10%" style="border: none;">
					<img src="<?php echo base_url();?>assets/asset/images/logo.png" alt="" width="200" />
				</td>
				<td style="border: none;">
					<h2 align="center" style="text-transform:uppercase;"><?php echo $info->cilnic_name; ?></h2>
			        <h3 align="center" style="font-variant:small-caps;">
						<?php echo $info->address_1." ".$info->address_2." ".$info->state." ".$info->pin; ?>
			        </h3>
			       
			        <h3 align="center" style="font-variant:small-caps;">
						<?php if(strlen($info->phone_number > 0 )){echo "Phone : ".$info->phone_number.", ";} ?>
			            <?php echo "Mobile : ".$info->mobile_number; ?>
			        </h3>
				</td>
			</tr>
		</table>
		
        
		<div style="clear:both"></div>
	<?php $studentId = $this->uri->segment(3); ?>	
<?php
	$this->db->where("student_id",$studentId);
	$detail = $this->db->get("web_student_requ")->row();	
?>
		
		<table id="items" border="1">
			<tr>
				<th>Student ID (Login ID)</th>
				<td><?php echo $detail->student_id; ?></td>
				<th>Candidate Name</th>
				<td><?php echo $detail->name; ?></td>
			</tr>
			<tr>
				<th>Father's Name</th>
				<td><?php echo $detail->fName;?></td>
				<th>Address</th>
				<td><?php echo $detail->address;?></td>
			</tr>
			<tr>
				<th>City</th>
				<td><?php echo $detail->city;?></td>
				<th>State</th>
				<td><?php echo $detail->state;?></td>
			</tr>
			<tr>
				<th>Pin Code</th>
				<td><?php echo $detail->pin;?></td>
				<th>Mobile Number</th>
				<td><?php echo $detail->mobile;?></td>
			</tr>
			<tr>
				<th>Date of birth</th>
				<td><?php echo date("d-M-Y",strtotime($detail->dob));?></td>
				<th>Highest Qualification</th>
				<td><?php echo $detail->heighQ;?></td>
			</tr>
			<tr>
				<th>Course Applied</th>
				 <?php $this->db->where("id",$detail->courseApplied);
	                        $rtcourse = $this->db->get("courses")->row();?>
				<td><?php echo $rtcourse->course_name;?></td>
				<th>Batch Time</th>
				<td><?php echo $detail->timing;?></td>
			</tr>
			<tr>
				<th>Course Fee</th>
				
				<td><?php echo $rtcourse->course_fee;?></td>
				<th>Course Duration</th>
				<td><?php echo $rtcourse->duration_in_months;?></td>
			</tr>
			<tr>
				<th>Registration Fee</th>
				
				<td><?php echo $rtcourse->Registration_Fee;?></td>
				<th>Form Fee</th>
				<td><?php echo $rtcourse->Form_fee;?></td>
			</tr>
			<tr>
				<th>Exam Fee</th>
				
				<td><?php echo $rtcourse->Exam_fee;?></td>
				<th>Total payable Fee</th>
				<td><?php echo $rtcourse->Form_fee+$rtcourse->Exam_fee+$rtcourse->Registration_Fee+$rtcourse->course_fee;?></td>
			</tr>
			<tr>
				<th>Gender</th>
				<td><?php echo $detail->gender;?></td>
				<th>Batch No</th>
				<td ><?php echo $detail->branch_no;?></td>
			</tr>
			
			
			
			
			<tr style="border: none;">
				<td style="border: none;">
					  <?php if(strlen($detail->photo)>0){?>
                                                        <img alt="" src="<?php echo base_url();?>assets/images/stuImage/<?php echo $detail->photo;?>" width="100" height="100"/>
                                                    <?php }else{?>
                                                      <img alt="" src="<?php echo base_url();?>assets/images/stuImage/<?php echo "homeless.jpg";?>" width="100" height="100"/>
                                                    <?php }?>
				</td>
				<td style="border: none;">
					
				</td>
				<td colspan="2" width="50%" valign="top">
					<?php if($this->uri->segment(4) == "lskajdfasiuf09e4iuorivmnsldfosuteioruetoi"){?>
						Your admission is not confirmed in NIT EDUCATION. You have to submit this printout to institute and take approval 
						of admission than you will be eligible for online test paper of NIT. And other facilities of National Institute Of Technologies (NIT).
					<?php }else{?>
						<h4 style="color: #019a61;">Your Registration is waiting for conformation with National Institute Of Technologies.Please take printout of this slip and Contact to Branch for Conformation.</h4>
					<?php }?>
					
					
					
					<strong>Regards</strong>
					
					<?php echo $this->lang->line("iName");?>
				</td>
			</tr>
		</table>
		
		
		<center>
	    	<button class="btn" type="button" onclick="window.print();" >
	        	 Print
	        </button>
	    </center>
    </div>
	
</body>

</html>