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
	<style >
	    
	    @media print
	{
			body * { visibility: visible; }
			#printcontent * { visibility: visible; }
			#printcontent { position: absolute; top: 40px; left: 30px; }
			body {
   content:url("<?php echo base_url(); ?>assets/bcg.jpg");
   background-size: 100% auto;
  }
	    }
	</style>
	<style> table.example-table { background: url("<?php echo base_url(); ?>assets/bcg.jpg");
	background-size: 100% auto;  } </style>


</head>

<body>
<?php $this->db->where("sino",$sino);
		$ids = $this->db->get("pmgdish")->row();
		
		?>
<div id="printcontent">
	<div id="page-wrap" style="border: 1px solid #FFF; width:1000px;">
		<table class="example-table" id="items" >
			<tr style="border: none;">
				<td style="border: none;"><br></br><br></br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $ids->sino;?><br></br><br></br></td>
				<td style="border: none;"><br></br><br></br><br></br><br></br></td>
				<td style="border: none;"><br></br><br></br><br></br><br></br></td>
				
			</tr>
			<tr style="border: none;">
				<td style="border: none;"><br></br><br></br><br></br><br></br></td>
				<td style="border: none;"><br></br><br></br><br></br><br></br></td>
				<td style="border: none;"><br></br><br></br><br></br><br></br></td>
				
			</tr>
			<tr style="border: none;">
				<td style="border: none;" width="35%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="<?php echo base_url(); ?>assets/images/pmgdish/<?php echo $ids->student_image;?>" alt=""  height="120" width="140"/></td>
				<td style="border: none;"><br></br><br></br><br></br><br></br></td>
				<td style="border: none;"><br></br><br></br><br></br><br></br></td>
				
			</tr>
			<tr style="border: none;">
				<td style="border: none;"><?php //QRcode::png($ids->sino);?></td>
				<td style="border: none;"><br></br><br></br><br></br><br></br></td>
				<td style="border: none;"><br></br><br></br><br></br><br></br></td>
				
			</tr>
			<tr style="border: none;">
				<td style="border: none;"><br></br><br></br><br></br><br></br></td>
				<td style="border: none;"></br><h3><?php echo $ids->aadhar_number;?></h3><br><h3><?php echo $ids->name;?></h3><br><h3><?php echo $ids->mother_name;?></h3><br></br><h3><?php echo $ids->fName;?></h3></br><h3><?php echo $ids->fName;?></h3><br></br></td>
				<td style="border: none;"><br></br><br></br><br></br><br></br></td>
				
			</tr>
			<tr style="border: none;">
				<td style="border: none;"><br></br><h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo date("d-m-Y");?></h3><br></br><br></br><br></br></td>
				 
				<td style="border: none;"><br></br><br></br><br></br><br></br></td>
				<td style="border: none;"><br></br><br></br><br></br><br></br></td>
				
			</tr>
			<tr style="border: none;">
				<td style="border: none;"><br><h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo date("d-m-Y");?></h3><br></br><br></br><br></br></td>
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
		</table>
		
		
		<center>
	    	<button class="btn" type="button" onclick="window.print();" >
	        	 Print
	        </button>
	    </center>
    </div>
</div>	
</body>

</html>