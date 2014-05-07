<html>
<head></head>
<body>
<?php 
	if(!count($post)){
?>
<p>This page was accessed incorrectly.</p>
<?php
	} else {
?>
<h2>
<?php
	echo $post['title'];
?>
</h2>
<?php
	echo $post['post'];
?>
<?php
	}
?>
</body>
</html>