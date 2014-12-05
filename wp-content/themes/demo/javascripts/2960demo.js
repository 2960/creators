// 郵便番号補助
jQuery(function( $ ) {
    jQuery( 'input[name="zip2"]' ).keyup( function( e ) {
        AjaxZip3.zip2addr('zip1','zip2','address1','address2');
    } )
} );

$('ul.nav li.dropdown').hover(function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
}, function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
});
      $('#myCarousel').carousel({
        interval:   4000
      });
      $(window).scroll(function () {
        if ($(this).scrollTop() > $('nav').position().top + 97) {
          $('nav').addClass('navbar-fixed-top');
        } else {
          $('nav').removeClass('navbar-fixed-top');
        }
      });
      $(window).scroll(function () {
        if ($(this).scrollTop() > $('nav').position().top) {
          $('nav').addClass('navbar-fixed-top');
        } else {
          $('nav').removeClass('navbar-fixed-top');
        }
      });

// ページトップボタンフェードインアウト
jQuery(function() {
    var pageTop = jQuery('#page-top');
    pageTop.hide();
    //スクロールが400に達したら表示
    jQuery(window).scroll(function () {
        if(jQuery(this).scrollTop() > 400) {
            pageTop.fadeIn(500);
        } else {
            pageTop.fadeOut(500);
        }
    });
  });
// トップ右メニューフェードインアウト
jQuery(function() {
    var pageTop2 = jQuery('.side_move_menu_display');
    pageTop2.hide();
    //スクロールが400に達したら表示
    jQuery(window).scroll(function () {
        if(jQuery(this).scrollTop() > 300) {
            pageTop2.fadeIn(1000);
        } else {
            pageTop2.fadeOut(1000);
        }
    });
  });
// ニューススライダーclass active
jQuery(function($){
    $(".news_slide:first").addClass("active");
});
// URLに対してclass activeを付ける
  $(function () {
      var url = $.url();
      host = 'http://'+url.attr('www.success-academy.net');
      to_link = url.attr('source').replace(host,"");
      $('a[href="'+to_link+'"]').addClass('active');
      // $('a[href="'+to_link+'"]').parent('li').addClass('active');
// a /controller/action/params... の直上li に active class をつける
  });
// スマホ用メニュー
(function() {
  var triggerBttn = document.getElementById( 'trigger-overlay' ),
    overlay = document.querySelector( 'div.overlay' ),
    closeBttn = overlay.querySelector( 'button.overlay-close' );
    transEndEventNames = {
      'WebkitTransition': 'webkitTransitionEnd',
      'MozTransition': 'transitionend',
      'OTransition': 'oTransitionEnd',
      'msTransition': 'MSTransitionEnd',
      'transition': 'transitionend'
    },
    transEndEventName = transEndEventNames[ Modernizr.prefixed( 'transition' ) ],
    support = { transitions : Modernizr.csstransitions };

  function toggleOverlay() {
    if( classie.has( overlay, 'open' ) ) {
      classie.remove( overlay, 'open' );
      classie.add( overlay, 'close' );
      var onEndTransitionFn = function( ev ) {
        if( support.transitions ) {
          if( ev.propertyName !== 'visibility' ) return;
          this.removeEventListener( transEndEventName, onEndTransitionFn );
        }
        classie.remove( overlay, 'close' );
      };
      if( support.transitions ) {
        overlay.addEventListener( transEndEventName, onEndTransitionFn );
      }
      else {
        onEndTransitionFn();
      }
    }
    else if( !classie.has( overlay, 'close' ) ) {
      classie.add( overlay, 'open' );
    }
  }

  triggerBttn.addEventListener( 'click', toggleOverlay );
  closeBttn.addEventListener( 'click', toggleOverlay );
})();