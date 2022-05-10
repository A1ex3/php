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

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wrp' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'A0n1x' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '123' );

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
define( 'AUTH_KEY',         'uJ@>pQ@o(|i- -f3B[1v0b3q=0hoUpXgt6h]pw8 ksbj:i>Z0H}ZJMr376@}axuW' );
define( 'SECURE_AUTH_KEY',  'XYCbNg0pC@l&^<hP(YagohmDY+:c.Vi1O7pT1zD70 2x,g &A{Nf1c4H/?[mz/a2' );
define( 'LOGGED_IN_KEY',    'x7{_sX/OP:(/5RmS:pZmUzn}l_ppSbEtjlm|l}`Ztt7 *nTN,,q4=V=Hu=tSa;+[' );
define( 'NONCE_KEY',        '=j>V5guqN9Fc5fg&QDSwJ^B=a_!AUKFyZhyyWLC3F%bLtS2/|Knnk}WYXA]SegEo' );
define( 'AUTH_SALT',        '#p sPO*,QX3Yp2-VkMg1=i8nCGR=q=ua(#&n6U_3:n>ovhuXojN5JeD,SWNY,Ab8' );
define( 'SECURE_AUTH_SALT', '$f{3NP=7Fa-yL91g?XL:E@b@ve0C(HY:vt,&y_(:Uv3*)rGqEel,m%kI&=J3s_*)' );
define( 'LOGGED_IN_SALT',   'b..L19WC&=3}TN4::/tYL{T5RA;6&MXyr/L H/P]w$REXWP]yfBaOg9gjQKKGxxT' );
define( 'NONCE_SALT',       'r<p<>^+Rt0xA2}-o4wgqG8=Euv/#9$/Tka6U8OapBUst+Q$#!W#KsFv:=a>yYWRs' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = '_wr';

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
