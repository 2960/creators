<?php get_header(); ?>
<div id="wrap" class="wrapper">
  <div id="page_container" class="container page_container">
    <div class="row">
      <div class="col-sm-24 page_wrap">
          <div class="col-sm-18 pull-right page_main page_wrapper">
              <main>
                <article>
                  <section>
                    <h2> <!--検索結果数-->
                      「<?php echo esc_html($s); ?>」の検索結果 <?php echo $wp_query->found_posts; ?> 件 </h2>
                    <!--検索結果数終わり-->
                    <?php get_template_part('itiran');?>
                  </section>
                  <!--/section-->
                  <!--ページナビ-->
                  <?php if (function_exists("pagination")) {
          pagination($wp_query->max_num_pages);
          } ?>
                </article>
              </main>
          </div><!-- col-sm-18 page_main -->
          <!-- /#contentInner -->
          <?php get_sidebar(); ?>
      </div><!-- col-sm-24 page_wrap -->
    </div><!-- row -->
  </div><!-- container -->
<!--/#content -->
<?php get_footer(); ?>
