<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、MySQL、テーブル接頭辞、秘密鍵、言語、ABSPATH の設定を含みます。
 * より詳しい情報は {@link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86 
 * wp-config.php の編集} を参照してください。MySQL の設定情報はホスティング先より入手できます。
 *
 * このファイルはインストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さず、このファイルを "wp-config.php" という名前でコピーして直接編集し値を
 * 入力してもかまいません。
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'fk2960_creators');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'fk2960_creators');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'fkr2960');

/** MySQL のホスト名 */
define('DB_HOST', 'mysql810.xserver.jp');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '^KR0u5/aR?>lV{rK70EKSA|8[kVLXR7q?&L.Md-$<^T5-v0|-.5P/2REPbxPo!pP');
define('SECURE_AUTH_KEY',  '1VaC)*2REgl|022b~u fr:Y!zt@^jup])x-M<IF>GUY8<-B+j*0Ni~0+m0=:W5,]');
define('LOGGED_IN_KEY',    '7A9*!LqrFMmw#OeuYe2-ru-Oo<C,X_!*-olHwSY,Z7}]H6y8 VPir@WgOA%W^8/X');
define('NONCE_KEY',        '+!;/;37sixtLc}Q-5+j~M[j)C$%p*H`+Ha4PdIV4#dfh8SwL#IVBJ2p@_NoYtQa1');
define('AUTH_SALT',        '`^<WyB_NBaD14oog U{w{w!-r!#g~?K5(h;$l^2vR_w2w^j7OKOvX?n6)St(nS;H');
define('SECURE_AUTH_SALT', '-mTt`hrR4s:MICF78=:PI-KC-uNrl@+~`{w9-@#;6ADdb3{,S]%z>]b]IsW|*QIe');
define('LOGGED_IN_SALT',   'L+TN0Y3}E|(-Ak$K! unRuiB/- NO*H|l79~~*ey! )2Zt#uuzps|uaLQ9ZC=9y+');
define('NONCE_SALT',       'iXp;qr:mYd)t /DYA|J_Zq]DbmE!<pf}/;xX`@Hw1]Xk7b_^>,H`D^eX#tv]pF8o');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'creators_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
