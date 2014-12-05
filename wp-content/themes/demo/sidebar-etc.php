          <div class="col-sm-5 sidebar-hospital pull-left margin-bottom-40px">
            <aside>
            <div id="nav_active" class="navbar-collapse collapse">
<!--             <h4 class="text-hide">病院内・事業所内保育</h4> -->
            <img src="<?php echo get_template_directory_uri(); ?>/images/hospital/sidemenu_specialed.png" height="72" width="216" alt="">
            <ul class="nav nav-pills nav-stacked">
              <li class="arow1"><a href="<?php echo home_url(); ?>/about/"><em>サクセスアカデミーの保育とは</em></a></li>
              <li class="arow1"><a href="<?php echo home_url(); ?>/specialed/"><em>特集ページ</em></a></li>
              <li class="arow1"><a href="<?php echo home_url(); ?>/news/"><em>お知らせ・ニュース</em></a></li>
              <li class="arow1"><a href="<?php echo home_url(); ?>/dl/"><em>各種書類のダウンロード</em></a></li>
              <li class="arow1"><a href="<?php echo home_url(); ?>/establishment/"><em>施設一覧</em></a></li>
              <li class="arow1"><a href="<?php echo home_url(); ?>/company/"><em>会社概要（沿革など）</em></a></li>
              <li class="arow1"><a href="<?php echo home_url(); ?>/group/"><em>グループ会社</em></a></li>
              <li class="arow1"><a href="<?php echo home_url(); ?>/inquiry/"><em>お問合せフォーム</em></a></li>
              <li class="arow1"><a href="<?php echo home_url(); ?>/inquiry2/"><em>資料請求フォーム</em></a></li>
              <li class="arow1"><a href="<?php echo home_url(); ?>/privacy/"><em>個人情報保護方針</em></a></li>
              <li class="arow1"><a href="<?php echo home_url(); ?>/policy/"><em>サイトポリシー</em></a></li>
              <li class="arow1"><a href="<?php echo home_url(); ?>/sitemap/"><em>サイトマップ</em></a></li>
            </ul>
            </div>

              <!-- RSSボタンです -->
              <!--<div class="rssbox"> <a href="<?php echo home_url(); ?>/?feed=rss2"><i class="fa fa-rss-square"></i>&nbsp;購読する</a> </div> -->
              <!-- RSSボタンここまで -->
              <!-- 最近のエントリ -->
              <!--<h4 class="menu_underh2"> NEW POST</h4> -->
              <!--<?php get_template_part('newpost');?> -->
              <!-- /最近のエントリ -->

              <div id="mybox">
                <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(1) ) : else : //サイドウイジェット読み込み ?>
                <?php endif; ?>
              </div>
              <div id="scrollad">
                  <?php get_template_part('scroll-ad'); //追尾式広告 ?>
              </div>
            </aside>
          </div><!-- col-sm-6 sidebar -->
          <div class="clearfix"></div>