<?php 
//print_r($view);
?>
<select class="form-control"  name="branchidd" id="branchidd">
	<option>-Select Course-</option>
	<?php foreach($view as $row):?>
	<option value="<?php echo $row->id;?>" ><?php echo $row->course_name; ?></option>
<?php endforeach;?>
</select>