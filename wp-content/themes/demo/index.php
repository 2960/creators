<?php get_header(); ?>

<div id="wrap">
  <div id="page_container" class="container page_container">
    <div class="row">
      <div class="col-md-24 page_wrap">
        <div class="row">
          <div class="col-md-18 page_main">
            <div id="contentInner">
              <main>
                <article>
                  <section>
                    <?php get_template_part('itiran');?>
                  </section>
                  <!--/section-->
                  <!--ページナビ-->
                  <?php if (function_exists("pagination")) {
          pagination($wp_query->max_num_pages);
          } ?>
                </article>
              </main>
            </div><!-- contentInner -->
          </div><!-- col-md-18 page_main -->
          <!-- /#contentInner -->
          <?php get_sidebar(); ?>
        </div><!-- row -->
      </div><!-- col-md-24 page_wrap -->
    </div><!-- row -->
  </div><!-- container -->
<!--/#content -->
<?php get_footer(); ?>
