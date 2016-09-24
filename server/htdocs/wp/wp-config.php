<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
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
define('DB_NAME', 'leap');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'mae');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'mae');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'Sr>LCZG[?(.))Z?i3w,vSbv<U8K/tF6M|b#0`C6MUf:XGXU>1<JPj]/B`7~ep =5');
define('SECURE_AUTH_KEY',  '|L.G(y>7LwB(2b<2OX-JGpE^[$*0=$c-{MOzfTLzF3IY*,Wb2i;9zMu|V0u^]q4U');
define('LOGGED_IN_KEY',    '$p;-#iA]iJDW+p$ucA=r?fR$*(=cT%gt3(IITw+TL0:8.;1UCa#|1cUH+),t^SbS');
define('NONCE_KEY',        'A-hj;l-o9vE5L4PkDDx#px|vqH9(@X#lkRJ}X;CS2W-[B{p*`i^|9.k$5ZNB-pV+');
define('AUTH_SALT',        '38zoL<+DEOiHvT<-&S5_iemWXfXD*x|EHX|  Rr~! hb,87c?m%kKNzn$u;ubfM+');
define('SECURE_AUTH_SALT', 'IB8tF5v}KX-a-^S07*!Xc393)JMAX3+(o^n-w!,L#B|pYBCvP[rzTYOyc(&qJ/U_');
define('LOGGED_IN_SALT',   'PuHE]2sZ}uk}7yXrwa`=QtZ#)2_IFY};aK| +BsRRLm&GWm_:Si#[Z<R< 9a2Q9o');
define('NONCE_SALT',       'RGOX.4IXBeh@dJy&zd1ETerBm/ Q5;DRrOvM?SNS90R!y!J$e5N[<k ,`=;&%gb.');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
