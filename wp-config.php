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
define( 'DB_NAME', 'babykingdom' );

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
define( 'AUTH_KEY',         '_sEiRCE1x/7*+MZC;t.BY< ~cjjs;),RM:#f/OEV^)>bE_,3.ypX{(0:Zg+<BlyD' );
define( 'SECURE_AUTH_KEY',  '<<m;%n-,0k;25-<(Ex~<:6T=<# =1DF[GRM4~QuE,74uX@FJ=ybH`[29PHE^MzFJ' );
define( 'LOGGED_IN_KEY',    '=8a0pbsHTRUx|`Gn$Q^Nh-1.QDKE%+>V5&SU6M<JTRbT^{}:(cBj;t)`Fq gQd_}' );
define( 'NONCE_KEY',        '=9QNMt3(d(]Mh(;p}RXgOr/=LX_< f`T}1CJ@l^Q3{EyZZ`-W9]3a ?S&uV*8vy!' );
define( 'AUTH_SALT',        'UGU?Y>n!hLq.#Yx` :5rO]gh(*p-#.w*k0Yjdl;((cRP)N/K5T:_6{=0bbk5HLAs' );
define( 'SECURE_AUTH_SALT', 'iKP9sDTD{c2[[ _:B>UyMMX!S/c~R7fnycnJb{GM`wz]a?ZGbO#Vgdp3}FPcXHC:' );
define( 'LOGGED_IN_SALT',   'unV=t0{+r4JNE+;wV&?);t`bKBCHAptkk7FZl*Vt9D:/T,1ln61YbQy]vG>cJn6z' );
define( 'NONCE_SALT',       '3m-7,lR9c6[lI?1%//0(35oajQ_%2f1YX|B~@SLX/+Q47tn2DwyMx-k@aqz%gas7' );

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
