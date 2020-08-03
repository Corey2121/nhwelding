<?php get_header(); ?>
<?php
	global $wp_query;
	$curauth = $wp_query->get_queried_object();
	
	$urlHome = get_bloginfo('template_directory');
?>

<div id="columns">
  <div class="columns_bg">
    <div id="centercol">
      <div class="box post">
        <div class="post-block">
          <div class="post-title full">
            <div class="fl">
              <h1><?php echo $curauth->display_name; ?></h1>
            </div>
            <div class="fr">
              <h1 class="author">Author</h1>
            </div>
            <div class="clr"></div>
          </div>
        </div>
        <div class="content">
          <div class="pic fl">
            <?php
$avtr=get_the_author_id();
echo get_avatar( $avtr, $size = '80');
?>
          </div>
          <div class="post-author">
            <div class="author-descr">
              <p><?php echo $curauth->user_description; ?></p>
              <div class="author-details"><a href="<?php echo $curauth->user_url; ?>" target="_blank">Visit Authors Website</a></div>
            </div>
            <!--/author-descr --> 
          </div>
          <!--/post-author -->
          <div class="clr"></div>
        </div>
      </div>
      <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
      <div class="box post" id="post-<?php the_ID(); ?>">
        <div class="content">
          <div class="post-comments"><a href="<?php the_permalink(); ?>" class="post-view">
            <?php comments_number(0, 1, '%'); ?>
            </a></div>
          <div class="post-title">
            <h2><a href="<?php the_permalink(); ?>" rel="title" title="<?php the_title_attribute(); ?>">
              <?php the_title(); ?>
              </a></h2>
            <div class="post-info">
              <?php the_time('F, d, Y'); ?>
              •
              <?php the_category(', ') ?>
              • 
              Posted by:
              <?php the_author_posts_link(); ?>
            </div>
            <!--/post-date --> 
          </div>
          <!--/post-title -->
          <div class="clr"></div>
          <?php if ( has_post_thumbnail() ) { ?>
        <div class="pic fl"><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
        		<?php the_post_thumbnail('mag'); ?>
          </a></div>
        <?php } ?>
          
          <!--/post-pic -->
          <div class="post-excerpt">
            <?php the_excerpt(); ?>
          </div>
          <!--/post-excerpt -->
          <div class="post-leav"><a href="<?php the_permalink(); ?>" title="<?php _e('Leave Your'); ?> Response">Continue reading...</a></div>
          <div class="clr"></div>
        </div>
        <!--/content --> 
      </div>
      <div class="bg"></div>
      <!--/box -->
      <?php endwhile; ?>
      <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
      <?php /*
        <ul>
			<li><?php next_posts_link('&laquo; Older Entries') ?></li>
			<li><?php previous_posts_link('Newer Entries &raquo;') ?></li>
		</ul>
		*/ ?>
      <?php else : ?>
      <div class="box post">
        <div class="content">
          <div class="post-title">
            <h1>No Posts Were Found</h1>
          </div>
        </div>
      </div>
      <?php endif; ?>
    </div>
    <!--/centercol -->
    <?php get_sidebar(); ?>
    <div class="clr"></div>
  </div>
</div>
<!--/columns -->
<?php get_footer(); ?>