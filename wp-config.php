<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
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
define( 'DB_NAME', 'stoil_db' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'V[hGS;sk^%^jUM,[6IO[x[|[)JY5s,il/*=Kt[89>{^XTzRy;`B~;eeyi+}H7|T[' );
define( 'SECURE_AUTH_KEY',  'm)jp!k_A2)0W~_RrJ:LG`:GdSsj?`5>4<~WJG-O&HLT9Ui~4wi^[%XZ TSZ8(EYb' );
define( 'LOGGED_IN_KEY',    'x|W]Q=^(V=![n1<qyyStA/@X%:%My}8(014/+GX7=O(vH!KyyFt>k+:LgrBd2v3D' );
define( 'NONCE_KEY',        '{N=T9uZ]IpOSL/&N:I{!Jw`bwarA(oHbNJuP__9m7kD}j:2k0?PI^<}OFlN4Apr[' );
define( 'AUTH_SALT',        '|m1xX=s4vLNEC:3#+f~m}mS4^wlP@1)0Z-T*HE&G*kL4QjeB}7>o/4w~`)d}N:xQ' );
define( 'SECURE_AUTH_SALT', 'Di>iN*9R5I*Q@LkN6=DSp1 swLVV+sD.^wES=Rue&$7DW~S6=G`H`Yk&5<OuaohR' );
define( 'LOGGED_IN_SALT',   'PqhnFy}p.qiHz+8X1TBqhN[bkjus_8s6f{!py;qWrBCgq<=Uj:h5}95^8&D]%4@x' );
define( 'NONCE_SALT',       'D.J{xGwMpNIL,;{wjd[|;d^soTFJ1$mP_&$kgF1BE;),~{O)?z;vo;%bfeT];]k]' );

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

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
