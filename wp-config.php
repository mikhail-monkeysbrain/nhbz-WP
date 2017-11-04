<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'nhbz');

/** Имя пользователя MySQL */
define('DB_USER', 'orlov4');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'XuxvxRbITJ');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '#1H.{<b_??vd*CKV@KO|>jqwRW<sa.Z=IOf,t{`S9aQ4:ONUm1tkM6c0I!|4tuTO');
define('SECURE_AUTH_KEY',  '?[}-a,Cx+.Q+kB~vAj6/7?=Id+~PCD;Qdh_fAJ&kBfHNs?[4,,3+yWFAhlppS? J');
define('LOGGED_IN_KEY',    '8J78)etaBp>gRT_z5c;^0NbRDHk4KJ.TIw ^_/}A^;_xSUX+Xk`xF2`k*ZL]5sYr');
define('NONCE_KEY',        'gfq_lgqVW`0072`i.K_ce?f<. Yc_HkmmH r88|#.WG-L0VjSQU>p.!N;9$(|h=g');
define('AUTH_SALT',        'f-B]iH9MDj)I~7`*-]wD enR!d0Ooj{j:=|~^bBjf/0W,tMI;*6zh,Sz~6&m&?#}');
define('SECURE_AUTH_SALT', 'sAeV!X>6Vyk_I~[}SsGJL8))iJgygX;p2DFurz{T0&SX}?RALu;6GLt7GBPDo6ly');
define('LOGGED_IN_SALT',   '<z*A@TYL.p:|G8Z|KQW[ F~kP.57U?zLhSR1*X3`nCV88r@F;`Pp tT5(s=INZZ`');
define('NONCE_SALT',       '`b]%cOQuY>tk8pUJ:1^AJLzU_,1]4ue1L4oBqYKa)0gQSa:SQS=]( tVE:%qI0[r');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
