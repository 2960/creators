<?php get_header(); ?>
<div id="wrap" class="wrapper">

<!--   スマホ用header広告 -->
  <?php if(is_mobile()) { //スマホの場合 ?>
<div class="smp_adsense">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- スマホ用header広告 -->
<ins class="adsbygoogle"
     style="display:inline-block;width:320px;height:50px;margin: 0 auto;"
     data-ad-client="ca-pub-2144588947261913"
     data-ad-slot="3008037381"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
  <?php } else { //PCの場合 ?>
  <?php } ?>

  <div id="page_container" class="container page_container">
    <div class="row">
      <div class="col-sm-24 page_wrap">
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
        <!--ぱんくず -->
        <ul id="breadcrumb" class="breadcrumb">
            <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="<?php echo home_url(); ?>" itemprop="url"><span itemprop="title">ホーム</span></a></li>
          <?php $postcat = get_the_category(); ?>
          <?php $catid = $postcat[0]->cat_ID; ?>
          <?php $allcats = array($catid); ?>
          <?php
          while(!$catid==0) {
              $mycat = get_category($catid);
              $catid = $mycat->parent;
              array_push($allcats, $catid);
          }
          array_pop($allcats);
          $allcats = array_reverse($allcats);
          ?>
          <?php foreach($allcats as $catid): ?>
          <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
          <a href="<?php echo get_category_link($catid); ?>" itemprop="url"> <span itemprop="title"><?php echo get_cat_name($catid); ?></span></a></li>
          <?php endforeach; ?>
      <li><?php the_title(); //タイトル ?></li>
        </ul>
        <!--/ ぱんくず -->
          <div class="col-sm-16 page_main">
            <main>
              <article>
                <div class="post">

                  <section>
                    <!--ループ開始 -->
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <div class="blogbox">
                      <ul class="list-inline">
                        <li><i class="fa fa-calendar"></i>&nbsp;<?php the_time('Y/m/d') ?></li>
                        <li><?php if ($mtime = get_mtime('Y/m/d')) echo ' <i class="fa fa-repeat"></i>&nbsp; ' , $mtime; ?></li>
                        <li><i class="fa fa-spinner fa-spin"></i>&nbsp;<span id="cate-icon" class="<?php $cat = get_the_category(); $cat = $cat[0]; {echo "$cat->category_nicename";} ?>"><?php the_category(', ') ?></span>&nbsp;</li>
                        <li><i class="fa fa-cog fa-spin"></i>&nbsp;<?php the_tags('', ', '); ?></li>
                        <li><i class="fa fa-thumbs-o-up"></i><?php wpfp_link() ?></li>
                      </ul>

                    </div>
                    <div class="col-sm-2 page_singleh1 text-center">
                      <i class="fa fa-file-text-o"></i>
                    </div>
                    <div class="col-sm-22 page_singleh1">
                      <h1 class="entry-title"><?php the_title(); //タイトル ?></h1>

                    </div>
                    <div class="clearfix"></div>
                    <div class="col-sm-24 page_billimg margin-bottom-30px">
                      <?php the_post_thumbnail( 'full', array('class' => 'img-responsive')); ?>
                    </div>
                    <?php get_template_part('sns'); //ソーシャルボタン読み込み ?>
                  <div class="center-block text-center margin-topbottom-30px">
                  <div class="margin-bottom-40px">

<a href="http://px.a8.net/svt/ejp?a8mat=2BYSOE+CM9RCI+CO4+ZVD75" target="_blank">
<img border="0" width="100%" height="auto" alt="" src="http://www24.a8.net/svt/bgt?aid=141031598763&wid=001&eno=01&mid=s00000001642006025000&mc=1"></a>
<img border="0" width="1" height="1" src="http://www10.a8.net/0.gif?a8mat=2BYSOE+CM9RCI+CO4+ZVD75" alt="">

                  </div>
                  </div>
                  <div class="post_cont margin-topbottom-30px">
                      <?php the_content(); //本文 ?>
                  </div>
                  <!--/section-->
                  <?php wp_link_pages(); ?>
                  <div class="col-sm-12 margin-topbottom-30px ad_box">
                    <?php get_template_part('ad'); //アドセンス読み込み ?>
                  </div>
                    <?php if(is_mobile()) { //スマホの場合 ?>
                    <?php } else { //PCの場合 ?>
                    <div class="col-sm-12 margin-topbottom-30px">
                      <?php get_template_part('ad'); //アドセンス読み込み ?>
                    </div>
                    <?php } ?>
                  </section>
                  <?php get_template_part('sns'); //ソーシャルボタン読み込み ?>

                  <?php endwhile; else: ?>
                  <p>記事がありません</p>
                  <?php endif; ?>
                  <!--ループ終了-->


                  <?php if( comments_open() || get_comments_number() ){
                  comments_template(); } ?>
                  <!--関連記事-->
                  <div class="kanren_box col-xs-24">
                  <h4 class="point"><i class="fa fa-th-list"></i>&nbsp;  関連記事</h4>
                  <?php get_template_part('kanren');?>
                  </div>

                  <!--ページナビ-->
                <ul class="pager">
                      <?php
                $prev_post = get_previous_post();
                if (!empty( $prev_post )): ?>
                  <li class="previous"><a href="<?php echo get_permalink( $prev_post->ID ); ?>">&larr;<?php echo $prev_post->post_title; ?></a></li>
                      <?php endif; ?>
<!--                       <li><a href="#">現在</a></li> -->
                      <?php
                $next_post = get_next_post();
                if (!empty( $next_post )): ?>
                  <li class="next"><a href="<?php echo get_permalink( $next_post->ID ); ?>"><?php echo $next_post->post_title; ?>&rarr;</a></li>
                      <?php endif; ?>
                </ul>
                </div>
                <!--/post-->
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
