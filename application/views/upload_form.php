<?php echo $error; ?>

<?php echo form_open_multipart('upload/do_upload'); ?>
<p><?php
	$data_form = array(
		'name'=>'title',
		'style'=>'width: 200px; margin-left: 46px;'
	);
	echo form_label('Title:', 'title');
	echo form_input($data_form);
?>
</p>
<p>
<?php	
	$data_form = array(
		'name'=>'userfile'
	);
	echo form_upload($data_form);
?>
</p>
<p>
	<?php		
		$data_form = array(
			'name'=>'description',
			'style'=>'width: 300px; margin-left: 5px;'
		);
		echo form_label('Description:', 'description');
		echo form_input($data_form);
	?>
</p>
<?php
?> </br>
<?php echo form_submit('', 'Upload'); ?>