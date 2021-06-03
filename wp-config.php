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
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'MBG' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', '' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '-.=ZE|?ELD.)-=uBQOco$v;U>XI-Ms%dxI]s7w%6o@^ ?nqKT84A?gMve(W<^!1:' );
define( 'SECURE_AUTH_KEY',  'c)t(4&@h[+*A.{%ua(|lZ+406U3^ e~V3YitBo[gz1^;Z{;UI3%na{I6a<v6t(0y' );
define( 'LOGGED_IN_KEY',    '<^oeej7x<CkBiGhB`pdC/>MMf[6&Q:x`k<b{js:1Ap3F23{Q lloZu3RXoRqffSE' );
define( 'NONCE_KEY',        'wFA`#a}Arv)[4g4%*Tx!`N@rDVb{o3NkaQ(Cbq54wT [v`,F;{ 11G#?ZiXC!8mH' );
define( 'AUTH_SALT',        'b=|B8*-eh%3+y|<4brDFXCo/irSvxZpu}mrE$WL{@@:-dcN<cmu6zQ^@xYtFU?Y`' );
define( 'SECURE_AUTH_SALT', 'ovYhN=n%V5)$tw&x$>sR:2{/[u194)5<9JG&MLIu7QTl5Rd1&dlkUW7+Bwo.?X.^' );
define( 'LOGGED_IN_SALT',   'R0K7=s~sdX+NL&qZA)e]i7Q_,C?fdXJi^i/f+EhIgcSN$|s^,{QLQ&+pPN>ZQU~]' );
define( 'NONCE_SALT',       'P(B sNegJh=8tvK=`lGaimx)}jI9wD9]:@$wM=A&gPrTBy:A$M/?e/!qDPJgAZOg' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
