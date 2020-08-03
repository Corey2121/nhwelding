<div class="box ads">
    <div class="wtitle">
      <h2>
        <?php _e('Advertise'); ?>
      </h2>
    </div>
    <div class="content">
            
      <?php 
	$ban1 = get_option('omg_banner1'); 
	$url1 = get_option('omg_url1'); 
	?>
<?php 
	$ban2 = get_option('omg_banner2'); 
	$url2 = get_option('omg_url2'); 
	?>
<?php 
	$ban3 = get_option('omg_banner3'); 
	$url3 = get_option('omg_url3'); 
	?>
<?php 
	$ban4 = get_option('omg_banner4'); 
	$url4 = get_option('omg_url4'); 
	?>	

<a href="<?php echo ($url1); ?>" rel="bookmark" title=""><img src="<?php echo ($ban1); ?>" alt="" style="vertical-align:bottom;" /></a>

<a href="<?php echo ($url2); ?>" rel="bookmark" title=""><img src="<?php echo ($ban2); ?>" alt="" style="vertical-align:bottom;" /></a>

<a href="<?php echo ($url3); ?>" rel="bookmark" title=""><img src="<?php echo ($ban3); ?>" alt="" style="vertical-align:bottom;" /></a>

<a href="<?php echo ($url4); ?>" rel="bookmark" title=""><img src="<?php echo ($ban4); ?>" alt="" style="vertical-align:bottom;" /></a>

        <div class="clr"></div>
    </div>
    <!--/content -->
  </div>
  <!--/box -->