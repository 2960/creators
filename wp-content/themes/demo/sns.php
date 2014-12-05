</div><!-- col-sm-18 page_main -->
<div class="col-sm-24 sns">
<aside class="sns-icons">
  <!--ツイートボタン-->
  <?php
    $url_encode=urlencode(get_permalink());
    $title_encode=urlencode(get_the_title());
  ?>
  <div class="col-xs-6">
  <a href="http://twitter.com/intent/tweet?url=<?php echo $url_encode ?>&text=<?php echo $title_encode ?>&tw_p=tweetbutton" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" class="lsf-icon" title="twitter" style="background:#00acee"><i class="fa fa-twitter-square fa-lg"></i> Twitter　<?php if(function_exists('get_scc_twitter')) echo get_scc_twitter(); ?></a>
  </div>
  <!--Facebookいいね！/シェアボタン-->
  <div class="col-xs-6">
  <a href="http://www.facebook.com/sharer.php?src=bm&u=<?php echo $url_encode;?>&t=<?php echo $title_encode;?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" style="background:#4561b0" class="lsf-icon" title="facebook"><i class="fa fa-facebook-square fa-lg"></i> Facebook　<?php if(function_exists('get_scc_facebook')) echo get_scc_facebook(); ?></a>
  </div>
  <div class="col-xs-6">
  <!--Google+1ボタン-->
  <a href="https://plus.google.com/share?url=<?php echo $url_encode;?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=500');return false;" class="lsf-icon" title="google" style="background:#dd4b30"><i class="fa fa-google-plus-square fa-lg"></i> Google+　<?php if(function_exists('get_scc_gplus')) echo get_scc_gplus(); ?></a>
  </div>
  <div class="col-xs-6">
  <!--はてブボタン-->
  <a href="http://b.hatena.ne.jp/add?mode=confirm&url=<?php echo $url_encode ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=400,width=510');return false;" class="lsf-icon" title="hatenabookmark" style="background:#00a4de"><i class="fa fa-bold fa-lg"></i> はてブ　<?php if(function_exists('get_scc_hatebu')) echo (get_scc_hatebu()==0)?'':get_scc_hatebu(); ?></a>
  </div>
</aside>
<div class="clearfix"></div>
</div>
<div class="col-sm-24">
