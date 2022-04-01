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
define( 'DB_NAME', 'samplesite' );

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
define( 'AUTH_KEY',         'CfiEMXXC_UM|pe?OX*r8=Q7*.OjWbE@9N]^VxNg5T.lf@UpII2CBWl1l>1E>M{+&' );
define( 'SECURE_AUTH_KEY',  'N$ Vz[=>}r?qj:O^O7H J~b#Qal$uB{*B6[@e_29t,6.Lv!{~$^7w5[:XP8J.:bZ' );
define( 'LOGGED_IN_KEY',    '8<*Thaj}y+k*rpiMx5K+r4(u[{Z:^cz+|`L21Fj{(.Q7>9~3dXp}Lo+5+!0BuPU}' );
define( 'NONCE_KEY',        '<c=+n.c/]E4,lNLTWh7{QI TU%bjQdRocekCFE<BsFH~Bu.5[NwxlE22q1@Si=yk' );
define( 'AUTH_SALT',        'UcW*%-^}_lF,.xP-BGQ;nLQ0!~C!?+cZh#}LC3,;RH]uGZDnX(exfJluk/hufCco' );
define( 'SECURE_AUTH_SALT', 'd4drl@~^rw/G^ZfX8B`P]rjPkdZeY/$AJG2X[>pr+/ZOColXE%9pkTV -pY)QO2/' );
define( 'LOGGED_IN_SALT',   ')3NMl7S.Y^uhw0-+44ZY,z7h. iaMPC^W^!,##ty6?7K|F]6fp6yy}2HOC(qn]aT' );
define( 'NONCE_SALT',       '?JZ@|>(s;_9VtCTq#Fl/g}8/Di%a,TKI@/[lbZ{Jp!?(4iRN-UI{1W!EPVpqahCL' );

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
define( 'WP_DEBUG', true );

/* カスタム値は、この行と「編集が必要なのはここまでです」の行の間に追加してください。 */



/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
