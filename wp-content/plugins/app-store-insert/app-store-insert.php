<?php
/*
Plugin Name: App Store Insert
Plugin URI: http://rakuishi.com/wordpress/6018/
Description: This plugin insert app store link in the editing interface. <strong>Please Change Affiliate Token Value from Settings.</strong>
Version: 1.0.1
Author: rakuishi
Author URI: http://rakuishi.com
License: Released under the GPL license
*/

define("PHG_AFFILIATE_TOKEN_VALUE", "PHG_Affiliate_Token_Value");

// admin_menu アクションフック
add_action('admin_menu', 'app_store_insert_meta_box');
add_action('admin_menu', 'app_store_insert_admin_menu');

// 投稿・固定ページの画面にカスタムセクションを追加
function app_store_insert_meta_box() {
	// WordPress 2.5 以降: 編集画面セクションに追加
	add_meta_box('app_store_insert', 'App Store Insert', 'app_store_insert_meta_box_html', 'post', 'normal', 'high');
	add_meta_box('app_store_insert', 'App Store Insert', 'app_store_insert_meta_box_html', 'page', 'normal', 'high');
}

function app_store_insert_meta_box_html() {
    $path = plugin_dir_url(__FILE__) . "app-store-insert-iframe.php?token=" . get_phg_affiliate_token_value();
    echo "<iframe style=\"margin: 0; padding: 0; width: 100%; height: 300px;\" src=\"$path\"></iframe>";
}

function get_phg_affiliate_token_value() {
	$affiliate_token = get_option(PHG_AFFILIATE_TOKEN_VALUE);
	if ($affiliate_token == FALSE) {
		$affiliate_token = '11l3RT';
	}
	return $affiliate_token;
}

function app_store_insert_admin_menu() {
	add_options_page (
		'App Store Insert',
		'App Store Insert',
		'administrator',
		'app_store_insert_admin_menu',
		'app_store_insert_setting'
	);
}

function app_store_insert_setting() {

	if (isset($_POST['affiliate_token'])) {
		update_option(PHG_AFFILIATE_TOKEN_VALUE, $_POST['affiliate_token']);
	}
	$affiliate_token = get_phg_affiliate_token_value();

	echo <<<EOD
<div class="wrap">
    <div id="icon-options-general" class="icon32"><br /></div>
    <h2 id="wmpp-title">App Store Insert</h2>
    <div style="margin-top: 6px">
		<form action="" method="post">
			<label for="affiliate_token">アフィリエイト・トークン: </label> <input type="text" name="affiliate_token" value="{$affiliate_token}" size="10" />
			<input type="submit" class="button-primary" value="変更を保存" />
		</form>
	</div>
</div>
EOD;
}
