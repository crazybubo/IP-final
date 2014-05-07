<html>
<head></head>
<body>

<?php if($success==1){ ?>
<p>This post has been updated!</p>
<?php } ?>

<form action="<?php echo base_url(); ?>posts/edit_post/<?php echo $post['postID'] ?>" method="post">

	<p>Title: <input name="title" type="text" value="<?php echo $post['title'] ?>" /></p>
	<p>Description:<br /><textarea name="post"><?php echo $post['post'] ?></textarea></p>
	<p><input type="submit" value="Edit Post" /></p>
</form>

</body>
</html>