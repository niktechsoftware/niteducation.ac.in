 		
        <script src="<?php echo base_url()?>assets/plugins/pace-master/pace.min.js"></script>
        <script src="<?php echo base_url()?>assets/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="<?php echo base_url()?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url()?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="<?php echo base_url()?>assets/plugins/switchery/switchery.min.js"></script>
        <script src="<?php echo base_url()?>assets/plugins/uniform/jquery.uniform.min.js"></script>
        <script src="<?php echo base_url()?>assets/plugins/classie/classie.js"></script>
        <script src="<?php echo base_url()?>assets/plugins/waves/waves.min.js"></script>
        <script src="<?php echo base_url()?>assets/plugins/3d-bold-navigation/js/main.js"></script>
        <script src="<?php echo base_url()?>assets/plugins/summernote-master/summernote.min.js"></script>
        <script src="<?php echo base_url()?>assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <script src="<?php echo base_url()?>assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
        <script src="<?php echo base_url()?>assets/js/modern.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/pages/form-elements.js"></script>
        
        <script>
			$(document).ready(function(){
			$("#installp").hide();
				$("#branchid").change(function(){
					var branchId = $("#branchid").val();
					var form_data = {
							branchId : branchId
							};
					$.ajax({
						url: "<?php echo site_url("ajax/loadBatch") ?>",
						type: 'POST',
						data: form_data,
						success: function(msg){
							$("#course").html(msg);
						}
					});
				});
				
					$("#course").change(function(){
					var branchId = $("#branchid").val();
						var course = $("#course").val();
					var form_data = {
							branchId : branchId,
							course  :  course
							};
					$.ajax({
						url: "<?php echo site_url("ajax/loadBatchc") ?>",
						type: 'POST',
						data: form_data,
						success: function(msg){
							$("#batch").html(msg);
						}
					});
				});
				
				$("#fee_method").change(function(){
				var fee_method = $("#fee_method").val();
				if(fee_method=="Installment")
				{
					$("#installp").show();
				}else{
				$("#installp").hide();}
					});

				
			$('[data-type="aadhar_number"]').keyup(function() {
				  var value = $(this).val();
				  value = value.replace(/\D/g, "").split(/(?:([\d]{4}))/g).filter(s => s.length > 0).join("-");
				  $(this).val(value);
				});

				$('[data-type="aadhar_number"]').on("change, blur", function() {
				  var value = $(this).val();
				  var maxLength = $(this).attr("maxLength");
				  if (value.length != maxLength) {
				    $(this).addClass("highlight-error");
				  } else {
				    $(this).removeClass("highlight-error");
				  }
				});

				$("#dob").change(function(){
					var dob = $("#dob").val();
					 var d = new Date(dob);
					    var n = d.getFullYear();
					  var t = Number(2018) - Number(n);
					  if(t<15){
						  alert("Please Enter A Valid Date");
						  $("#dob").val("0000-00-00");	
					  }
					  else{
					  }
					  
				});	
			});
			
        </script>