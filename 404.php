<?php get_header(); ?>

    <section id="content-main">
	     <div class="container">
		       <div class="row">
			          <div class="col-md-8">
                  <h1><?php _e( 'Page not found', 'murnoro' ); ?></h1>
                  <h2 class="entry-title"><a href="<?php echo home_url(); ?>"><?php _e( 'Return home ?', 'murnoro' ); ?></a></h2>
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
