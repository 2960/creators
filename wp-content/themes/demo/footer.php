<footer class="footer_menu">
        <!--フッター分岐-->
        <?php if(is_mobile()) { ?>
        <!--スマホ表示エリア-->
        <!--//スマホ表示エリア-->
        <?php } else { ?>
        <!--PC3段 タブレット1+2段-->
    <div class="container">
      <div class="row">
        <div class="col-md-8 footer_menu">
        <!--フッター左-->
          <ul>
          <?php dynamic_sidebar( 'footer_left' ); ?>
          </ul>
        </div>
        <!--フッター中-->
        <div class="col-md-8 footer_menu">
          <ul>
          <?php dynamic_sidebar( 'footer_center' ); ?>
          </ul>
        </div>
        <!--フッター右-->
        <div class="col-md-8 footer_menu">
          <ul>
          <?php dynamic_sidebar( 'footer_right' ); ?>
          </ul>
        </div>
        <!--//PC-->
        <?php } ?>
      </div><!-- row -->
    </div><!-- container -->
  </footer>
<div class="clearfix"></div>
  <section class="footer_bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-24">
          <p><small>Copyright © (株)フクロウ All Rights Reserved</small></p>
        </div><!-- col-md-24 -->
      </div><!-- row -->
    </div><!-- container -->
  </section>

<?php
if ( is_front_page() && is_home() ) {?>
<?php } else { ?>
<!-- ページトップへ戻る -->
<div id="page-top"><a href="#page0" class="fa fa-angle-up page-scroll fa-3x"></a></div>
<!-- ページトップへ戻る　終わり -->
<?php }?>

<!-- スマホ用メニュー -->
<div class="overlay overlay-hugeinc">
  <button type="button" class="overlay-close">Close</button>
  <nav>
    <ul>
      <div class="panel-group" id="accordion">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                トップ
              </a>
            </h4>
          </div><!-- panel-heading -->
          <div id="collapseOne" class="panel-collapse collapse in">
            <div class="panel-body">
              <li class="arow1"><a href="<?php echo home_url(); ?>/">ホーム</a></li>
              <li class="arow1"><a href="<?php echo home_url(); ?>/">BLOG</a></li>
              <li class="arow1"><a href="<?php echo home_url(); ?>/">PORTFOLIO</a></li>
              <li class="arow1"><a href="<?php echo home_url(); ?>/">Production</a></li>
              <li class="arow1"><a href="<?php echo home_url(); ?>/">Link</a></li>
            </div><!-- panel-body -->
          </div><!-- collapseOne -->
        </div><!-- panel -->
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                Blog Category Summary
              </a>
            </h4>
          </div><!-- panel-heading -->
          <div id="collapseTwo" class="panel-collapse collapse">
            <div class="panel-body">
            <!-- Apple -->
            <?php categories_and_entries(0); ?>
            </div><!-- panel-body -->
          </div><!-- collapseTwo -->
        </div><!-- panel -->
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                お勉強 コーナー
              </a>
            </h4>
          </div><!-- panel-heading -->
          <div id="collapseThree" class="panel-collapse collapse">
            <div class="panel-body">
            <?php categories_and_entries(1165); ?>
            </div><!-- panel-body -->
          </div><!-- collapseTwo -->
        </div><!-- panel -->
      </div><!-- accordion -->
    </ul>
  </nav>
</div><!-- overlay -->
<!-- スマホメニューEnd -->

</div><!-- wrap -->
<?php wp_footer(); ?>
<?php wp_print_footer_scripts(); ?>
  </body>
</html>