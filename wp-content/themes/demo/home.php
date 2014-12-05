<?php get_header(); ?>
<div id="wrap" class="wrapper">
  <div id="page_container" class="container page_container">
    <div class="row">
      <div class="col-md-24 page_wrap">
  <section id="sec-0" class="random_box">
    <div id="page1" class="container main_cont_00">
      <div class="row">
        <div class="col-sm-24 main_cont00_h2">
          <h2 class="text-center margin-top-40px"><i>RANDOM</i>ランダム記事</h2>
        </div><!-- col-sm-24 -->
        <div class="col-sm-24 main_cont00_box">
          <?php query_posts('showposts=6&orderby=rand');?>
          <?php if(have_posts()):while(have_posts()):the_post();?>
          <div class="col-sm-4 col-xs-12 main_cont_00_sec">
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
          <?php wp_reset_query(); ?>
        </div><!-- col-sm-24 -->
        <div class="clearfix"></div>
      </div><!-- row -->
    </div><!-- container-fluid -->
  </section>
            <div id="breadcrumb" class="breadcrumb">
              <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="<?php echo home_url(); ?>" itemprop="url"> <span itemprop="title">ホーム</span> </a></li>
              <?php /*--- カテゴリーが階層化している場合に対応させる --- */ ?>
              <?php $postcat = get_the_category(); ?>
              <?php $catid = $postcat[0]->cat_ID; ?>
              <?php $allcats = array($catid); ?>
              <?php
                while(!$catid==0) { /* すべてのカテゴリーIDを取得し配列にセットするループ */
                    $mycat = get_category($catid);  /* カテゴリーIDをセット */
                    $catid = $mycat->parent;  /* 上で取得したカテゴリーIDの親カテゴリーをセット */
                    array_push($allcats, $catid);
                }
                array_pop($allcats);
                $allcats = array_reverse($allcats);
                ?>
              <?php /*--- 親カテゴリーがある場合は表示させる --- */ ?>
              <?php foreach($allcats as $catid): ?>
              <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="<?php echo get_category_link($catid); ?>" itemprop="url"> <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb" itemprop="title"><?php echo get_cat_name($catid); ?></span> </a></li>
              <?php endforeach; ?>
            </div>
            <!--/kuzu-->
          <div class="col-md-16 page_main">
              <main>
                    <?php get_template_part('itiran-home');?>
                  <!-- /section -->
                  <!-- ページナビ -->
                  <div class="text-center">
                  <?php if (function_exists("pagination")) {
                  pagination($wp_query->max_num_pages);
                  } ?>
                  </div>
              </main>
          </div><!-- col-md-18 page_main -->
          <!-- /#contentInner -->
          <?php get_sidebar(); ?>
      </div><!-- col-md-24 page_wrap -->
    </div><!-- row -->
  </div><!-- container -->
<!-- /#content -->
<?php get_footer(); ?>
