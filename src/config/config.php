<?php


//---------------------------------------------------------
//فعال کردن کتابخانه دیباگ
define('DEBUG_MODE', false);

//---------------------------------------------------------
// تنظیمات دیتابیس
define('DB_TYPE', 'mysql');
define('DB_HOST', 'localhost');
define('DB_PORT', '3306');

define('DB_NAME', 'mvc_db');
define('DB_USER', 'root');
define('DB_PASS', '');

//---------------------------------------------------------
//مسیر سایت
define('URL', '/PHP-MVC-Blog/src/');

//---------------------------------------------------------
// تعداد تلاش برای ورود
define('MAXIMUM_LOGINS', 3);

//---------------------------------------------------------

// Set values for Pagination 
define('ACTIVE_PAGE', 0);
define('CARDS_PER_PAGE', 6);

//---------------------------------------------------------
//اسم سایت

define('SITENAME', 'Swift MVC');

//---------------------------------------------------------

define('DEFAULT_IMG', URL . 'public/img/default.jpg');

//---------------------------------------------------------
//تنظیمات ذخیر سازی عکس
define('IMAGE_UPLOADS_PATH', 'uploads/images');
define('IMAGE_DEFAULT_EXT', '.jpg');
define('IMAGE_THUMB_EXT', '-thumb');
define('IMAGE_THUMB_WIDTH', 200);
define('IMAGE_THUMB_HEIGHT', 200);