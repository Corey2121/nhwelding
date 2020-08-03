<div id="rightcol">
  
  <h2> Quality Service</h2>
<img src="http://nhwelding.com/wp-content/uploads/2011/08/welding.png" alt="micro welding"/> 
  <div id="subscribe">
	
		
		
		<div class="clear"></div>
		
	</div> <!--end #subscribe-->
  
<?php if(get_option('omg_ad') == "Yes")  {include (TEMPLATEPATH . '/sidebarads.php');}  ?>
     <div class="clr"></div>

<?php if(get_option('omg_f') == "Yes")  {include (TEMPLATEPATH . '/featured.php');}  ?>

     <div class="clr"></div>

<?php if(get_option('omg_tw') == "Yes")  {include (TEMPLATEPATH . '/tweet.php');}  ?>


     <div class="clr"></div>
<?php if(get_option('omg_v') == "Yes")  {include (TEMPLATEPATH . '/video.php');}  ?>



     <div class="clr"></div>
    <!--/content -->
  <!--/box -->
  <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
  <?php endif; ?>
 
  <!--/box -->
</div>

<!--/rightcol -->