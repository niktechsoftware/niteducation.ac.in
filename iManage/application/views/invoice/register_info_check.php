<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
	
	<title>Candidate Profile</title>
		<link rel='stylesheet' type='text/css' href='<?php echo base_url(); ?>assets/css/invoice_css/style1.css' />
	<link rel='stylesheet' type='text/css' href='<?php echo base_url(); ?>assets/css/invoice_css/print.css' media="print" />
	<script type='text/javascript' src='<?php echo base_url(); ?>assets/js/invoice_js/jquery-1.3.2.min.js'></script>
	<script type='text/javascript' src='<?php echo base_url(); ?>assets/js/invoice_js/example.js'></script>

	<style type="text/css">
		table tr th{
			text-align: left;
		}		
	</style>
	<style type="text/css" media="print">
	    @page {
	        size: auto;   /* auto is the initial value */
	        margin-bottom: 0mm;  /* this affects the margin in the printer settings */
	    }
	</style>
	
</head>

<body>

	<div id="page-wrap" style="border: 1px solid #FFF; width:1000px;">
		
		<table style="width: 100%">
			<tr>
				<td style="border: none;">
					<h1 align="center" style="text-transform:uppercase;"><?php echo $info->cilnic_name; ?></h1>
			        <h3 align="center" style="font-variant:small-caps;">
						<?php echo $info->address_1." ".$info->address_2." ".$info->city; ?>
			        </h3>
			        <h3 align="center" style="font-variant:small-caps;">
						<?php echo $info->state." - ".$info->pin; ?>
			        </h3>
			        <h3 align="center" style="font-variant:small-caps;">
						<?php if(strlen($info->phone_number > 0 )){echo "Phone : ".$info->phone_number.", ";} ?>
			            <?php echo "Mobile : ".$info->mobile_number; ?>
			        </h3>
				</td>
			</tr>
		</table>
		
        
		<div style="clear:both"></div>
		
		<table id="items">
			<tr>
				<th>Student ID (Login ID)</th>
				<td><?php echo $detail2->student_id; ?></td>
				<th>Candidate Name</th>
				<td><?php echo $detail2->name; ?></td>
			</tr>
			<tr>
				<th>Father's Name</th>
				<td><?php echo $detail2->fName;?></td>
				<th>Address</th>
				<td><?php echo $detail2->address;?></td>
			</tr>
			<tr>
				<th>City</th>
				<td><?php echo $detail2->city;?></td>
				<th>State</th>
				<td><?php echo $detail2->state;?></td>
			</tr>
			<tr>
				<th>Pin Code</th>
				<td><?php echo $detail2->pin;?></td>
				<th>Mobile Number</th>
				<td><?php echo $detail2->mobile;?></td>
			</tr>
			<tr>
				<th>Date of birth</th>
				<td><?php echo date("d-M-Y",strtotime($detail2->dob));?></td>
				<th>Highest Qualification</th>
				<td><?php echo $detail2->heighQ;?></td>
			</tr>
			<tr>
				<th>Course Applied</th>
				<td><?php echo $rtcourse->course_name;?></td>
				<th>Batch Time</th>
				<td><?php echo $detail2->timing;?></td>
			</tr>
			<tr>
				<th>Gender</th>
				<td><?php echo $detail2->gender;?></td>
				<th>Join Date</th>
				<td><?php echo date("d-M-Y",strtotime($detail2->apply_date));?></td>
			</tr>
			<tr>
				<th>Total Course Fee</th>
				<td ><?php echo $detail2->pay_amount;?></td>
				<th>Batch No</th>
				<td ><?php echo $detail2->branch_no;?></td>
			</tr>
			<tr>
				<th>Joining Time</th>
				<td><?php echo date("h:i:sa",strtotime($detail2->apply_date));?></td>
				<th>Are you approved by institute ?</th>
				<td>
					<!-- <?php echo $detail2->isApprove;?> -->
					<?php if(($detail2->isApprove)== "Yes"){ echo '<b style="color:#019a61">YES</b>'; }elseif(($detail2->isApprove)== "NO"){ echo '<b style="color:#c10101">NO</b>'; }else '<span style="color:red">N/A</span>'; ?>	
				</td>
			</tr>
            <tr>
				<th>Installment Type</th>
				<td ><?php echo $detail2->type_of_install;?></td>
				<th>Installment Number</th>
				<td ><?php echo $detail2->num_of_install;?></td>
			</tr>
			
			<tr style="border: none;">
				<td style="border: none;" colspan="2" valign="top">
					<table>
					    
					    <!-- <tr>
					        <th>Invoice No.</th>
					        <th>Course Fee</th>
					        <th>Total Amt.</th>
					        <th>Paid Amt.</th>
					        <th>Remaining</th>
					        <th>Last Date</th>
					        <th>Paid Date</th>
					    </tr> -->
					    <!-- <?php
					        // foreach($feeDetail as $fee):
					        //     echo '<tr>';
					        //         echo '<td>'.$fee->invoice_number.'</td>';
					        //         echo '<td>'.$fee->Course_fee.'</td>';
					        //         echo '<td>'.$fee->total_amount.'</td>';
					        //         echo '<td>'.$fee->paid_amount.'</td>';
					        //         echo '<td>'.$fee->remaining.'</td>';
					        //         echo '<td>'.$fee->should_paid_date.'</td>';
					        //         echo '<td>'.$fee->invoice_date.'</td>';
					        //     echo '</tr>';
					        // endforeach;
					    ?> -->
					    <tr>
					        <th>Registration No..</th>
					        <th>Course Fee</th>
					        <th>Total Amt.</th>
					        <th>Paid Amt.</th>
					        <th>Remaining</th>
					        <th>Paid Date</th>
					        <th>Status</th>
					    </tr>

					    <?php
					        foreach($ontxnDetail as $onlinetxn):
					            echo '<tr>';
					                echo '<td>'.$onlinetxn->regnumber.'</td>';
					                echo '<td>'.$onlinetxn->total_fee.'</td>';
					                echo '<td>'.$onlinetxn->total_fee.'</td>';
					                echo '<td>'.$onlinetxn->txn_amount.'</td>';
					                echo '<td>'.$onlinetxn->remain_fee.'</td>';
					                echo '<td>'.date("d-M-Y",strtotime($onlinetxn->txn_date_time)).'</td>';
					                echo '<td>'.$onlinetxn->status.'</td>';
					            echo '</tr>';
					        endforeach;
					    ?>
					</table>
				</td>
				<td colspan="2" width="45%" valign="top">
					<?php 
    					if($detail2->isApprove == "NO")
    					{
    						echo '<h4 style="color: #c10101;">';
    						echo "Your admission is not confirmed in NIT EDUCATION. You have to submit this printout to institute and take approval 
    						of admission than you will be eligible for online test paper of NIT. And other facilities of National Institute Of Technologies (NIT).";
    						echo '</h4>';
    					}else{
    						echo '<h4 style="color: #019a61;">';
    						echo 'Your Registration is confirmed with '.$this->lang->line("iName");
    						echo '</h4>';
    					}
					?>
					<p><img src="https://niteducation.ac.in/assets/asset/images/students_imgs/<?php echo $detail2->photo;?>" alt="Example" width="150" height="110"> 
					
					<!-- <img src="<?php //echo base_url(); ?>assets/images/stuImage/<?php //echo $detail2->signature;?>" alt="Example" width="150" height="110"> </p> -->
				<br>
					<strong>Regards</strong>
					<br/>
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