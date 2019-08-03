<?php 
$view;
?>
<select class="form-control"  name="branchidd" id="branchidd">
	<option>-Select Branch-</option>
	<?php foreach($view as $row):?>
	<option value="<?php echo $row->clinic_id;?>"><?php echo $row->cilnic_name; ?></option>
<?php endforeach;?>
</select>