<h2>Login</h2>
<?php if($error == 1){ ?>
<p>Your username/password does not match.</p>
<?php } ?>
<form action="<?php echo base_url() ?>users/login" method="post">
<p>Username: <input type="text" name="username" /></p>
<p>Password: <input type="password" name="password" /></p>
<p><input type="submit" value="Login" /></p>
</form>