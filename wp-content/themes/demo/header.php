 <!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie6" lang="ja"><![endif]-->
<!--[if IE 7 ]> <html class="ie7" lang="ja"><![endif]-->
<!--[if IE 8 ]> <html class="ie8" lang="ja"><![endif]-->
<!--[if IE 9 ]> <html class="ie9" lang="ja"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="" lang="ja"><!--<![endif]-->
  <head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no" />
    <?php if(is_category()): ?>
    <?php elseif(is_archive()): ?>
    <meta name="robots" content="noindex,follow">
    <?php elseif(is_search()): ?>
    <meta name="robots" content="noindex,follow">
    <?php elseif(is_tag()): ?>
    <meta name="robots" content="noindex,follow">
    <?php elseif(is_paged()): ?>
    <meta name="robots" content="noindex,follow">
    <?php endif; ?>
    <title>
      <?php
      global $page, $paged;
      if(is_front_page()):
      elseif(is_single()):
      wp_title('|',true,'right');
      elseif(is_page()):
      wp_title('|',true,'right');
      elseif(is_archive()):
      wp_title('|',true,'right');
      elseif(is_search()):
      wp_title('|',true,'right');
      elseif(is_404()):
      echo'404 |';
      endif;
      bloginfo('name');
      if($paged >= 2 || $page >= 2):
      echo'-'.sprintf('%sページ',
      max($paged,$page));
      endif;
      ?>
    </title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen,print" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.0.0/animate.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="<?php echo get_template_directory_uri(); ?>/javascripts/modernizr.custom.js"></script>
    <?php wp_head(); ?>
  </head>
<body <?php body_class(); ?> data-spy="scroll" data-target=".side_move_menu">
<header id="page0">
  <div class="container header_content">
    <div class="row">
      <div class="col-xs-12 col-sm-11 header_h1">
        <h1 class="text-hide">Wordpress Demo Theme</h1>
      </div><!-- col-sm-8 -->
      <div class="col-sm-offset-1 col-sm-6 col-xs-11 header_search">
        <form method="get" action="<?php bloginfo('url'); ?>/" class="search-form">
        <fieldset>
        <div class="form-group">
          <div class="input-group">
            <input type="text" class="form-control input-sm"  name="s" id="s" value="<?php the_search_query(); ?>" placeholder="サイト内の検索" />
            <span class="input-group-addon">
            <button type="submit" class="btn btn-default" id="search"><i class="fa fa-search"></i>
<!--             <img src="<?php echo get_template_directory_uri(); ?>/images/header/search_btn.png" height="23" width="23"> -->
            </button></span>
          </div>
        </div>
        </fieldset>
        </form>
      </div><!-- col-sm-6 -->
      <div class="col-xs-offset-12 col-xs-7 col-sm-offset-1 col-sm-3 header_inquery">
        <a href="/inquiry" class="btn-warning text-center">お問い合わせ
<!--         <img src="<?php echo get_template_directory_uri(); ?>/images/btn/inquiry_btn01.jpg" height="29" width="109" class="pull-left"> -->
        </a>
      </div><!-- col-sm-8 -->
      <div class="col-xs-5 col-sm-2 header_inquery">
        <a href="/inquiry" class="btn-danger text-center">資料請求
<!--         <img src="<?php echo get_template_directory_uri(); ?>/images/btn/inquiry_btn02.jpg" height="29" width="85" class="pull-right"> -->
        </a>
      </div><!-- col-sm-8 -->
    </div><!-- row -->
  </div><!-- container -->
<nav class="navbar navbar-default" role="navigation">
  <div class="container">
    <div class="row">
    <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" id="trigger-overlay" class="navbar-toggle" data-toggle="collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>

      <!-- PC menu -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav nav-justified">
      <!-- 1st dropdown -->
        <li class="menu1 active"><a href="<?php echo home_url(); ?>">HOME</a></li>
      <!-- 2st dropdown -->
        <li class="menu2 dropdown"><a class="dropdown-toggle" href="<?php echo home_url(); ?>/entrusted/">menu1<span class="caret"></span></a>
          <ul class="nav nav-pills nav-stacked dropdown-menu">
            <div class="col-xs-8 dropdown_box">
              <li class="arow1"><a href="">Smenu2</a></li>
              <li class="arow2"><a href="">Smenu3</a></li>
              <li class="arow2"><a href="">Smenu4</a></li>
              <li class="arow2"><a href="">Smenu5</a></li>
              <li class="arow2"><a href="">Smenu6</a></li>
            </div>
            <div class="col-xs-8 dropdown_box">
              <li class="arow1"><a href="">Smenu7</a></li>
              <li class="arow2"><a href="">Smenu8</a></li>
              <li class="arow2"><a href="">Smenu9</a></li>
              <li class="arow2"><a href="">Smenu10</a></li>
              <li class="arow2"><a href="">Smenu11</a></li>
            </div>
            <div class="col-xs-8 dropdown_box">
              <li class="arow1"><a href="">Smenu12</a></li>
              <li class="arow2"><a href="">Smenu13</a></li>
              <li class="arow2"><a href="">Smenu14</a></li>
              <li class="arow2"><a href="">Smenu15</a></li>
              <li class="arow2"><a href="">Smenu16</a></li>
            </div>
          </ul>
        </li>
      <!-- 3st dropdown -->
        <li class="menu3 dropdown"><a class="dropdown-toggle" href="<?php echo home_url(); ?>/specialty/">menu2<span class="caret"></span></a>
            <ul class="nav nav-pills nav-stacked dropdown-menu">
            <div class="col-xs-12 dropdown_box">
              <li class="arow1"><a href="">Smenu1</a></li>
              <li class="arow1"><a href="">Smenu2</a></li>
              <li class="arow2"><a href="">Smenu3</a></li>
            </div>
            <div class="col-xs-12 dropdown_box">
              <li class="arow1"><a href="">Smenu4</a></li>
              <li class="arow1"><a href="">Smenu5</a></li>
            </div>
            </ul>
        </li>
      <!-- 4st dropdown -->
        <li class="menu4 dropdown"><a class="dropdown-toggle" href="<?php echo home_url(); ?>/public/">menu3<span class="caret"></span></a>
            <ul class="nav nav-pills nav-stacked dropdown-menu">
            <div class="col-xs-12 dropdown_box">
              <li class="arow1"><a href="">Smenu1</a></li>
              <li class="arow2"><a href="">Smenu2</a></li>
              <li class="arow2"><a href="">Smenu3</a></li>
              <li class="arow2"><a href="">Smenu4</a></li>
              <li class="arow1"><a href="">Smenu5</a></li>
              <li class="arow2"><a href="">Smenu6</a></li>
              <li class="arow2"><a href="">Smenu7</a></li>
            </div>
            <div class="col-xs-12 dropdown_box">
              <li class="arow1"><a href="">Smenu8</a></li>
              <li class="arow2"><a href="">Smenu9</a></li>
              <li class="arow2"><a href="">Smenu10</a></li>
            </div>
            </ul>
        </li>
      <!-- 5st -->
        <li class="menu5 dropdown"><a class="dropdown-toggle" href="<?php echo home_url(); ?>/establishment/">menu4</a>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
    </div><!-- /row -->
  </div><!-- /.container -->
</nav>
</header>
