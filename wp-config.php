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
define( 'DB_NAME', '0028onlineAutoSchoolWP' );

/** Имя пользователя MySQL */
define( 'DB_USER', '0028onlineAutoSchoolWP' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'lgHBZhhxqI9dN6B3' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '[Q|8Dr 6LSpZnBm7L0NW6]Y,>o24#IyF&YX4N|Zt&yI|N7!d%4 ~(J7z(<slh,U6' );
define( 'SECURE_AUTH_KEY',  'r>z}g5<1=|*.a,eQ|mKU5hA`6y:`$IQ:MD4E(MPA~ESNj1v?o?U5htoMM@ePrQ%e' );
define( 'LOGGED_IN_KEY',    'UR@FfHOK<(zxr!TLFeJ]z;d-av#}d|x0A$Aj:1xJe*RBdcsR[YD.?Vwv#emO3~@.' );
define( 'NONCE_KEY',        'P$c]XdS}4n3S7O$-1X0JfWouc[1MFCC}vQF(1fQ)KU;yTe8p,}`lCe!cb$E51EsH' );
define( 'AUTH_SALT',        'x1O> J@Z+/<3^lXt#M/{RPW]K]^TfA1|FW0#S )lCGtk~+yn,aSI>8<c.,J8h_j^' );
define( 'SECURE_AUTH_SALT', 'L)Qyr8g}w2TYme3V[(axY,QhUqL4;bjyrW6.UB<1&dyTr><@DwUi@e.{MRG{tI{_' );
define( 'LOGGED_IN_SALT',   '!:vSMgJZs6Nzrnx!(/ozH!=I4jb7F3lPKLYk=p=GusANp3T,OP*hLTIY/Mz&s!qi' );
define( 'NONCE_SALT',       'x$?DFRjl|kI+~oE;%d+>E=|!KEsP ]g]{qAs|,]$/zb;^YHvC2Rr!@bK;okXqjnr' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'onlineAutoSchoolWP_';

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
