<?php get_header(); ?>

    <section id="content-main">
	     <div class="container">
		       <div class="row">
			          <div class="col-md-8">
                  <?php if(have_posts()): ?>
                    <?php while(have_posts()) : the_post(); ?>
				              <h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
			                    <div class="entry-meta">
			                        <span class="post-content"><?php the_content(); ?></span>
                              <br class="clear">
                                <?php edit_post_link(); ?>
				                  </div><!-- Entry Meta -->
                    <?php endwhile; ?>
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
