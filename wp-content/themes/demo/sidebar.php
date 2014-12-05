          <div class="col-md-8 col-sm-24 sidebar_default">
            <aside>
              <?php if (is_404()) { ?>
              <?php } else { ?>
                <div class="ad ad_box">
                  <?php get_template_part('ad'); //アドセンス読み込み ?>
                </div>
              <?php } ?>
              <!-- RSSボタンです -->
              <div class="rssbox"> <a href="<?php echo home_url(); ?>/?feed=rss2"><i class="fa fa-rss-square"></i>&nbsp;購読する</a> </div>
              <!-- RSSボタンここまで -->
              <!-- 最近のエントリ -->
              <h4 class="menu_underh2"> NEW POST</h4>
              <div class="margin-bottom-30px">
              <?php get_template_part('newpost');?>
              </div>
              <h4 class="menu_underh2"> POPULAR POSTS DAILY</h4>
              <ul id="kanren" class="margin-bottom-30px">
              <?php
               $wpp = array (
               'range' => 'daily', /*集計期間の設定（daily,weekly,monthly）*/
               'limit' => 8, /*表示数はmax5記事*/
               'post_type' => 'post', /*投稿のみ指定（固定ページを除外）*/
               'title_length' => '35', /*タイトル文字数上限*/
               'stats_comments' => '0', /*コメント数は非表示*/
               'stats_views' => '1', /*閲覧数を表示させる*/
               'thumbnail_width' => '50', /*画像のwidth（px）*/
               'thumbnail_height' => '50', /*画像のheight（px）*/
               'post_html' => '<li class="clearfix"><a href="\{url}\" class="article_linker"></a><span class="kanren_img">{thumb}</span><span class="kanren_text">{title}</span><span class="red_text">{stats}</span></li>', /*表示されるhtmlの設定（サムネイル、記事タイトル、の順で表示）*/
              ); ?>
              <?php wpp_get_mostpopular($wpp); ?>
              </ul>
              <div class="clearfix"></div>
              <h4 class="menu_underh2"> POPULAR POSTS MOUTHLY</h4>
              <ul id="kanren" class="margin-bottom-30px">
              <?php
               $wpp = array (
               'range' => 'monthly', /*集計期間の設定（daily,weekly,monthly）*/
               'limit' => 8, /*表示数はmax5記事*/
               'post_type' => 'post', /*投稿のみ指定（固定ページを除外）*/
               'title_length' => '35', /*タイトル文字数上限*/
               'stats_comments' => '0', /*コメント数は非表示*/
               'stats_views' => '1', /*閲覧数を表示させる*/
               'thumbnail_width' => '50', /*画像のwidth（px）*/
               'thumbnail_height' => '50', /*画像のheight（px）*/
               'post_html' => '<li class="clearfix"><a href="\{url}\" class="article_linker"></a><span class="kanren_img">{thumb}</span><span class="kanren_text">{title}</span><span class="red_text">{stats}</span></li>', /*表示されるhtmlの設定（サムネイル、記事タイトル、の順で表示）*/
              ); ?>
              <?php wpp_get_mostpopular($wpp); ?>
              </ul>
              <div class="clearfix"></div>
              <h4 class="menu_underh2"> POPULAR POSTS ALL</h4>
              <ul id="kanren" class="margin-bottom-30px">
              <?php
               $wpp = array (
               'range' => 'all', /*集計期間の設定（daily,weekly,monthly）*/
               'limit' => 8, /*表示数はmax5記事*/
               'post_type' => 'post', /*投稿のみ指定（固定ページを除外）*/
               'title_length' => '35', /*タイトル文字数上限*/
               'stats_comments' => '0', /*コメント数は非表示*/
               'stats_views' => '1', /*閲覧数を表示させる*/
               'thumbnail_width' => '50', /*画像のwidth（px）*/
               'thumbnail_height' => '50', /*画像のheight（px）*/
               'post_html' => '<li class="clearfix"><a href="\{url}\" class="article_linker"></a><span class="kanren_img">{thumb}</span><span class="kanren_text">{title}</span><span class="red_text">{stats}</span></li>', /*表示されるhtmlの設定（サムネイル、記事タイトル、の順で表示）*/
              ); ?>
              <?php wpp_get_mostpopular($wpp); ?>
              </ul>
              <div class="clearfix"></div>
              <!-- /最近のエントリ -->
              <div id="mybox kanren">
                <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(1) ) : else : //サイドウイジェット読み込み ?>
                <?php endif; ?>
              </div>
              <div id="scrollad">
                  <?php get_template_part('scroll-ad'); //追尾式広告 ?>
              </div>
            </aside>
          </div><!-- col-sm-6 sidebar -->
          <div class="clearfix"></div>
