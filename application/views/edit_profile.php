<?php
	if( !isset($data) ){
?>
		<form action="<?php echo base_url() ?>users/registration" method="post">
			<p>Username: <input type="text" name="username" /></p>
			<p>Password: <input type="password" name="password" /></p>
			<p>Password: <input type="password" name="repeatPassword" /></p>
			<p>First Name: <input type="text" name="firstname" /></p>
			<p>Last Name: <input type="text" name="lastname" /></p>
			<p><input type="submit" value="Login" /></p>
		</form>
<?php
	}else{
		if(isset($data['error'])){
?>
		<form action="<?php echo base_url() ?>users/registration" method="post">
			<p>Username: <input type="text" name="username" value="<?php echo $_POST['username'] ?>"/></p>
			<p>Password: <input type="password" name="password" value=""/></p>
			<p>Password: <input type="password" name="repeatPassword" value=""/></p>
			<p>First Name: <input type="text" name="firstname" /></p>
			<p>Last Name: <input type="text" name="lastname" /></p>
			<p><input type="submit" value="Login" /></p>
		</form>
<?php		
		} else if(isset($data['success'])){
			
?>
				<p>Your has been updated!</p>
<?php
		}
	}
?>




<?php if($data['success']==1){ ?>

<?php } ?>

<form action="<?php echo base_url(); ?>profiles/edit_profile ?>" method="post">

	<p>First name:<br /><input type="text" name="fname"><?php echo $post['post'] ?></input></p>
	<p>Last name:<br /><input type="text" name="lname"><?php echo $post['post'] ?></textarea></p>
	<p>Avatar:<br /><input type="text" name="avatar_route"><?php echo $post['post'] ?></input></p>
	<p>Description:<br /><textarea name="post"><?php echo $post['post'] ?></textarea></p>

	<p><input type="submit" value="Edit Post" /></p>
</form>

</body>
</html>