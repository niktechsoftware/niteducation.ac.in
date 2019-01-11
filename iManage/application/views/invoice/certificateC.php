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
		@media print {
			body * { visibility: visible; }
			table.example-table {
				background:url("<?php echo base_url(); ?>assets/bcg.jpg");
				background-size: 100% auto;
				width: 100%;
height:100%;
                               
				font-size: auto;
				color:#000;
			}
			#printcontent * { visibility: visible;}
			#printcontent { 
				position: absolute; top: -26px; left: 00px;
			    	min-height: 8.7cm;
				visibility: visible; 
			}
			#printNot { 
				display: none; 
			}
			
		}
		table.example-table { 
			background: url("<?php echo base_url(); ?>assets/bcg.jpg");
			background-size: 100% auto;  
		} 
	</style>


</head>

<body>
<?php $sino =$this->uri->segment(3) ?>
<?php $this->db->where("sino",$sino);
		$ids = $this->db->get("pmgdish")->row();
		
		?>
		
		
<div id="printcontent">
	<div id="page-wrap" style="border: 1px solid #FFF; width:1000px; height:100%">
		<table class="example-table" id="items" >
			<tr style="border: none;">
				<td style="border: none;"><br></br></br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><?php echo $ids->sino;?></strong><br></br><br></br></td>
				<td style="border: none;"><br></br><br></br><br></br><br></br></td>
				<td style="border: none;"><br></br><br></br><br></br><br></br></td>
				
			</tr>
			<tr style="border: none;">
				<td style="border: none;"><br></br><br></br><br></br><br></br></td>
				<td style="border: none;"><br></br><br></br><br></br><br></br></td>
				<td style="border: none;"><br></br><br></br><br></br><br></br></td>
				
			</tr>
			<tr style="border: none;">
				<td style="border: none;" width="35%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="<?php echo base_url(); ?>assets/images/pmgdisha/<?php echo $ids->student_image;?>" alt=""  height="120" width="137"/>
<img src="http://api.qrserver.com/v1/create-qr-code/?color=000000&amp;bgcolor=E7E1F7&amp;data=Course On Computer Concept- PMGDISHA Duration- 30 days Grade- 'A' Name- 
<?php echo $ids->name;?> Father Name- <?php echo $ids->fname;?> Mother Name- <?php echo $ids->mother_name;?> Aadhar No- <?php echo $ids->aadhar_number;?> Roll No/Sr. No- <?php echo $ids->sino;?>&amp;qzone=1&amp;margin=0&amp;size=140x140&amp;ecc=H" alt="<?php echo $ids->sino;?>" style="border: none; padding-left: 38px;"/>
</td>
			
				
			</tr>
			
			<tr style="border: none;">
				
<td style="border: none;height:247px"></td>
				<td style="border: none;">
					<h3 style="padding-top:24px;"><?php echo $ids->aadhar_number;?></h3>
					<h3 style="padding-top:22px;"><?php echo $ids->name;?></h3>
					<h3 style="padding-top:21px;"><?php echo $ids->mother_name;?>
					<h3 style="padding-top:21px;"><?php echo $ids->fname;?></h3>
					<h3 style="padding-top:22px;"><?php echo $ids->gaurdian_name;?></h3>
				</td>
				<td style="border: none;"><br></br><br></br><br></br><br></br></td>
				
			</tr>
			<tr style="border: none;">
				<td style="border: none;"><br></br><br></br><h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $ids->year;?></h3><br></br><br></br><br></td>
				 
				<td style="border: none;"><br></br><br></br><br></br><br></br></td>
				<td style="border: none;"><br></br><br></br><br></br><br></br></td>
				
			</tr>
			<tr style="border: none;">
				<td style="border: none;"><br></br><h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $ids->year;?></h3><br></br><br></br><br></br></td>
				<td style="border: none;"><br></br><br></br><br></br><br></br></td>
				<td style="border: none;"><br></br><br></br><br></br><br></br></td>
				
			</tr>
			<tr style="border: none;">
				<td style="border: none;"><br></br><br></br><br></br><br></br></td>
				<td style="border: none;"><br></br><br></br><br></br><br></br></td>
				<td style="border: none;"><br></br><br></br><br></br><br></br></td>
				
			</tr>
			<tr style="border: none;">
				<td style="border: none;"><br></br></td>
				<td style="border: none;"><br></br></td>
				<td style="border: none;"><br></br></td>
				
			</tr>

			
			<tr style="border: none;">
				<td style="border: none;">
					 <br></br><br></br>
				</td>
				<td style="border: none;">
					<br></br>
				</td>
				
			</tr>
                               <tr style="border: none;">
				<td style="border: none;">
					 <br></br><br></br>
				</td>
				
			</tr>

		</table>
		
		<center>
			<button id="printNot" class="btn" onclick="window.print();" >Print</button>
		</center>
		
    </div>
    
</div>	
	
</body>

</html>