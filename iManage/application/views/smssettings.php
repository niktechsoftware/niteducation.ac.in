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
  <form action="<?php echo base_url();?>index.php/apanel/smsinsert" method="post">
  <div class="row" style="margin:20px;">
  <div class="col-md-3">
      <label>Admission SMS:</label>
      </div> 
      <div class="col-md-6">
            <textarea rows="4" cols="85" name="admissionsms" required>
      </textarea>
      </div>
     
  </div>
      <div class="row" style="margin:20px;">
  <div class="col-md-3">
      <label>Fee Payment:</label>
      </div> 
      <div class="col-md-6">
            <textarea rows="4" cols="85" name="feepayment" required>
      </textarea>
      </div>
  </div> 
      <div class="row" style="margin:20px;">
  <div class="col-md-3">
      <label>Change Sender Id:</label>
      </div> 
      <div class="col-md-9">
      <input type="radio" value="NIELIT" name="sender" required>NIELIT&nbsp;&nbsp;&nbsp;
  <input type="radio" class="float-left" value="UPYOGA" name="sender" required>UPYOGA&nbsp;&nbsp;&nbsp;
  <input type="radio" class="float-left" value="NITGZP" name="sender" required>NITGZP&nbsp;&nbsp;&nbsp;
  <input type="radio" class="float-left" value="NITEDU" name="sender" required>NITEDU
      </div></div>
      <div class="row">
      <div class="col-md-12" style="text-align:center;">
      <input type="submit" class="btn btn-info" >
      <!-- <input id="toggle-trigger" type="checkbox" checked data-toggle="toggle" style="width:50%;"> -->
      </div>
      </div>
      </form>
  </body>
</html>