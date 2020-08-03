<div class="box_r">
<div class="wtitle">
      <h2><?php _e('Featured News'); ?></h2>
</div>

 <div class="feat">
<?php 
	$featcat = get_option('omg_fcat'); 
	$my_query = new WP_Query('category_name='.$fcat.'&showposts=5');
	while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID;
?>  
<div class="featuredpostinfo">

<a href="<?php the_permalink() ?>">	<?php feat_image();?></a>
<h3><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php echo substr($post->post_title,0,20); ?></a></h3></br>
<p>  <?php the_content_rss('', TRUE, '', 10); ?> </p>

</div>

<?php endwhile; ?>
</div>
</div>