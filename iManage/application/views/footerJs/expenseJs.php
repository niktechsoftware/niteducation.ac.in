 		<script src="<?php echo base_url()?>assets/plugins/jquery/jquery-2.1.3.min.js"></script>
        <script src="<?php echo base_url()?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
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
				$("#reason").hide();
				$("#expense").change(function(){
					var expense = $("#expense").val();
					if(expense == "other"){
						document.getElementById('reason').name="reason";
						document.getElementById('expense').name="expense";
						$("#reason").show();
					}else{
						document.getElementById('reason').name="expense";
						document.getElementById('expense').name="reason";
						$("#reason").hide();
					}
				});
                $("#branch1").hide();
                $("#course1").hide();
                $("#stud1").hide();
                $("#total_bal").hide();
                $("#test").change(function(){
                    var value= $("#test").val();
                    //alert(value);
                    if(value == "branch"){
                        $("#branch1").show();
                        $("#course1").hide();
                         $("#stud1").hide();
                    } else if (value == "crouse"){
                        $("#course1").show();
                        $("#branch1").hide();
                        $("#stud1").hide();
                    } else if(value == "student"){
                        $("#stud1").show();
                        $("#branch1").hide();
                        $("#course1").hide();
                    }
                });

                $("#test1").change(function(){
                    var value1= $("#test1").val();
                    alert(value1);
                    if(value1 == "Total"){
                        $("#total_bal").show();
                    }
                });
			});
        </script>
     