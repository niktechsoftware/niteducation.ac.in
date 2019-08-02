<!DOCTYPE html>
<html>
  <head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <title>SMS Setting</title>
  </head>
  <body>

  <div class="row" style="margin:20px;">
  <div class="col-md-3">
      <label>Admission SMS:</label>
      </div> 
      <?php $deta = $this->db->get("sms")->row();?>
      <div class="col-md-6">
            <textarea class="form-control" name="admissionsms" id="admissionsms" required>
            <?php echo $deta->addmission;?>
            </textarea>
      </div>
            <div class="3">
      <input type="submit" class="btn btn-warning" id="editbtn" value="Edit">
      <a class="btn btn-danger" id="delbtn" href="<?php echo base_url();?>index.php/apanel/delete1" >Delete</a>
      </div></div>
      <div class="row" style="margin:20px;">
  <div class="col-md-3">
      <label>Fee Payment:</label>
      </div> 
      <?php $deta = $this->db->get("sms")->row();?>
      <div class="col-md-6">
            <textarea class="form-control" name="feepayment" id="feepayment" required value="">
            <?php echo $deta->fee;?>
      </textarea>
      </div>
      <div class="3">
      <input type="submit" class="btn btn-warning" id="editbtn1" value="Edit">
      <a class="btn btn-danger" id="delbtn1" href="<?php echo base_url();?>index.php/apanel/delete2">Delete</a>
      </div>
  </div> 
      <div class="row" style="margin:20px;">
  <div class="col-md-3">
      <label>Change Sender Id:</label>
      </div> 
      <div class="col-md-5">
      <?php $getrow = $this->db->get('sms')->row()->senderid; ?>

      <?php if($getrow=="NIELIT"){ ?>
   <input type="radio" checked value="NIELIT" name="sender" required>NIELIT&nbsp;&nbsp;&nbsp;
   <input type="radio" class="float-left" value="UPYOGA" name="sender"  required>UPYOGA&nbsp;&nbsp;&nbsp;
  <input type="radio" class="float-left" value="NITGZP" name="sender"  required>NITGZP&nbsp;&nbsp;&nbsp;
  <input type="radio" class="float-left" value="NITEDU" name="sender"  required>NITEDU
      <?php }elseif($getrow=="UPYOGA"){ ?>
        <input type="radio" value="NIELIT" name="sender" required>NIELIT&nbsp;&nbsp;&nbsp;
  <input type="radio" class="float-left" checked value="UPYOGA" name="sender"  required>UPYOGA&nbsp;&nbsp;&nbsp;
  <input type="radio" class="float-left"  value="NITGZP" name="sender"  required>NITGZP&nbsp;&nbsp;&nbsp;
  <input type="radio" class="float-left" value="NITEDU" name="sender"  required>NITEDU
  <?php }elseif($getrow=="NITGZP"){ ?>

  <input type="radio" value="NIELIT" name="sender" required>NIELIT&nbsp;&nbsp;&nbsp;
  <input type="radio" class="float-left" value="UPYOGA" name="sender"  required>UPYOGA&nbsp;&nbsp;&nbsp;
  <input type="radio" class="float-left" checked  value="NITGZP" name="sender"  required>NITGZP&nbsp;&nbsp;&nbsp;
  <input type="radio" class="float-left" value="NITEDU" name="sender"  required>NITEDU
  <?php }else{ ?>
    <input type="radio" value="NIELIT" name="sender" required>NIELIT&nbsp;&nbsp;&nbsp;
  <input type="radio" class="float-left" value="UPYOGA" name="sender"  required>UPYOGA&nbsp;&nbsp;&nbsp;
  <input type="radio" class="float-left" value="NITGZP" name="sender"  required>NITGZP&nbsp;&nbsp;&nbsp;
  <input type="radio" class="float-left" checked value="NITEDU" name="sender"  required>NITEDU
  <?php } ?>
      </div>
      <div class="4">
      <input type="submit" class="btn btn-warning" id="editbtn2" value="Edit">
      </div>
      </div>
      <div class="row">
      <div class="col-md-12" style="text-align:center;">

      <?php  
        $getrow = $this->db->get('sms')->row()->status;
  if($getrow==1){ ?>
      <input type="checkbox" name="checkk" checked id="box" data-toggle="toggle" style="width:50%;"> 
 <?php }else{ ?>
    <input type="checkbox" name="checkk" id="box" data-toggle="toggle" style="width:50%;">
  <?php } ?>
      </div>
      </div>
  </body>
</html>
<script>
$(document).ready(function(){
    $('#editbtn').click(function(){
        var adm=$('#admissionsms').val();
        $.post('<?php echo base_url();?>index.php/apanel/smsinsert',{admissionsms:adm},function(data){
            alert('Message succesfully submit');
            window.location.reload();
        });
    });    
    $('#editbtn1').click(function(){
var fee=$('#feepayment').val();
$.post('<?php echo base_url();?>index.php/apanel/feeinsert',{fee:fee},function(data){
    alert('succesfully submit');
    window.location.reload();
});
});
    $('#editbtn2').click(function(){
        var radioValue=$("input[name='sender']:checked").val();


$.post('<?php echo base_url();?>index.php/apanel/senderid',{ senderid : radioValue },function(data){
    alert('succesfully submit');  
});
});

// 
$("#box").change(function(){
    if($(this).prop("checked") == true){
       
       var a=1;

        $.post('<?php echo base_url();?>index.php/apanel/status',{ sta : a },function(data){
            alert('successfully status ON ');
        });
    }else{
        var a=0;
        $.post('<?php echo base_url();?>index.php/apanel/status',{ sta : a },function(data){
            alert('successfully status OFF ');
        });
    }
});

});
</script>
