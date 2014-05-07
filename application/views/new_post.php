<html>
<head></head>
<body>

<form action="<?php echo base_url(); ?>posts/new_post" method="post">

	<p>Title: <input name="title" type="text" /></p>
	<p>Description:<br /><textarea name="post"></textarea></p>
	<p><input type="submit" value="Add Post" /></p>
</form>

</body>
</html>