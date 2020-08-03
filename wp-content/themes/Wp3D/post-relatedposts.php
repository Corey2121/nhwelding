<?php
global $options;
foreach ($options as $value) {
if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_settings( $value['id'] ); }
}
?>
<div id="xs-related-posts">

<h4>Related Posts</h4>

<ul>
<?php foreach(get_the_category() as $category){ $cat = $category->cat_ID; } query_posts('cat=' . $cat . '&orderby=rand&showposts=4'); ?>
<?php while (have_posts()) : the_post();
$thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large'); ?>

<?php if ( has_post_thumbnail() ) {  ?>

<li>
<?php if ($xs_enable_timthumb == "true") { ?>

<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/timthumb/timthumb.php?src=<?php echo $thumbnail[0]; ?>&amp;h=100&amp;w=130" height="100" width="130" alt="<?php the_title(); ?>" /></a>

<?php } else { ?>

<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><img src="<?php echo $thumbnail[0]; ?>" width="130" height="100" alt="<?php the_title(); ?>" /></a>

<?php } ?>
</li>

<? } ?>

<?php endwhile; wp_reset_query(); ?>
</ul>
<div class="clear"></div>
</div><!-- /xs-related-posts -->