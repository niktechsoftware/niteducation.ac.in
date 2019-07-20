<!DOCTYPE html>
<html>
  <head>
    <title>SMS Setting</title>
  </head>
  <body>
  <div class="row" style="margin:20px;">
  <div class="col-md-3">
      <label>Admission SMS:</label>
      </div> 
      <div class="col-md-9">
            <textarea rows="4" cols="50">
      </textarea>
      </div></div>
      <div class="row" style="margin:20px;">
  <div class="col-md-3">
      <label>Admission SMS:</label>
      </div> 
      <div class="col-md-9">
            <textarea rows="4" cols="50">
      </textarea>
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
      <div class="col-md-12">
      <input type="checkbox" data-toggle="toggle" data-on="Enabled" data-off="Disabled">
<input type="checkbox" id="toggle-two">
<script>
  $(function() {
    $('#toggle-two').bootstrapToggle({
      on: 'Enabled',
      off: 'Disabled'
    });
  })
</script>
      </div>
      </div>
  </body>
</html>