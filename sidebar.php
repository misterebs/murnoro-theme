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
