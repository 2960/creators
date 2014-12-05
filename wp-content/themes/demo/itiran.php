            <div id="topnews">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <article class="white_bk ichiran_box clearfix">
              <a href="<?php the_permalink() ?>" class="article_linker"></a>
              <header class="col-sm-24 col-xs-24 ichiran_img">
                <ul class="list-inline">
                  <li><i class="fa fa-calendar"></i>&nbsp;<?php the_time('Y/m/d') ?></li>
                  <li><i class="fa fa-spinner fa-spin"></i>&nbsp;<span id="cate-icon" class="<?php $cat = get_the_category(); $cat = $cat[0]; {echo "$cat->category_nicename";} ?>"><?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?></span></li>
                  <li><i class="fa fa-cog fa-spin"></i>&nbsp;<?php the_tags('', ', '); ?></li>
                </ul>
              </header>
              <div class="col-sm-9 col-xs-6 ichiran_img">
                <?php if ( has_post_thumbnail() ): // サムネイルを持っているときの処理 ?>
                <?php if(is_mobile()) { //スマホの場合 ?>
                <?php the_post_thumbnail( 'thumb150', array('class' => 'img-responsive')); ?>
                <?php } else { //PCの場合 ?>
                <?php the_post_thumbnail( 'thumb245', array('class' => 'img-responsive')); ?>
                <?php } ?>
                <?php else: // サムネイルを持っていないときの処理 ?>
                <?php if(is_mobile()) { //スマホの場合 ?>
                <img src="<?php echo get_template_directory_uri(); ?>/images/no-img-small.jpg" alt="no image" title="no image" width="100%" height="auto" />
                <?php } else { //PCの場合 ?>
                <img src="<?php echo get_template_directory_uri(); ?>/images/no-img-big.jpg" alt="no image" title="no image" width="245" height="150" />
                <?php } ?>
                <?php endif; ?>
              </div>
              <div class="col-sm-15 col-sm-offset-0 col-xs-17 col-xs-offset-1 ichiran_text">
                <div class="col-sm-24">
                  <h3><?php the_title(); ?></h3>
                    <?php if(is_mobile()) { //スマホの場合 ?>
                    <?php } else { //PCの場合 ?>
                  <p class=""><?php the_excerpt(); //スマートフォンには表示しない抜粋文 ?></p>
                    <?php } ?>
                </div>
              </div>
              <footer class="col-xs-24">
                <div class="entry-views">
                  <?php
                    if (function_exists('wpp_get_views')) {
                      $views = wpp_get_views( get_the_ID() );
                      echo '<span class="views">'.$views.'回</span>'.'<span>読まれました</span>';
                    }
                  ?>
                  <?php get_template_part('sns-cat'); //ソーシャルボタン読み込み ?>
                </div>
              </footer>
            </article>
            <div class="clearfix"></div>
              <?php endwhile; else: ?>
              <p>記事がありません</p>
              <?php endif; ?>
          </div>
