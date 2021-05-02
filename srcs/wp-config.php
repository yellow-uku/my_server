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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wordpress' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'pkayleen' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '228' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */

define('AUTH_KEY',         'LMA;WI6:V<++VF4!s8nVyUD#m%/V}BqEf]f9|4+1iUQ;fS{(qPW`<e$7Pm+7]W,b');
define('SECURE_AUTH_KEY',  ')m <j7E_vv?zXiYQ51`[f(XO!s!8Y02shi&`X2}|V@|B5}/6$NT&Ix$jA.U||Sy$');
define('LOGGED_IN_KEY',    'Pnjg/_F>;g=!04jgy/ =^w+[|2+CI=J3;4oBh7Vr&28<v]]cSIUaF%6~X/sb&5&=');
define('NONCE_KEY',        'Bi$3 3>E4|7`Afgb1&w#N#N%G{@Q$N2x163F=`1+L+WE2A83mU]8|3`pWum*f,#k');
define('AUTH_SALT',        '/CzTF(r)ng2{;u}WfC#7>%IOP|G:1&QO10D2VrbMkB-VN-YV:q2$]XXI/Eq?Gh|I');
define('SECURE_AUTH_SALT', 'r+VmwPAvw-qu(DL#TuQV=T^,V6@O@c2uO`}IvK<H|#OvAe^!/f#`Tm 91i}]&`3/');
define('LOGGED_IN_SALT',   'O=W;au[`E]bM8_jjSJj?3Q4#!i[/Q-&-= YiNP:U4@>oVx@7e65M~EYEOEXVkx:d');
define('NONCE_SALT',       'h.i)s3**6~kztcl{Xi;$npf]7!i5EB.G)j&ZKHl^ESD%^Wu.1amWF#UO;e5>_~bs');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
