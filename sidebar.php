<section class="margin-wrapper">

  <aside id="sidebar" >

  <?php if ( is_active_sidebar( 'primary-widget-area' ) ) : ?>
    <div id="primary" class="widget-area">
      <ul class="xoxo" class="sidebar-list-grid">
      <?php dynamic_sidebar( 'primary-widget-area' ); ?>
      </ul>
    </div>
  <?php endif; ?>

  </aside>

</section>
