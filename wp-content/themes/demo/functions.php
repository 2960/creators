<?php
// wordpressのバージョンを消去
function remove_cssjs_ver( $src ) {
    if( strpos( $src, '?ver=' ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}
add_filter( 'script_loader_src', 'remove_cssjs_ver', 10, 2 );
add_filter( 'style_loader_src', 'remove_cssjs_ver', 10, 2 );
// 元々あるjsをリセットしfooterに置けるようにする
wp_register_script( $handle, $src, $deps, $ver, $in_footer );
/*--------------------------------------------------------
 JQueryを最新版に置換
--------------------------------------------------------*/
function load_cdn() {
    if ( !is_admin() ) {
      wp_deregister_script('jquery'); // 同梱のJQueryを読み込ませない
      wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js', array(), NULL,true); //Google CDNのJQueryの登録
      wp_enqueue_script('jquery'); //登録したJQueryをフックさせる
    }
}
add_action('init', 'load_cdn');
/*--------------------------------------------------------
 JSの管理
--------------------------------------------------------*/
if (!is_admin()) {
    function register_script(){
        wp_register_script('bootstrap', get_bloginfo('template_directory').'/javascripts/bootstrap.min.js');
        wp_register_script('easing', get_bloginfo('template_directory').'/javascripts/jquery.easing.min.js');
        wp_register_script('scrolling', get_bloginfo('template_directory').'/javascripts/scrolling-nav.js');
        wp_register_script('classie', get_bloginfo('template_directory').'/javascripts/classie.js');
        wp_register_script('parallax', get_bloginfo('template_directory').'/javascripts/parallax.js');
        wp_register_script('2960demo', get_bloginfo('template_directory').'/javascripts/2960demo.js');
        wp_register_script('lightbox', get_bloginfo('template_directory').'/javascripts/html5lightbox.js');
        wp_register_script('parser', '//cdnjs.cloudflare.com/ajax/libs/jquery-url-parser/2.3.1/purl.min.js');
        wp_register_script('ajaxzip3', '//ajaxzip3.googlecode.com/svn/trunk/ajaxzip3/ajaxzip3.js');
    }
    function add_script() {
        register_script();
            wp_enqueue_script('bootstrap');
            wp_enqueue_script('easing');
            wp_enqueue_script('scrolling');
            wp_enqueue_script('classie');
if(wp_is_mobile())
{
// (タブレット・スマホ・ガラケーから閲覧された場合の処理)
}
else
{
            wp_enqueue_script('parallax');
}
            wp_enqueue_script('2960demo');
            wp_enqueue_script('lightbox');
            wp_enqueue_script('parser');
            wp_enqueue_script('ajaxzip3');
    }
    // add_action('wp_print_scripts', 'add_script',10);
    add_action('wp_print_footer_scripts', 'add_script',11);
}
// 抜粋の長さを変更する
function custom_excerpt_length( $length ) {
     return 100;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

// 文末文字を変更する
function custom_excerpt_more($more) {
	return ' ... ';
}
add_filter('excerpt_more', 'custom_excerpt_more');

// 空検索対策
function custom_search($search, $wp_query  ) {
    //query['s']があったら検索ページ表示
    if ( isset($wp_query->query['s']) )
$wp_query->is_search = true;
    return $search;
}
add_filter('posts_search','custom_search', 10, 2);

//スマホ表示分岐
function is_mobile(){
    $useragents = array(
        'iPhone', // iPhone
        'iPod', // iPod touch
        'Android.*Mobile', // 1.5+ Android *** Only mobile
        'Windows.*Phone', // *** Windows Phone
        'dream', // Pre 1.5 Android
        'CUPCAKE', // 1.5+ Android
        'blackberry9500', // Storm
        'blackberry9530', // Storm
        'blackberry9520', // Storm v2
        'blackberry9550', // Storm v2
        'blackberry9800', // Torch
        'webOS', // Palm Pre Experimental
        'incognito', // Other iPhone browser
        'webmate' // Other iPhone browser

    );
    $pattern = '/'.implode('|', $useragents).'/i';
    return preg_match($pattern, $_SERVER['HTTP_USER_AGENT']);
}
//アイキャッチサムネイル
add_theme_support('post-thumbnails');
add_image_size('thumb100',100,100,true);
add_image_size('thumb150',150,150,true);
add_image_size('thumb245',245,150,true);


//カスタムメニュー
register_nav_menus(array('navbar' => 'ナビゲーションバー'));

//RSS
add_theme_support('automatic-feed-links');

// 管理画面にオリジナルのスタイルを適用
add_editor_style("style.css");	// メインのCSS
add_editor_style('editor-style.css');	// これは入れておこう
if ( ! isset( $content_width ) ) $content_width = 580;
function custom_editor_settings( $initArray ){
	$initArray['body_id'] = 'primary';	// id の場合はこれ
	$initArray['body_class'] = 'post';	// class の場合はこれ
	return $initArray;
}
add_filter( 'tiny_mce_before_init', 'custom_editor_settings' );

//投稿用ファイルを読み込む
get_template_part('functions/create-thread');

//ページャー機能（BootStrap化）
function pagination($pages = '', $range = 4)
{
     $showitems = ($range * 2)+1;

     global $paged;
     if(empty($paged)) $paged = 1;

     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }

     if(1 != $pages)
     {
         echo "<ul class=\"pagination\">";
        if($paged > 1 && $showitems < $pages) echo "<li><a href='".get_pagenum_link($paged - 1)."'>&larr;</a>
</li>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<li><a href='".get_pagenum_link

            (1)."'>&laquo; 1...</a></li>";

         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems

))
             {
                 echo ($paged == $i)? "<li class=\"active\"><a href=\"#\">".$i."<span class=\"sr-only\">(現位置)</span></a></li>":"<li><a href='".get_pagenum_link

                 ($i)."' class=\"inactive\">".$i."</a></li>";
             }
         }


         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<li><a

            href='".get_pagenum_link($pages)."'>...".$pages." &raquo;</a></li>";
         if ($paged < $pages && $showitems < $pages) echo "<li><a href=\"".get_pagenum_link($paged +

            1)."\">&rarr;</a></li>";
         echo "</ul>\n";     }
}

//ヘッダーを綺麗に
remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'feed_links', 2 );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'index_rel_link' );
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
remove_action( 'wp_head', 'wp_generator' );

//moreリンク
function custom_content_more_link( $output ) {
    $output = preg_replace('/#more-[\d]+/i', '', $output );
    return $output;
}
add_filter( 'the_content_more_link', 'custom_content_more_link' );

//セルフピンバック禁止
function no_self_ping( &$links ) {
    $home = home_url();
    foreach ( $links as $l => $link )
        if ( 0 === strpos( $link, $home ) )
            unset($links[$l]);
}
add_action( 'pre_ping', 'no_self_ping' );


//ウイジェット追加
if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(4) )
register_sidebars(1,
    array(
    'name'=>'サイドバーウイジェット',
    'before_widget' => '<ul><li>',
    'after_widget' => '</li></ul>',
    'before_title' => '<h4 class="menu_underh2">',
    'after_title' => '</h4>',
    ));
register_sidebars(1,
    array(
    'name'=>'スクロール広告用',
    'description' => '「テキスト」をここにドロップして内容を入力して下さい。アドセンスは禁止です。※PC以外では非表示部分',
    'before_widget' => '<ul><li>',
    'after_widget' => '</li></ul>',
    'before_title' => '<h4 class="menu_underh2" style="text-align:left;">',
    'after_title' => '</h4>',
    ));
register_sidebars(1,
    array(
    'name'=>'Googleアドセンス用336px',
    'description' => '「テキスト」をここにドロップしてコードを入力して下さい。タイトルは反映されません。',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<h4 style="display:none">',
    'after_title' => '</h4>',
    ));

register_sidebars(1,
    array(
    'name'=>'Googleアドセンスのスマホ用300px',
    'description' => '「テキスト」をここにドロップしてコードを入力して下さい。タイトルは反映されません。',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<h4 style="display:none">',
    'after_title' => '</h4>',
    ));
//フッター左
register_sidebar( array(
     'name' => __( 'フッター左' ),
     'id' => 'footer_left',
     'before_widget' => '<div>',
     'after_widget' => '</div>',
     'before_title' => '<h5>',
     'after_title' => '</h5>',
) );

//フッター中央
register_sidebar( array(
     'name' => __( 'フッター中' ),
     'id' => 'footer_center',
     'before_widget' => '<div>',
     'after_widget' => '</div>',
     'before_title' => '<h5>',
     'after_title' => '</h5>',
) );

//フッター右
register_sidebar( array(
     'name' => __( 'フッター右' ),
     'id' => 'footer_right',
     'before_widget' => '<div>',
     'after_widget' => '</div>',
     'before_title' => '<h5>',
     'after_title' => '</h5>',
) );


//更新日の追加
function get_mtime($format) {
    $mtime = get_the_modified_time('Ymd');
    $ptime = get_the_time('Ymd');
    if ($ptime > $mtime) {
        return get_the_time($format);
    } elseif ($ptime === $mtime) {
        return null;
    } else {
        return get_the_modified_time($format);
    }
}

//テーマカスタマイザーで編集しない方は削除して下さい（ここから）

function stinger_customize_register($wp_customize) {

$wp_customize->add_section( 'stinger_logo_image', array(
'title' => 'ロゴ画像',
'priority' => 10,
) );

$wp_customize->add_setting( 'stinger_logo_image', array(
'default' => '',
'type' => 'option',
'capability' => 'edit_theme_options',
) );

$wp_customize->add_control( new WP_Customize_Image_Control(
$wp_customize,
'logo_Image',
array(
'label' => '画像',
'section' => 'stinger_logo_image',
'settings' => 'stinger_logo_image',
)
) );

    // Color
    $wp_customize->add_section( 'stinger_menu_customize', array(
    'title' => __( '基本色（キーカラー）', 'stinger' ),
    'priority' => 30,
    ) );

	$wp_customize->add_setting( 'stinger_menu_logocolor', array( 'default' => '#1a1a1a', ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'stinger_menu_logocolor', array(
    'label' => __( 'グループ1（ブログタイトル色など）', 'stinger' ),
    'section' => 'stinger_menu_customize',
    'settings' => 'stinger_menu_logocolor',
    ) ) );

    $wp_customize->add_setting( 'stinger_menu_bgcolor', array( 'default' => '#f3f3f3', ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'stinger_menu_bgcolor', array(
    'label' => __( 'グループ2（吹き出し背景など）', 'stinger' ),
    'section' => 'stinger_menu_customize',
    'settings' => 'stinger_menu_bgcolor',
    ) ) );

    $wp_customize->add_setting( 'stinger_menu_color', array( 'default' => '#1a1a1a', ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'stinger_menu_color', array(
    'label' => __( '吹き出し内の文字（H2）', 'stinger' ),
    'section' => 'stinger_menu_customize',
    'settings' => 'stinger_menu_color',
    ) ) );

    $wp_customize->add_setting( 'stinger_menu_comcolor', array( 'default' => '#f3f3f3', ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'stinger_menu_comcolor', array(
    'label' => __( 'グループ3（淡い色推奨）', 'stinger' ),
    'section' => 'stinger_menu_customize',
    'settings' => 'stinger_menu_comcolor',
    ) ) );

         }
    add_action('customize_register', 'stinger_customize_register');


// カテゴリリスト出力
function categories_and_entries( $catID ) {
    echo '<li class="arow1"><a href="'.get_category_link( $catID ).'">'. get_cat_name($catID) .' <span class="badge">' . get_category($catID)->category_count .'</span></a></li>';

    $childs=get_categories( 'parent='.$catID.'&hide_empty=0');
    foreach($childs as $child){
      echo '<li class="arow2"><a href="'.get_category_link( $child->cat_ID ).'">'. $child->cat_name .' <span class="badge">' . get_category($child->cat_ID)->category_count .'</span></a></li>';
        /* g_childs Loop */
        $g_childs=get_categories( 'parent='.$child->cat_ID.'&hide_empty=0');
        if($g_childs) {
            foreach($g_childs as $g_child){
              echo '<li class="arow3"><a href="'.get_category_link( $g_child->cat_ID ).'">'. $g_child->cat_name . ' <span class="badge">' . get_category($g_child->cat_ID)->category_count .'</span></a></li>';
                /* gg_childs Category Loop */
                $gg_childs=get_categories( 'parent='.$g_child->cat_ID.'&hide_empty=0');
                if($gg_childs) {
                    foreach($gg_childs as $gg_child){
                      echo '<li class="arow4"><a href="'.get_category_link( $gg_child->cat_ID ).'">'. $gg_child->cat_name .' <span class="badge">' . get_category($gg_childs->cat_ID)->category_count .'</span></a></li>';
                        /* gg_childs Entry Loop */
                        if (have_posts()) : query_posts('cat='.$gg_child->cat_ID.',&order=ASC');
                            while (have_posts()) : the_post();
                                $tcat = get_the_category(); $tcat = $tcat[0];
                                if($gg_child->cat_ID == $tcat->cat_ID) {
                                    echo '<li class="arow5"><a href="'. get_permalink() .'">'. get_the_title() .' <span class="badge">' . get_category($gg_child->cat_ID)->category_count .'</span></a></li>';
                                }
                            endwhile;
                            // echo '</ul>'; /* END UL4 */
                        endif;
                        /* END gg_childs Entry Loop */
                    }
                }
                /* END gg_childs Category Loop */
            }
        }
    }
    wp_reset_query();
}
//Custom CSS Widget
add_action('admin_menu', 'custom_css_hooks');
add_action('save_post', 'save_custom_css');
add_action('wp_head','insert_custom_css');
function custom_css_hooks() {
    add_meta_box('custom_css', 'Custom CSS', 'custom_css_input', 'post', 'normal', 'high');
    add_meta_box('custom_css', 'Custom CSS', 'custom_css_input', 'page', 'normal', 'high');
}
function custom_css_input() {
    global $post;
    echo '<input type="hidden" name="custom_css_noncename" id="custom_css_noncename" value="'.wp_create_nonce('custom-css').'" />';
    echo '<textarea name="custom_css" id="custom_css" rows="5" cols="30" style="width:100%;">'.get_post_meta($post->ID,'_custom_css',true).'</textarea>';
}
function save_custom_css($post_id) {
    if (!wp_verify_nonce($_POST['custom_css_noncename'], 'custom-css')) return $post_id;
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return $post_id;
    $custom_css = $_POST['custom_css'];
    update_post_meta($post_id, '_custom_css', $custom_css);
}
function insert_custom_css() {
    if (is_page() || is_single()) {
        if (have_posts()) : while (have_posts()) : the_post();
            echo '<style type="text/css">'.get_post_meta(get_the_ID(), '_custom_css', true).'</style>';
        endwhile; endif;
        rewind_posts();
    }
}
/*--------------------------------------------------------
 カスタム投稿タイプ：最新情報
--------------------------------------------------------*/
// add_action( 'init', 'create_post_type_1' );
// function create_post_type_1() {
//     register_post_type( 'news', /* post-type */
//         array(
//             'labels' => array(
//             'name' => __( "最新情報" ),
//             'singular_name' => __( "最新情報" )
//         ),
//         'public' => true,
//         'menu_position' =>5,
//         'supports' => array('title','editor','thumbnail','excerpt'),
//         'capability_type' => 'page'
//         )
//     );
//     register_taxonomy_for_object_type('category', 'news');
// }

// function add_tag_to_page() {
//     register_taxonomy('post_tag',array('page','news'),array( 'labels' => array('name' =>'タグ','singular_name'=>'タグ')));
// }
// add_action('init', 'add_tag_to_page');

// カスタム投稿タイプ：特集ページ（コラムなどの情報発信）
//
// add_action('init', 'specialed_custom_post_type');
// バリデーション追記【MW MW Form】エラーメッセージをカスタマイズ
// お問い合わせフォーム用
function my_error_message( $error, $key, $rule ) {
    if ( $key === '姓' && $rule === 'noempty' ) {
        return '※姓を入力してください';
    } elseif ( $key === '名' && $rule === 'noempty' ) {
        return '※名を入力してください';
    } elseif ( $key === 'せい' && $rule === 'noempty' ) {
        return '※せいを入力してください';
    } elseif ( $key === 'めい' && $rule === 'noempty' ) {
        return '※めいを入力してください';
    } elseif ( $key === 'email' && $rule === 'noempty' ) {
        return '※メールアドレスを入力してください。';
    } elseif ( $key === 'email2' && $rule === 'noempty' ) {
        return '※同じメールアドレスを入力してください。';
    } elseif ( $key === '備考欄' && $rule === 'between' ) {
        return '※入力文字数を少なくして下さい';
    }
    return $error;
}
add_filter( 'mwform_error_message_mw-wp-form-11378', 'my_error_message', 10, 3 );


// <!-- //ログインロゴ変更 -->
function login_logo() {
    echo '<style type="text/css">
        .login h1 a {
            background-image: url('.get_bloginfo('template_directory').'/images/loginlogo.jpg);
            width:310px;
            height:170px;
            background-size: 310px 170px;
            margin-left:8px;
        }
        </style>';
}
add_action('login_head', 'login_logo');

remove_action('wp_print_scripts', array($oUserAccessManager, 'addScripts'));
remove_action('wp_print_styles', array($oUserAccessManager, 'addStyles'));

function _my_tinymce($initArray) {
    $style_formats = array(
      array(
           'title' => '回りこみ解除',
           'block' => 'div',
           'classes' => 'cbox'
      )
    );
    $initArray['style_formats'] = json_encode($style_formats);
    return $initArray;
}
add_filter('tiny_mce_before_init', '_my_tinymce', 10000);

// function remove_bar_menus( $wp_admin_bar ) {
//     $wp_admin_bar->remove_menu('wp-logo'); // W ロゴ
//     $wp_admin_bar->remove_menu('site-name'); // サイト名
//     $wp_admin_bar->remove_menu('view-site'); // サイト名 -> サイトを表示
//     $wp_admin_bar->remove_menu('comments'); // コメント
//     $wp_admin_bar->remove_menu('new-content'); // 新規
//     $wp_admin_bar->remove_menu('new-post'); // 新規 -> 投稿
//     $wp_admin_bar->remove_menu('new-media'); // 新規 -> メディア
//     $wp_admin_bar->remove_menu('new-link'); // 新規 -> リンク
//     $wp_admin_bar->remove_menu('new-page'); // 新規 -> 固定ページ
//     $wp_admin_bar->remove_menu('new-user'); // 新規 -> ユーザー
//     $wp_admin_bar->remove_menu('updates'); // 更新
// #   $wp_admin_bar->remove_menu('my-account'); // マイアカウント
//     $wp_admin_bar->remove_menu('user-info'); // マイアカウント -> プロフィール
//     $wp_admin_bar->remove_menu('edit-profile'); // マイアカウント -> プロフィール編集
// #   $wp_admin_bar->remove_menu('logout'); // マイアカウント -> ログアウト
// }
// add_action('admin_bar_menu', 'remove_bar_menus', 201);

// カテゴリーリストの投稿数をaタグの内側に
add_filter( 'wp_list_categories', 'my_list_categories', 10, 2 );
function my_list_categories( $output, $args ) {
  $output = preg_replace('/<\/a>\s*\((\d+)\)/',' ($1)</a>',$output);
  return $output;
}
// アーカイブリストの投稿数をaタグの内側に
add_filter( 'get_archives_link', 'my_archives_link' );
function my_archives_link( $output ) {
  $output = preg_replace('/<\/a>\s*(&nbsp;)\((\d+)\)/',' ($2)</a>',$output);
  return $output;
}



function table_css() {
    ?><style type="text/css">
        .view-switch,
        .wp-list-table tfoot,
        .button.add-new-h2,
        #favorite-actions,
        .tablenav.bottom {display:none;}
    </style><?php }
add_action( 'admin_head', 'table_css' );
/*--------------------------------------------------------
 管理画面のカスタマイズ
--------------------------------------------------------*/
// フッターの文字変更
function remove_footer_admin () {
  echo 'お問い合わせは<a href="http://2960.jp" target="_blank">(株)フクロウ</a>まで';
}
add_filter('admin_footer_text', 'remove_footer_admin');
// 更新のお知らせ消去（管理者以外）
if (!current_user_can('edit_users')) {
  function wphidenag() {
    remove_action( 'admin_notices', 'update_nag');
  }
  add_action('admin_menu','wphidenag');
}
?>