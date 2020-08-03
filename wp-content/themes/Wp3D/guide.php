<?php
add_action('admin_menu', 'user_guide');

function user_guide() {
	add_theme_page('How to use Wp3D  theme', 'Wp3D User Guide', 8, 'user_guide', 'user_guide_options');
	
}

function user_guide_options() {
?>
<div class="wrap">
<div class="opwrap" style="  width:80%; padding:0px; " >

<div id="wrapr">

<div class="headsection">
<h2 style="clear:both; padding:0px 10px 10px 0px; color:#444; font-size:22px; ">Wp3D: User guide</h2>
</div>

<div class="gblock">

  <b>Thanks for using our Wordpress theme in your site: For more beautiful themes Visit Our Website Gallery @ 
	<a target="_blank" href="http://duckthemes.com">Duckthemes.com </a>You will find what you looking for.</b><h2>Home page customization:</h2>
  <h3>Featured Gallery Image setting.</h3>
	<p><b>First you need to allow featured slider to show in the home page simply go to wp-admin/Wp3D option/ home page option ..</b></p>
  <ol><li> <b>Images size:</b> The size of image should be 960 *350 pixels.</li>
  <li>Add Featured Image from The media Keys in the wordpress Editor Template.</li>
  </ol>
  <h3>Post Image Thumbnail setting.</h3>
  <ol><li><b>Image size:</b> The image size should be 230* 150 pixels</li>
  <li>Add Featured Image from The media Keys in the wordpress Editor Template.</li>
  </ol>
  <p>&nbsp;</p>
 
   <div class="clear"> </div>
 
  </div>



</div>

</div>

<?php }; ?>