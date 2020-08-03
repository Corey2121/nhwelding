<?php

$themename = "Wp3D";
$shortname = "omg";

$categories = get_categories('hide_empty=0&orderby=name');
$number_entries = array("Select a Number:","1","2","3","4","5","6","7","8","9","10", "12","14", "16", "18", "20" );
$wp_cats = array();
foreach ($categories as $category_list ) {
       $wp_cats[$category_list->cat_ID] = $category_list->cat_name;
}
array_unshift($wp_cats, "Choose a category"); 

$options = array (
 
array( "name" => $themename." Options",
	"type" => "title"),
	
	array( "name" => "Header",
	"type" => "section"),
array( "type" => "open"),
array( "type" => "close"),

array( "name" => "Homepage",
	"type" => "section"),
array( "type" => "open"),


array(   "name" => "Enable Featured Widget?",
      	 "id" => $shortname."_f",
     		 "type" => "select",		
	       "options" => array('Yes', 'No'),		
   		  "std" => "Yes"),

array( "name" => "Homepage featured category",
	"desc" => "Choose a category from which featured posts are drawn",
	"id" => $shortname."_gldcat",
	"type" => "select",
	"options" => $wp_cats,
	"std" => "Choose a category"),
	
array( "name" => "Number of posts",
    "desc" => "Select the number of posts to display .",
    "id" => $shortname."_gldct",
    "std" => "Select a Number:",
    "type" => "select",
    "options" => $number_entries),

array( "type" => "close"),
array( "name" => "Social Icons",
	"type" => "section"),
array( "type" => "open"),
	   
	array( 	"name" => "GoogleBuzz ID",
			"desc" => "Give your GoogleBuzz id.",
			"id" => $shortname."_buzz",
			"std" => "twitter",
            "type" => "text"), 
	
	array( 	"name" => "Twitter ID",
			"desc" => "Give your twitter id.",
			"id" => $shortname."_twit",
			"std" => "twitter",
            "type" => "text"), 
			
	array( 	"name" => "Facebook id",
			"desc" => "Give your Facebook Id.",
			"id" => $shortname."_fb",
			"std" => "",
            "type" => "text"), 	

	array( 	"name" => "feedburner id",
			"desc" => "Give your Feed Burner id .",
			"id" => $shortname."_feed",
			"std" => "",
            "type" => "text"), 		
			
	array( 	"name" => "Feedburner mail subscription id",
			"desc" => "Feedburner mail subscription id.",
			"id" => $shortname."_mail",
			"std" => "",
            "type" => "text"), 		
		
	array(  "type" => "close"),	
array( "name" => "Sidebar",
	"type" => "section"),
array( "type" => "open"),

array(   "name" => "Enable Featured Widget?",
      	 "id" => $shortname."_post",
     		 "type" => "select",		
	       "options" => array('Yes', 'No'),		
   		  "std" => "Yes"),

array(   "name" => "Enable Twitter Widget?",
      	 "id" => $shortname."_tw",
     		 "type" => "select",		
	       "options" => array('Yes', 'No'),		
   		  "std" => "Yes"),

array("name" => "Twitter Id",
			"desc" => "Enter your twitter ID.",
            "id" => $shortname."_twit",
            "std" => "drtemon",
            "type" => "text"),
array(   "name" => "Enable Video  Widget?",
      	 "id" => $shortname."_v",
     		 "type" => "select",		
	       "options" => array('Yes', 'No'),		
   		  "std" => "Yes"),

array("name" => "Video embed code",
			"desc" => "You can paste 310 x 240 video code in this box.You can find the embed code for videos on all video sharing sites. This will be automatically added to the sidebar.",
            "id" => $shortname."_video",
            "std" => "",
            "type" => "textarea"),   
            
array(   "name" => "Enable Ads Widget?",
      	 "id" => $shortname."_ad",
     		 "type" => "select",		
	       "options" => array('Yes', 'No'),		
   		  "std" => "Yes"),

array("name" => "Banner-1 Image",
			"desc" => "Enter your 125 x 125 banner image url here.",
            "id" => $shortname."_banner1",
            "std" => "",
            "type" => "text"),    
	   
	array("name" => "Banner-1 Url",
			"desc" => "Enter the banner-1 url here.",
            "id" => $shortname."_url1",
            "std" => "Banner-1 url",
            "type" => "text"),    
	      
	 
	array("name" => "Banner-2 Image",
			"desc" => "Enter your 125 x 125 banner image url here.",
            "id" => $shortname."_banner2",
            "std" => "",
            "type" => "text"),    
	   
	array("name" => "Banner-2 Url",
			"desc" => "Enter the banner-2 url here.",
            "id" => $shortname."_url2",
            "std" => "Banner-2 url",
            "type" => "text"), 

	array("name" => "Banner-3 Image",
			"desc" => "Enter your 125 x 125 banner image url here.",
            "id" => $shortname."_banner3",
            "std" => "",
            "type" => "text"),    
	   
	array("name" => "Banner-3 Url",
			"desc" => "Enter the banner-3 url here.",
            "id" => $shortname."_url3",
            "std" => "Banner-3 url",
            "type" => "text"),

	array("name" => "Banner-4 Image",
			"desc" => "Enter your 125 x 125 banner image url here.",
            "id" => $shortname."_banner4",
            "std" => "",
            "type" => "text"),    
	   
	array("name" => "Banner-4 Url",
			"desc" => "Enter the banner-4 url here.",
            "id" => $shortname."_url4",
            "std" => "Banner-4 url",
            "type" => "text"),
array( "type" => "close"),
array( "name" => "Footer",
	"type" => "section"),
array( "type" => "open"),
	
array( "name" => "Google Analytics Code",
	"desc" => "You can paste your Google Analytics or other tracking code in this box. This will be automatically added to the footer.",
	"id" => $shortname."_analytics",
	"type" => "textarea",
	"std" => ""),	
array( "type" => "close")
 
);


function mytheme_add_admin() {
 
global $themename, $shortname, $options;
 
if ( $_GET['page'] == basename(__FILE__) ) {
 
	if ( 'save' == $_REQUEST['action'] ) {
 
		foreach ($options as $value) {
		update_option( $value['id'], $_REQUEST[ $value['id'] ] ); }
 
foreach ($options as $value) {
	if( isset( $_REQUEST[ $value['id'] ] ) ) { update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); } else { delete_option( $value['id'] ); } }
 
	header("Location: admin.php?page=controlpanel.php&saved=true");
die;
 
} 
else if( 'reset' == $_REQUEST['action'] ) {
 
	foreach ($options as $value) {
		delete_option( $value['id'] ); }
 
	header("Location: admin.php?page=controlpanel.php&reset=true");
die;
 
}
}
 
add_theme_page($themename, $themename, 'administrator', basename(__FILE__), 'mytheme_admin');
}

function mytheme_add_init() {

$file_dir=get_bloginfo('template_directory');
wp_enqueue_style("functions", $file_dir."/functions/functions.css", false, "1.0", "all");
wp_enqueue_script("rm_script", $file_dir."/functions/rm_script.js", false, "1.0");

}
function mytheme_admin() {
 
global $themename, $shortname, $options;
$i=0;
 
if ( $_REQUEST['saved'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings saved.</strong></p></div>';
if ( $_REQUEST['reset'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings reset.</strong></p></div>';
 
?>
<div class="wrap rm_wrap">
<h2><?php echo $themename; ?> Settings</h2>
 
<div class="rm_opts">
<form method="post">
<?php foreach ($options as $value) {
switch ( $value['type'] ) {
 
case "open":
?>
 
<?php break;
 
case "close":
?>
 
</div>
</div>
<br />

 
<?php break;
 
case "title":
?>
<p>To easily use the <?php echo $themename;?> theme, you can use the menu below.</p>

 
<?php break;
 
case 'text':
?>

<div class="rm_input rm_text">
	<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
 	<input name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id'])  ); } else { echo $value['std']; } ?>" />
 <small><?php echo $value['desc']; ?></small><div class="clearfix"></div>
 
 </div>
<?php
break;
 
case 'textarea':
?>

<div class="rm_input rm_textarea">
	<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
 	<textarea name="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" cols="" rows=""><?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id']) ); } else { echo $value['std']; } ?></textarea>
 <small><?php echo $value['desc']; ?></small><div class="clearfix"></div>
 
 </div>
  
<?php
break;
 
case 'select':
?>

<div class="rm_input rm_select">
	<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
	
<select name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">
<?php foreach ($value['options'] as $option) { ?>
		<option <?php if (get_settings( $value['id'] ) == $option) { echo 'selected="selected"'; } ?>><?php echo $option; ?></option><?php } ?>
</select>

	<small><?php echo $value['desc']; ?></small><div class="clearfix"></div>
</div>
<?php
break;
 
case "checkbox":
?>

<div class="rm_input rm_checkbox">
	<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
	
<?php if(get_option($value['id'])){ $checked = "checked=\"checked\""; }else{ $checked = "";} ?>
<input type="checkbox" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" value="true" <?php echo $checked; ?> />


	<small><?php echo $value['desc']; ?></small><div class="clearfix"></div>
 </div>
<?php break; 
case "section":

$i++;

?>

<div class="rm_section">
<div class="rm_title"><h3><img src="<?php bloginfo('template_directory')?>/functions/images/trans.gif" class="inactive" alt=""/><?php echo $value['name']; ?></h3><span class="submit"><input name="save<?php echo $i; ?>" type="submit" value="Save changes" />
</span><div class="clearfix"></div></div>
<div class="rm_options">

 
<?php break;
 
}
}
?>
 
<input type="hidden" name="action" value="save" />
</form>
<form method="post">
<p class="submit">
<input name="reset" type="submit" value="Reset" />
<input type="hidden" name="action" value="reset" />
</p>
</form>
<div style="font-size:9px; margin-bottom:10px;"><b><?php echo $themename; ?> </b>: <a href="http://DuckThemes.com">DuckThemes</a></div>
 </div> 
 

<?php
}
?>
<?php
add_action('admin_init', 'mytheme_add_init');
add_action('admin_menu', 'mytheme_add_admin');
?>