<?php get_header(); ?>

<div id="columns">
  <div class="columns_bg">
    <div id="centercol">
      <?php $urlHome = get_bloginfo('template_directory'); ?>
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <div class="box post" id="post-<?php the_ID(); ?>">
        <div class="content">
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
            <?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
          </div>
          <!--/post-excerpt -->
          <div class="clr"></div>
        </div>
        <!--/content --> 
      </div>
      <!--/box -->
      <div class="clr"></div>
      <div class="box post">
        <div class="content border">
          <div class="pic fl">
            <?php
			$avtr=get_the_author_id();
			echo get_avatar( $avtr, $size = '80');
        ?>
          </div>
          <div class="post-author">
            <div class="author-descr">
              <h1 class="author">Author</h1>
              <p>
                <?php the_author_description(); ?>
              </p>
              <div class="author-details"><a href="<?php the_author_url(); ?>" target="_blank">Visit Authors Website</a> &nbsp;|&nbsp; <a href="<?php bloginfo('url'); ?>/author/<?php echo strtolower(get_the_author_nickname()); ?>">All Articles From This Author</a></div>
            </div>
            <!--/author-descr --> 
          </div>
          <!--/post-author -->
          <div class="clr"></div>
        </div>
        <!--/content -->
        <div class="clr"></div>
      </div>
      <!--/box -->
      
      <div class="box post-rel">
        <div class="content border">
          <div class="subcols">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('single-widget-area') ) : ?>
            <?php endif; ?>
          </div>
          <div class="clr"></div>
          <!--/subcols --> 
        </div>
        <!--/content --> 
      </div>
      <!--/box -->
      <?php comments_template(); ?>
      <?php endwhile; else: ?>
      <p>Sorry, no posts matched your criteria.</p>
      <?php endif; ?>
    </div>
    <!--/centercol -->
    <?php get_sidebar(); ?>
    <div class="clr"></div>
  </div>
</div>
<!--/columns -->
<?php get_footer(); ?>