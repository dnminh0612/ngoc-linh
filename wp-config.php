<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define('WP_CACHE', false);
//define( 'WPCACHEHOME', 'C:\xampp\htdocs\wordpress\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'ngoc_linh' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Q%A>qY@v2}R77S5e?xm#N&]EL`-K?~ (vk9kscsSn&VT5:xVCk<8ql.*9Qc-(i${' );
define( 'SECURE_AUTH_KEY',  'unnZH{7/d!7CPmr]>Blq6s8pf+aKyP%zkvi{y0jWl1H^sN2&aKWUfmtZY;A+YWHK' );
define( 'LOGGED_IN_KEY',    'lH9Pz6>_7QFoR5[gJzl5qX;=,2QhJSrn-pO7WjZdT(=JS)s-H)u#Oi3vHywFv]t8' );
define( 'NONCE_KEY',        ';9t_ce?|ZMJT*33wdpjo4XGQ@2tMxEE0M.Tz,r 21>.e&x<hOOx?p<Azvra&~Q,u' );
define( 'AUTH_SALT',        '#bpJTWDO[BYTL>MTgmo:aDL;@+Z:?Mv&F{E<T?@pa$2Q6 .dp0<$M!)c7Vc4+hVU' );
define( 'SECURE_AUTH_SALT', 'dvMr3[1.@y}$ll}!#aZ%P7L]s;T1z[, 79r7u0k+^s/18Gu`<Ym^9l*9@X<4pU|=' );
define( 'LOGGED_IN_SALT',   '4NwS-Oyri-ITKA0n&Km9Px>()`EX&IQ3xEtq{S/*G}:#y=nm5jE&p&!CKVLBqN&r' );
define( 'NONCE_SALT',       '*[GY/kLUHGAD0RzEY44`1-NNnO?azEYi^XFv(cXuz+{g]h&=_: ]7#$1%dr7rkKR' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
