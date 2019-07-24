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
            <textarea rows="4" cols="85" name="admissionsms" id="admissionsms" required>
            <?php echo $deta->addmission;?>
            </textarea>
      </div>
            <div class="3">
      <input type="submit" class="btn btn-warning" id="editbtn" value="Edit">
      <input type="submit" class="btn btn-danger" id="delbtn" value="Delete">
      </div></div>
      
    
      <div class="row" style="margin:20px;">
  <div class="col-md-3">
      <label>Fee Payment:</label>
      </div> 
      <?php $deta = $this->db->get("sms")->row();?>
      <div class="col-md-6">
            <textarea rows="4" cols="85" name="feepayment" id="feepayment" required>
            <?php echo $deta->fee;?>
      </textarea>
      </div>
      <div class="3">
      <input type="submit" class="btn btn-warning" id="editbtn1" value="Edit">
      <input type="submit" class="btn btn-danger" id="delbtn1" value="Delete">
      </div>
  </div> 
      <div class="row" style="margin:20px;">
  <div class="col-md-3">
      <label>Change Sender Id:</label>
      </div> 
      <div class="col-md-5">
      <input type="radio" value="NIELIT" name="sender" id="sender" required>NIELIT&nbsp;&nbsp;&nbsp;
  <input type="radio" class="float-left" value="UPYOGA" name="sender" id="sender" required>UPYOGA&nbsp;&nbsp;&nbsp;
  <input type="radio" class="float-left" value="NITGZP" name="sender" id="sender" required>NITGZP&nbsp;&nbsp;&nbsp;
  <input type="radio" class="float-left" value="NITEDU" name="sender" id="sender" required>NITEDU
      </div>
      <div class="4">
      <input type="submit" class="btn btn-warning" id="editbtn2" value="Edit">
      </div>
      </div>
      <div class="row">
      <div class="col-md-12" style="text-align:center;">
      <input id="toggle-trigger" type="checkbox" checked data-toggle="toggle" style="width:50%;"> 
      </div>
      </div>
  </body>
</html>
<script>
$(document).ready(function(){
    $('#editbtn').click(function(){
        var adm = $('#admissionsms').val();
        $.post('<?php echo base_url();?>index.php/apanel/smsinsert',{ admissionsms : adm },function(data){
            alert('Message succesfully submit');
            window.location.reload();
        });
    });
    $('#editbtn1').click(function(){
var fee = $('#feepayment').val();
$.post('<?php echo base_url();?>index.php/apanel/feeinsert',{ fee : fee },function(data){
    alert('succesfully submit');
    window.location.reload();
});
});
    $('#editbtn2').click(function(){
var senderid = $('#sender').val();
alert(senderid);
$.post('<?php echo base_url();?>index.php/apanel/senderid',{ senderid : senderid },function(data){
    alert('succesfully submit');
    window.location.reload();
});
});
</script>
