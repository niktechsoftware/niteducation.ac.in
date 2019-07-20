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
      <div class="col-md-6">
            <textarea rows="4" cols="50">
      </textarea>
      </div>
      <div class="3">
      <button type="submit" value="edit">Edit</button>
  <button type="reset" value="delete">Delete</button>
  </div></div>
      <div class="row" style="margin:20px;">
  <div class="col-md-3">
      <label>Fee Payment:</label>
      </div> 
      <div class="col-md-6">
            <textarea rows="4" cols="50">
      </textarea>
      </div>
      <div class="3">
      <button type="submit" value="edit">Edit</button>
  <button type="reset" value="delete">Delete</button>
  </div></div>
      <div class="row" style="margin:20px;">
  <div class="col-md-3">
      <label>Change Sender Id:</label>
      </div> 
      <div class="col-md-9">
      <input type="checkbox" value="NIELIT">NIELIT<br>
  <input type="checkbox" value="UPYOGA">UPYOGA<br>
  <input type="checkbox" value="NITGZP">NITGZP<br>
  <input type="checkbox" value="NITEDU">NITEDU
      </div></div>
      <div class="row">
      <div class="col-md-12" style="text-align:center;">
      <input id="toggle-trigger" type="checkbox" checked data-toggle="toggle">
      </div>
      </div>
  </body>
  <script>
  //If you want to change it dynamically
  function toggleOn() {
    $('#toggle-trigger').bootstrapToggle('on')
  }
  function toggleOff() {
    $('#toggle-trigger').bootstrapToggle('off')  
  }
  //if you want get value
  function getValue()
  {
   var value=$('#toggle-trigger').bootstrapToggle().prop('checked');
   console.log(value);
  }
</script>
</html>