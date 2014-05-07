<html>
<head>
<body>
	<?php
		if( !isset($posts) ){
	?>
	<p>There are currently no posts in this blog.</p>
	<?php
		}else{
			foreach($posts as $row){
	?>
	<h2><a href="<?=base_url()?>posts/post/<?=$row['postID']?>"><?=$row['title']?></a></h2>
	<p><?=substr(strip_tags($row['post']), 0, 200).".."?></p>
	<p><a href="<?=base_url()?>posts/post/<?=$row['postID']?>">Read More</a></p>
	<hr />
	<?php
		}
	}
	echo "</br>".$var;
	?>
</body>
</head>
</html>