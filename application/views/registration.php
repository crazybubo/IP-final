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
				<p>Registration success!</p>
<?php
		}
	}
?>