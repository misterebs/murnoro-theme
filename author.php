<?php get_header(); ?>

    <section id="content-main">
	     <div class="container">
		       <div class="row">
			          <div class="col-md-8">
                  <?php if(have_posts()): the_post(); ?>
                      <h1><?php _e( 'Author Archives for ', 'murnoro' ); echo get_the_author(); ?></h1>
                        <?php if ( get_the_author_meta('description')) : ?>
                        <?php echo get_avatar(get_the_author_meta('user_email')); ?>
                        <h2><?php _e( 'About ', 'murnoro' ); echo get_the_author() ; ?></h2>
                        <?php echo wpautop( get_the_author_meta('description') ); ?>
                        <?php endif; ?>
                        <?php rewind_posts(); while (have_posts()) : the_post(); ?>
                      <h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
			                    <div class="entry-meta">
			                        <span class="post-category"><i class="fa fa-folder-open"></i><?php echo the_category(', '); ?></span>
			                        <span class="post-date"><i class="fa fa-calendar"></i> <a href="<?php the_permalink($post->ID); ?>"><?php the_time('F j, Y'); ?></a></span>
  			                      <span class="post-author"><i class="fa fa-user"></i> <a href="<?php echo get_author_posts_url(get_the_author_meta(ID)); ?>"><?php the_author(); ?></a></span>
				                  </div><!-- Entry Meta -->
                    <?php endwhile; ?>
                  <?php else: ?>
                    <?php _e( 'Sorry, nothing to display.', 'murnoro' ); ?>
                  <?php endif; ?>
			          </div><!-- col-md-8 -->

			<aside id="widget-main">
			<div class="col-md-4">
			<h3 class="widget-title"></h3>
      <div class="widget-meta">
			<ul>
        <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('sidebar-primary')) : else : ?>
        <?php endif; ?>
			</ul>
			</div>
		</div><!-- col-md-4 -->
		</aside><!-- Aside -->
		</div><!-- row -->
	</div><!-- Container -->
    </section><!-- Section -->

<?php get_footer(); ?>
