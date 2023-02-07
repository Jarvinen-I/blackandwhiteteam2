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
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'blackandwhiteteam_bd' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
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
define( 'AUTH_KEY',         '.kG7}8Q=)i+he$qH[0TB|[$E`9L4}4Bsgg T!r1e?ykYK=f#!<v7unkQf=q|q+)e' );
define( 'SECURE_AUTH_KEY',  '=XU uP)UBU}xp&}[^27B/w_Tr}&evgcvKrUb]-3C,5j$M;mI}>3N8Y}Bs`n@b^9M' );
define( 'LOGGED_IN_KEY',    'dDHHtGU( >+nk9{~{=bt`Mnd RyRs6i7-(OdE5YX2<^tmoHxCI.$[&_AMOtCU3oe' );
define( 'NONCE_KEY',        'Ar;tzQG9<5.zcp/]utwHr|Epdl_UUa:&7R|YH+g`>@4,oT4U0]cC[=1A:#3[Q} (' );
define( 'AUTH_SALT',        'g5z~Cp^J 1zuJLCTeUWQJUpK8I3Z4$a:aWEgF^S1:>zA(W(|;M&s&#4u6][Xw}}u' );
define( 'SECURE_AUTH_SALT', 'j268IqT_uxAwp>j-/cyCBXrB6w2_|Qc0DLf+5 6%k!KeN:UR~wO?[=0~w5Af`X^W' );
define( 'LOGGED_IN_SALT',   '`fKSL]P-T5W[$|4&97Vzc9(X2P *<_PNF $rj827-p%IlXqmUjfSI$w/_OP_tmv4' );
define( 'NONCE_SALT',       'lfqMvmp;J#Z_tpQ|uBPT$Tl`yC93v[+~>SY!j%];=7ka?w1Q0%v&#xSDtBaQA}=j' );

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
