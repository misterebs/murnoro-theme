<?php get_header(); ?>
    <section id="content-main">
	     <div class="container">
		       <div class="row">
			          <div class="col-md-8">
                  <?php if(have_posts()): ?>
                    <?php while(have_posts()) : the_post(); ?>
				              <h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
			                    <div class="entry-meta">
			                        <span class="post-category"><i class="fa fa-folder-open"></i> <?php echo the_category(', '); ?></span>
			                        <span class="post-date"><i class="fa fa-calendar"></i> <a href="<?php the_permalink($post->ID); ?>"><?php the_time('F j, Y'); ?></a></span>
  			                      <span class="post-author"><i class="fa fa-user"></i> <?php the_author_posts_link(); ?></span>
				                      <span class="post-content"><?php the_excerpt(); ?></span>
				                  </div><!-- Entry Meta -->
                    <?php endwhile; ?>
                  <?php endif; ?>
			          </div><!-- col-md-8 -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
