<div class="box ads">
    <div class="wtitle">
      <h2><?php _e('Twitter Feeds'); ?></h2>
    </div>
 <div class="content">

	<?php
	$twit = get_option('omg_twit'); 
	include('twitter.php');?>
	<?php if(function_exists('twitter_messages')) : ?>
    <?php twitter_messages("$twit") ?>
     <?php endif; ?>
	</div>
</div>