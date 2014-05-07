<div id="main_profile_container">
<div id="avatar_box">
<img id="avatar_img" src="smiley.gif" alt="Smiley face" height="42" width="42">
<div class="verticalLine"></div>
</div>
<div id="user_info_box">
<p><?php echo $this->session->userdata('firstname') . " " . $this->session->userdata('lastname'); ?></p>
<p>Tracks created</p>
<p>Favorites: </p>
<p>Description</p>
</div>
</div>