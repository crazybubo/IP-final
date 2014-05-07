<!DOCTYPE html>
<html>
<head>
<title>Gumpod homepage</title>
<style type="text/css">
	html{
		margin: 0;
		padding: 0;
		height: 100%;
		width: 100%;
	}

	body{

		margin: 0;
		padding: 0;
		width: 100%;
		height: 100%;
	}

	.verticalLine {

		width: 1px;
		height: 100%;
    	border-left: thick solid black;
    	border-width: 3px;
    	display: inline-block;
	}
	
	#headerMenuContainer{

		width: 100%;
		height: 5%;
		margin-top: 2%;
		text-align: center;
	}

	#headerMenu{

		width: 100%;
		height: 100%;
		margin: 0;
		padding: 0;
		list-style: none;
		display: inline-block;
	}

	#headerMenu li{

		width: 13%;
		height: 100%;
		margin-right: 5%;
		border-style: outset;
		display: inline-block;
	}

	#headerMenu span{

		position: relative;
		line-height: 2em;
		z-index: 1;
		font-weight: bold;
	}

	#headerMenu li a{

		width: 100%;
		height: 100%;
		position: relative;
		bottom: 100%;
		z-index: 2;
		display: block;
	}

	#userBar{

		width: 100%;
		height: 1%;
		text-align: right;
	}

	#main_profile_container{

		width: 100%;
		height: 250px;
		margin-top: 2%;
	}

	#avatar_box{

		width: 220px;
		height: 250px;
		display: inline-block;
		float: left;
	}

	#avatar_img{

		width: 95%;
		height: 100%;
		display: inline-block;
	}

	#user_info_box{

		width: 60%;
		height: 100%;
		display: inline-block;
		float: left;
	}
</style>
</head>
<body>
<div id="headerMenuContainer">
	<ul id="headerMenu">
		<li>
			<span>Home</span>
			<a href="<?php echo base_url(); ?>"></a>
		</li>
		<li>
			<span>Profile</span>
			<a href="<?php echo base_url(); ?>profiles/view_profile"></a>
		</li>
		<li>
			<span>Favorites</span>
			<a href="http://www.w3schools.com"></a>
		</li>
	</ul>
</div>
<?php
	if($this->session->userdata('username')){		
			//$username = $this->session->userdata('username');
			$fname = $this->session->userdata('firstname');
			$lname = $this->session->userdata('lastname');
?>
<div id="userBar">
	<span id="greetingSpan"><?php echo "Hello, <a href='profiles/view_profile'>". $fname . " " . $lname . "</a>!"?></span>
	<a href="<?php echo base_url()?>logout">(Log out)</a>
</div>
<?php } else{ ?>
<div id="userBar">
	<span id="greetingSpan">Hello, guest!</span>
	<a href="<?php echo base_url()?>login">(Log in)</a>/<a href="<?php echo base_url()?>registration">(Register)</a>
</div>
<?php } ?>