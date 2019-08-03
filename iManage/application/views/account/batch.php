<?php 
//print_r($view);
?>
<select class="form-control"  name="branchidd" id="branchidd">
	<option>-Select Batch-</option>
	<?php foreach($view as $row):?>
	<option value="<?php echo $row->id;?>" ><?php echo $row->batch_no; ?></option>
<?php endforeach;?>
</select>