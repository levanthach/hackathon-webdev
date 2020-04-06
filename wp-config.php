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
define('DB_NAME', 'hackathon');

/** Username của database */
define('DB_USER', 'hackathon');

/** Mật khẩu của database */
define('DB_PASSWORD', 'admin');

/** Hostname của database */
define('DB_HOST', 'localhost');

/** Database charset sử dụng để tạo bảng database. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'J-[^@sORA2B-3I6(Iqnh~527m%!Gl|aGc:{#~J9ot:SR&wz14an|qw`uf7hR7Fjn');
define('SECURE_AUTH_KEY',  'Lf_M,9GN^ak)SW 5*[b_K6H<oce7 %9i_g`uVG.O%o5[+DcQ]9>G>.(%n00&r rq');
define('LOGGED_IN_KEY',    '*OEAkD|GAb<Wwn[8Sl$[&/BPJ]o#:XGSr7:7Ua2Z/Cf92F$xO4FwHNsd;fT=!m#!');
define('NONCE_KEY',        'gNxo-0&II9|%MHGF.#>_G<e`]X=P!(q}I_*csiiuBGC5xeK=H-sPw2LtoA9y @;e');
define('AUTH_SALT',        'y[t}j:kK-3(nCmz!.!d_MwSu!y$eVQRNb$p[yQk?BvEa>-X|mscpCZmI9+ud&0oF');
define('SECURE_AUTH_SALT', 'ehBR-lh*PQofCUD_dPp `Ug@1fetj ,wC]$wYG2qKS4(dwQ]>5gTCiEkmZ HB&_b');
define('LOGGED_IN_SALT',   'wZ2}j f9?0hTzs*8bW75rl-J;3>aJHdOw/6(%4sN?vH^n,Yk<:!h!GZ1NjyFg{C%');
define('NONCE_SALT',       '{Nl@CS.BoBs-}}_~] s[=p,Lpt0upT!gfKd7:%sRBlDV~E8hTm E~Q$uvGfVDz;T');

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'wp_';

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
