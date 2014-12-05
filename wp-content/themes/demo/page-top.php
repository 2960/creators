<?php
/*
Template Name: parallax_Top
*/
?>

<?php get_header(); ?>
<div class="clearfix"></div>
<div id="carousel-examples" class="carousel slide" data-ride="carousel">
  <!-- 標識の設定 -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-examples" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-examples" data-slide-to="1"></li>
    <li data-target="#carousel-examples" data-slide-to="2"></li>
    <li data-target="#carousel-examples" data-slide-to="3"></li>
  </ol>
  <!-- スライドさせる画像の設定 -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="http://placeimg.com/800/500/people/sepia" height="557" width="1280" alt="第1スライドイメージ" class="img-responsive">
      <div class="carousel-caption">
        <h3>第1スライド見出し</h3>
        <p>imageは<a href="http://placeimg.com/">PlaceIMG</a>のダミーimageです。</p>
      </div>
    </div>
    <div class="item">
      <img src="http://placeimg.com/800/500/arch" alt="第2スライドイメージ">
      <div class="carousel-caption">
        <h3>第2スライド見出し</h3>
        <p>imageは<a href="http://placeimg.com/">PlaceIMG</a>のダミーimageです。</p>
      </div>
    </div>
    <div class="item">
      <img src="http://placeimg.com/800/500/nature" alt="第3スライドイメージ">
      <div class="carousel-caption">
        <h3>第3スライド見出し</h3>
        <p>imageは<a href="http://placeimg.com/">PlaceIMG</a>のダミーimageです。</p>
      </div>
    </div>
    <div class="item">
      <img src="http://placeimg.com/800/500/tech/grayscale" alt="第4スライドイメージ">
      <div class="carousel-caption">
        <h3>第3スライド見出し</h3>
        <p>imageは<a href="http://placeimg.com/">PlaceIMG</a>のダミーimageです。</p>
      </div>
    </div>
  </div>
  <!-- スライドコントロールの設定 -->
  <a class="left carousel-control" href="#carousel-examples" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-examples" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
  <div class="slidebill_news">

  </div>
</div>
<div id="myCarousel" class="carousel slide newstext_slider">
    <div class="newstext_header"><p>新着記事</p>
</div>
    <div class="carousel-inner">

      <?php
      $my_query = new WP_Query(array(
      'post_type' => '',
      // 'cat' => 21, //カテゴリーID
      'posts_per_page' => 5, //表示件数
      'orderby' => 'date',
      'order' => 'DESC'
      ));
      ?>
      <?php while($my_query->have_posts()) : $my_query->the_post(); ?>
        <div class="item news_slide">
            <blockquote>
              <p><?php the_time("n月j日"); ?>&nbsp;&nbsp;</p>
              <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><small><?php the_title(); ?></small></a>
<!--               <small><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></small> -->
            </blockquote>
        </div>
      <?php endwhile; ?>
    </div>
  <div class="carousel-controls text_slider">
      <a class="carousel-control arow_left" href="#myCarousel" data-slide="prev">
      <span class="fa-stack fa-lg">
        <i class="fa fa-circle fa-stack-2x"></i>
        <i class="fa fa-angle-left fa-stack-1x fa-inverse"></i>
      </span>
      </a>
      <a href="<?php echo home_url(); ?>/wp1/" class="btn-primary ichiran_btn">一覧</a>
      <a class="carousel-control arow_right" href="#myCarousel" data-slide="next">
      <span class="fa-stack fa-lg">
        <i class="fa fa-circle fa-stack-2x"></i>
        <i class="fa fa-angle-right fa-stack-1x fa-inverse"></i>
      </span>
      </a>
  </div>
</div><!-- End Carousel -->
<div class="clearfix"></div>

<div id="wrap" class="toppage">
  <section id="sec-1" class="margin-bottom-40px">
    <div id="page1" class="container main_cont_01">
      <div class="row">
        <div class="col-sm-24 main_cont01_h2">
          <h2 class="text-center margin-top-40px">Content 1 h2</h2>
        </div><!-- col-sm-24 -->
        <div class="col-xs-12 col-sm-12 main_cont_01_img">
          <img src="http://placeimg.com/380/180/nature" height="219" width="460" class="center-block img-responsive">
        </div><!-- col-sm-24 -->
        <div class="col-sm-12 main_cont_01_text">
          <p>つれづれなるまゝに、日暮らし、硯にむかひて、心にうつりゆくよしなし事を、そこはかとなく書きつくれば、あやしうこそものぐるほしけれ。（Wikipediaより）つれづれなるまゝに、日暮らし、硯にむかひて、心にうつりゆくよしなし事を、そこはかとなく書きつくれば、あやしうこそものぐるほしけれ。（Wikipediaより）つれづれなるまゝに、日暮らし、硯にむかひて、心にうつりゆくよしなし事を、そこはかとなく書きつくれば、あやしうこそものぐるほしけれ。（Wikipediaより）つれづれなるまゝに、日暮らし、硯にむかひて、心にうつりゆくよしなし事を、そこはかとなく書きつくれば、あやしうこそものぐるほしけれ。（</p>
        </div><!-- col-sm-24 -->
      <div class="clearfix"></div>
      </div><!-- row -->
    </div><!-- container-fluid -->
  </section>

  <section id="sec-2" class="main_cont_02">
    <div class="container">
      <div class="row">
        <div class="col-sm-24 main_cont02_top">
          <h2 class="text-center margin-top-40px">Content 2 h2</h2>
          <h3>Content 2 h3</h3>
          <p>つれづれなるまゝに、日暮らし、硯にむかひて、心にうつりゆくよしなし事を、そこはかとなく書きつくれば、あやしうこそものぐるほしけれ。（Wikipediaより）つれづれなるまゝに、日暮らし、硯にむかひて、心にうつりゆくよしなし事を、そこはかとなく書きつくれば、あやしうこそものぐるほしけれ。（Wikipe</p>
        </div><!-- col-sm-24 -->
        <div class="col-sm-8 main_cont02_leftcont1 text-center">
          <div class="image_circle_box">
            <div class="ch-item ch-img-1">
              <div class="ch-info-wrap">
                <div class="ch-info">
                  <div class="ch-info-front ch-img-1"></div>
                  <div class="ch-info-back">
                    <h4>Content h4</h4>
                    <p>親譲りの無鉄砲で小供の時から損ばかりしている<a href="http://drbl.in/ewng">View on Dribbble</a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><!-- col-sm-8 -->
        <div class="col-sm-8 main_cont02_centercont1 text-center">
          <div class="image_circle_box">
            <div class="ch-item ch-img-2">
              <div class="ch-info-wrap">
                <div class="ch-info">
                  <div class="ch-info-front ch-img-2"></div>
                  <div class="ch-info-back">
                    <h4>Content h4</h4>
                    <p>首尾は野ねずみの遠慮音楽曲をホールが見窓たな<a href="http://drbl.in/ewng">View on Dribbble</a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><!-- col-sm-8 -->
        <div class="col-sm-8 main_cont02_centercont1 text-center">
          <div class="image_circle_box">
            <div class="ch-item ch-img-3">
              <div class="ch-info-wrap">
                <div class="ch-info">
                  <div class="ch-info-front ch-img-3"></div>
                  <div class="ch-info-back">
                    <h4>Content h4</h4>
                    <p>眼は一とっ猫のようをねむらがちまうた<a href="http://drbl.in/ewng">View on Dribbble</a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><!-- col-sm-8 -->
        <div class="col-sm-8 main_cont02_centercont1 text-center">
          <div class="image_circle_box">
            <div class="ch-item ch-img-4">
              <div class="ch-info-wrap">
                <div class="ch-info">
                  <div class="ch-info-front ch-img-4"></div>
                  <div class="ch-info-back">
                    <h4>Content h4</h4>
                    <p>眼は一とっ猫のようをねむらがちまうた<a href="http://drbl.in/ewng">View on Dribbble</a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><!-- col-sm-8 -->
        <div class="col-sm-8 main_cont02_centercont1 text-center">
          <div class="image_circle_box">
            <div class="ch-item ch-img-5">
              <div class="ch-info-wrap">
                <div class="ch-info">
                  <div class="ch-info-front ch-img-5"></div>
                  <div class="ch-info-back">
                    <h4>Content h4</h4>
                    <p>ぱっと身動き教えて、泣きとついていう<a href="http://drbl.in/ewng">View on Dribbble</a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><!-- col-sm-8 -->
        <div class="col-sm-8 main_cont02_centercont1 text-center">
          <div class="image_circle_box">
            <div class="ch-item ch-img-6">
              <div class="ch-info-wrap">
                <div class="ch-info">
                  <div class="ch-info-front ch-img-6"></div>
                  <div class="ch-info-back">
                    <h4>Content h4</h4>
                    <p>おまえもばたばたゴーシュも面白くことない<a href="http://drbl.in/ewng">View on Dribbble</a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><!-- col-sm-8 -->
        <div class="col-sm-8 main_cont02_leftcont2">
          <img src="http://lorempixel.com/250/250/people/sepia" class="img-circle center-block img-responsive">
          <h4 class="red_text big text-center">Content h4</h4>
          <p>おまえいきなりにすきが怒っのでトマトをしますた。子に出すたまい。「赤をするまし。セロ、それと手。ふん。」みんなも午前のなかのいきなりはじめのときで運びましだ。</p>
        </div><!-- col-sm-8 -->
        <div class="col-sm-8 main_cont02_centercont2">
          <img src="http://lorempixel.com/250/250/nature/grayscale" class="img-circle center-block img-responsive">
          <h4 class="red_text big text-center">Content h4</h4>
          <p>ぱっと身動き教えて、泣きとついていうて象がまた顔つきがもう人いただ。「先生はじめ。ゃくしゃしていましたがいつまでもつづけてを走りまし。</p>
        </div><!-- col-sm-8 -->
        <div class="col-sm-8 main_cont02_rightcont2">
          <img src="http://lorempixel.com/250/250/fashion/grayscale" class="img-circle center-block img-responsive">
          <h4 class="red_text big text-center">Content h4</h4>
          <p>おまえもばたばたゴーシュも面白くことないて工合はしばらく情ないのました。「途中のこんどのゴーシュから。云い。」おまえはそうわらいずない。かっこうも虎で喜ぶから一生けん命ん。</p>
        </div><!-- col-sm-8 -->
      </div><!-- row -->
    </div><!-- container-fluid -->
  </section>






  <section id="sec-3" class="main_cont_04">
    <div class="container">
      <div class="row">
        <div class="col-sm-24 main_cont04_top">
          <h2 class="text-center margin-top-40px">Content 3 h2</h2>
          <h3>Content 3 h3</h3>
          <p>つれづれなるまゝに、日暮らし、硯にむかひて、心にうつりゆくよしなし事を、そこはかとなく書きつくれば、あやしうこそものぐるほしけれ。（Wikipediaより）つれづれなるまゝに、日暮らし、硯にむかひて、心にうつりゆくよしなし事を、そこはかとなく書きつくれば、あやしうこそものぐるほしけれ。（Wikipe</p>        </div><!-- col-sm-24 -->
          <div class="row row_clearfix">
<!-- YouTube１ -->
            <div class="col-xs-24 col-sm-8 main_cont04_left2 center-block">
              <a href="http://www.youtube.com/embed/EgseE3WuEYM" class="html5lightbox" data-thumbnail="http://i.ytimg.com/vi/EgseE3WuEYM/0.jpg"><img src="http://i.ytimg.com/vi/EgseE3WuEYM/0.jpg" height="209" width="302" class="center-block img-responsive"></a>
              <p class="red_text">Zanzibar<br>"Billy Joel"</p>
              <a href="http://www.youtube.com/embed/EgseE3WuEYM" class="html5lightbox" data-thumbnail="http://i.ytimg.com/vi/EgseE3WuEYM/0.jpg"><img src="<?php echo get_template_directory_uri(); ?>/images/btn/detail_btn02.png" height="38" width="139" class="center-block "></a>
            </div><!-- col-sm-8 -->
<!-- YouTube２ -->
            <div class="col-xs-24 col-sm-8 main_cont04_center2 center-block">
              <a href="http://www.youtube.com/embed/v7h8xcEcpbU" class="html5lightbox" data-thumbnail="http://i.ytimg.com/vi/v7h8xcEcpbU/0.jpg"><img src="http://i.ytimg.com/vi/v7h8xcEcpbU/0.jpg" height="209" width="302" class="center-block img-responsive"></a>
              <p class="red_text">攻殻機動隊 I do<br>"菅野よう子"</p>
              <a href="http://www.youtube.com/embed/v7h8xcEcpbU"class="html5lightbox" data-thumbnail="http://i.ytimg.com/vi/v7h8xcEcpbU/0.jpg"><img src="<?php echo get_template_directory_uri(); ?>/images/btn/detail_btn02.png" height="38" width="139" class="center-block"></a>
            </div><!-- col-sm-8 -->
<!-- YouTube３ -->
            <div class="col-xs-24 col-sm-8 main_cont04_right2 center-block">
              <a href="http://www.youtube.com/embed/3MteSlpxCpo" class="html5lightbox" data-thumbnail="http://i.ytimg.com/vi/3MteSlpxCpo/0.jpg"><img src="http://i.ytimg.com/vi/3MteSlpxCpo/0.jpg" height="209" width="302" class="center-block img-responsive"></a>
              <p class="red_text">Daft Punk<br>"Pentatonix"</p>
              <a href="http://www.youtube.com/embed/3MteSlpxCpo" class="html5lightbox" data-thumbnail="http://i.ytimg.com/vi/3MteSlpxCpo/0.jpg"><img src="<?php echo get_template_directory_uri(); ?>/images/btn/detail_btn02.png" height="38" width="139" class="center-block"></a>
            </div><!-- col-sm-8 -->
<!-- YouTube４ -->
            <div class="col-xs-24 col-sm-8 main_cont04_left2 center-block">
              <a href="http://www.youtube.com/embed/JvjgR4FOj3g" class="html5lightbox" data-thumbnail="http://i.ytimg.com/vi/JvjgR4FOj3g/0.jpg"><img src="http://i.ytimg.com/vi/JvjgR4FOj3g/0.jpg" height="209" width="302" class="center-block img-responsive"></a>
              <p class="red_text">ルパン三世のテーマ'78<br>"大野雄二"</p>
              <a href="http://www.youtube.com/embed/JvjgR4FOj3g" class="html5lightbox" data-thumbnail="http://i.ytimg.com/vi/JvjgR4FOj3g/0.jpg"><img src="<?php echo get_template_directory_uri(); ?>/images/btn/detail_btn02.png" height="38" width="139" class="center-block "></a>
            </div><!-- col-sm-8 -->
<!-- YouTube５ -->
            <div class="col-xs-24 col-sm-8 main_cont04_center2 center-block">
              <a href="http://www.youtube.com/embed/jDRTghGZ7XU" class="html5lightbox" data-thumbnail="http://i.ytimg.com/vi/jDRTghGZ7XU/0.jpg"><img src="http://i.ytimg.com/vi/jDRTghGZ7XU/0.jpg" height="209" width="302" class="center-block img-responsive"></a>
              <p class="red_text">Slave To The Rhythm<br>"Michael Jackson"</p>
              <a href="http://www.youtube.com/embed/jDRTghGZ7XU" class="html5lightbox" data-thumbnail="http://i.ytimg.com/vi/jDRTghGZ7XU/0.jpg"><img src="<?php echo get_template_directory_uri(); ?>/images/btn/detail_btn02.png" height="38" width="139" class="center-block"></a>
            </div><!-- col-sm-8 -->
<!-- YouTube６ -->
            <div class="col-xs-24 col-sm-8 main_cont04_right2 center-block">
              <a href="http://www.youtube.com/embed/TzAaLAPz59o" class="html5lightbox" data-thumbnail="http://i.ytimg.com/vi/TzAaLAPz59o/0.jpg"><img src="http://i.ytimg.com/vi/TzAaLAPz59o/0.jpg" height="209" width="302" class="center-block img-responsive"></a>
              <p class="red_text">『to U』<br>"Bank Band with Salyu"</p>
              <a href="http://www.youtube.com/embed/TzAaLAPz59o" class="html5lightbox" data-thumbnail="http://i.ytimg.com/vi/TzAaLAPz59o/0.jpg"><img src="<?php echo get_template_directory_uri(); ?>/images/btn/detail_btn02.png" height="38" width="139" class="center-block"></a>
            </div><!-- col-sm-8 -->
          </div><!-- row -->
      </div><!-- row -->
    </div><!-- container -->
  </section>


  <section id="page3" class="main_cont_03">
  <section class="main_cont_03">
    <div class="container">
      <div class="row">
        <div class="col-sm-24 main_cont03_top">
          <h2 class="text-hide">豊富な経験とデータに基づく「サポートサービス」</h2>
          <img src="<?php echo get_template_directory_uri(); ?>/images/top/03cont_title01.png" height="30" width="990" class="img-responsive">
        </div><!-- col-sm-24 -->
        <div class="col-xs-10 col-sm-8 main_cont03_left">
          <img src="<?php echo get_template_directory_uri(); ?>/images/top/03cont_pict01.png" height="159" width="232" class="img-responsive">
        </div><!-- col-sm-24 -->
        <div class="col-sm-16 main_cont03_right">
          <p>保育施設の新規設置から管理・運営、保育相談、経営診断まで、総合的なサポートサービスを行っています。長年積み重ねてきた運営ノウハウとデータに基づくご提案やアドバイスは、お客さまより高い評価をいただいております。ほか、講演会・セミナー講師のご紹介や、施設のパンフレット・マニュアル・ＷＥＢ制作などもお手伝いさせていただきます。</p>
          <a href="/support/"><img src="<?php echo get_template_directory_uri(); ?>/images/btn/detail_btn01.png" height="38" width="139" class="center-block"></a>
        </div><!-- col-sm-24 -->
      </div><!-- row -->
    </div><!-- container-fluid -->
  </section>







  <section id="page6" class="main_cont_06">
    <div class="container">
      <div class="row">
        <div class="col-sm-24 main_cont06_top">
          <h2 class="text-hide">全国に向けて保育サービスを展開中</h2>
          <img src="<?php echo get_template_directory_uri(); ?>/images/top/06cont_title01.png" height="30" width="990" class="img-responsive">
          <p>サクセスアカデミーの保育運営施設数は、病院内・事業所内保育サービスと公的保育サービスを合わせ東北から関西地方まで広域にわたり、さらに全国へと広がる勢いです。</p>

        </div><!-- col-sm-8 -->
        <div class="col-xs-24 col-sm-24 main_cont06_left">
          <img src="<?php echo get_template_directory_uri(); ?>/images/top/06cont_pict01.png" height="159" width="161" class="center-block img-responsive">
          <p>国内すべての地域で<br>保育サービスをご提供します</p>
        </div><!-- col-sm-8 -->



      </div><!-- row -->
    </div><!-- container -->
  </section>



  <section id="page8" class="main_cont_08">
    <div class="container">
      <div class="row">
        <div class="col-sm-24 main_cont08_top">
          <h2 class="text-hide">サクセスホールディングス（東証1部）のグループ企業だから安定</h2>
          <img src="<?php echo get_template_directory_uri(); ?>/images/top/08cont_title01.png" height="71" width="990" class="img-responsive">
        </div><!-- col-sm-8 -->
        <div class="col-sm-8 main_cont08_left">
          <img src="<?php echo get_template_directory_uri(); ?>/images/top/08cont_pict01.jpg" height="265" width="232" class="center-block">
        </div><!-- col-sm-8 -->
        <div class="col-sm-16 main_cont08_right">
          <p>サクセスアカデミーは、創業者である柴野豪男が学習塾を運営していた際に、保護者からベビーシッターの依頼を受けたことをヒントに保育事業を研究し、従量制の受託保育事業を考案いたしました。それ以降25年間、保育事業を拡大し続けて、2010年には親会社となるサクセスホールディングス株式会社を設立、同社は2014年に東証一部に指定されました。</p>
          <h3>社長メッセージ</h3>
          <p>当社は「人から“ありがとう”といわれるサービスを提供する」を企業理念に、1990年以来、相手の立場に立ったきめ細やかな子育て支援サービス事業を展開してまいりました。現在では、250カ所を超える保育施設をお任せ頂き、多くの信頼を得られていることは皆さまに感謝すると共に大変喜ばしく思っております。</p>
          <a href="/company/"><img src="<?php echo get_template_directory_uri(); ?>/images/btn/detail_btn04.png" height="38" width="149" class="center-block"></a>
        </div><!-- col-sm-8 -->
      </div><!-- row -->
    </div><!-- container -->
  </section>

  <section class="footer_top">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 center-block">
          <a href="http://www.hoikunohikidashi.jp/"><img src="<?php echo get_template_directory_uri(); ?>/images/top/ft_bunner01.jpg" height="88" width="304" class="center-block img-responsive"></a>
        </div><!-- col-sm-8 -->
        <div class="col-sm-8 center-block">
          <a href="http://www.nijiiro-hoikuen.jp/"><img src="<?php echo get_template_directory_uri(); ?>/images/top/ft_bunner02.jpg" height="88" width="304" class="center-block img-responsive"></a>
        </div><!-- col-sm-8 -->
        <div class="col-sm-8 center-block">
          <a href="http://www.success-holdings.co.jp/"><img src="<?php echo get_template_directory_uri(); ?>/images/top/ft_bunner03.jpg" height="88" width="304" class="center-block img-responsive"></a>
        </div><!-- col-sm-8 -->
      </div><!-- row -->
    </div><!-- container -->
  </section>

  <div class="navbar navbar-default navbar-fixed-top">
    <div class="collapse navbar-collapse side_move_menu" id="bs-example-navbar-collapse-1">
    <div class="side_move_menu_display">
      <ul class="nav navbar-nav">
        <li class="active"><a class="page-scroll center-block" href="#page0">Top</a></li>
        <li><a class="page-scroll center-block side_move_menu_a" href="#page1">Cont1</a></li>
        <li><a class="page-scroll center-block side_move_menu_a" href="#sec-2">Cont2</a></li>
        <li><a class="page-scroll center-block side_move_menu_a" href="#sec-3">Cont3</a></li>
        <li><a class="page-scroll center-block side_move_menu_a" href="#page3">サポート<br>サービス</a></li>
        <li><a class="page-scroll center-block side_move_menu_a" href="#page6">全国に<br>展開中</a></li>
        <li><a class="page-scroll center-block side_move_menu_a" href="#page8">グループ<br>企業の安定</a></li>
      </ul>
    </div>
    </div>
  </div>

<?php get_footer(); ?>
