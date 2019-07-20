	<style type="text/css">

    #printable { display: block; }

    @media print
    {
    	#non-printable { display: none; }
    	#printable { display: block; }
    }
</style>
<script>
    function autoResize(id){
        var newheight;
        var newwidth;

        if(document.getElementById){
            newheight=document.getElementById(id).contentWindow.document .body.scrollHeight;
            newwidth=document.getElementById(id).contentWindow.document .body.scrollWidth;
        }

        document.getElementById(id).height= (newheight) + "px";
        document.getElementById(id).width= (newwidth) + "px";
    }
</script>
	
	<!-- CONTENT 
	============================================= -->
	<div class="content shortcodes">
		<div class="layout">
			<div class="row">
			    <?php $this->db->where("sino",$stu_id);
			    $rowsno=$this->db->get("pmgdish")->row()->sno;
			     if ($rowsno<1667){ ?>
				<IFRAME SRC="<?php echo base_url(); ?>invoiceController/certificateC/<?php echo $stu_id; ?>" width="100%" height="200px" id="iframe1" style="border: 0px;" onLoad="autoResize('iframe1');"></iframe>
			   <?php }else{ ?>
			        <IFRAME SRC="<?php echo base_url(); ?>invoiceController/certificateC_new/<?php echo $stu_id; ?>" width="100%" height="200px" id="iframe1" style="border: 0px;" onLoad="autoResize('iframe1');"></iframe>
			   <?php } ?>
			</div>
		</div>
	</div>
	<!-- END CONTENT 
	============================================= -->
