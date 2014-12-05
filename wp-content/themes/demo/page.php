<?php get_header(); ?>
<div id="wrap" class="wrapper">
  <div id="page_container" class="container page_container">
    <div class="row">
      <div class="col-md-24 page_wrap">
              <!--ぱんくず -->
              <ul id="breadcrumb" class="breadcrumb"><li><a href="<?php echo home_url(); ?>">ホーム</a></li>
                <?php foreach ( array_reverse(get_post_ancestors($post->ID)) as $parid ) { ?>
                <li><a href="<?php echo get_page_link( $parid );?>" title="<?php echo get_page($parid)->post_title; ?>"> <?php echo get_page($parid)->post_title; ?></a></li>
                <?php } ?>
                <li><?php the_title(); //タイトル ?></li>
              </ul>
              <!--/ ぱんくず -->
          <div class="col-md-16 page_main">
            <div class="post">
              <article>
                <section>
                  <!--ループ開始 -->
                  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                  <h1 class="entry-title">
                    <?php the_title(); //タイトル ?>
                  </h1>
                  <?php the_content(); //本文 ?>
                </section>
                <!--/section-->
              </article>
              <?php wp_link_pages(); ?>
              <?php endwhile; else: ?>
              <p>記事がありません</p>
              <?php endif; ?>
              <!--ループ終了 -->

            </div><!-- post -->
          </div><!-- col-md-18 page_main -->

              <!--/post-->
          <!-- /#contentInner -->
          <?php get_sidebar(); ?>
        </div><!-- row -->
      </div><!-- col-md-24 page_wrap -->
  </div><!-- container -->
<!--/#content -->
  <section id="sec-0" class="random_box">
    <div id="page1" class="container main_cont_00">
      <div class="row">
        <div class="col-sm-24 main_cont00_h2">
          <h2 class="text-center margin-top-40px"><i>RANDOM</i>ランダム記事</h2>
        </div><!-- col-sm-24 -->
        <div class="col-sm-24 main_cont00_box">
          <?php query_posts('showposts=6&orderby=rand');?>
          <?php if(have_posts()):while(have_posts()):the_post();?>
          <div class="col-sm-4 main_cont_00_sec">
            <a href="<?php the_permalink() ?>" class="article_linker"></a>
            <div class="main_cont_00_img">
            <?php if ( has_post_thumbnail() ): // サムネイルを持っているときの処理 ?>
            <?php if(is_mobile()) { //スマホの場合 ?>
            <?php the_post_thumbnail( 'thumb150', array('class' => 'img-responsive center-block')); ?>
            <?php } else { //PCの場合 ?>
            <?php the_post_thumbnail( 'thumb245', array('class' => 'img-responsive center-block')); ?>
            <?php } ?>
            <?php else: // サムネイルを持っていないときの処理 ?>
            <?php if(is_mobile()) { //スマホの場合 ?>
            <p><img src="<?php echo get_template_directory_uri(); ?>/images/no-img-small.jpg" alt="no image" title="no image" width="100%" height="auto" /></p>
            <?php } else { //PCの場合 ?>
            <p><img src="<?php echo get_template_directory_uri(); ?>/images/no-img-big.jpg" alt="no image" title="no image" width="100%" height="auto" /></p>
            <?php } ?>
            <?php endif; ?>
            </div>
            <p><?php the_title();?></p>
          </div><!-- col-sm-6 -->
          <?php endwhile;endif;?>
        </div><!-- col-sm-24 -->
        <div class="clearfix"></div>
      </div><!-- row -->
    </div><!-- container-fluid -->
  </section>

<?php get_footer(); ?>
