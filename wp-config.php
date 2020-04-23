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
define( 'DB_NAME', 'dating11_db' );

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
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'lES4Sk>}o/KvfR5]&{G^D.CF.D%&:aOEU6D <h1b1<&{Nn($8_vy(YY^V=mFqDaW' );
define( 'SECURE_AUTH_KEY',  'qpG{EJT6H<$yx6;2!%6u7>&YsI5c,dFs~H824i {`qFVQ&wx!MMk*-iH8y.L|(_N' );
define( 'LOGGED_IN_KEY',    '(yUIoa44CDcQy0=cONwbM:,OuDb-[&<+si6fo%*lX.^X;2:|RjPkD(UXH:@4}c&c' );
define( 'NONCE_KEY',        'B7|2>zYS)g39f2D1_w~L3=3@QP6VtQ-m22V?-[nn7JS^A1Y.!cMRdag@|t10AUqH' );
define( 'AUTH_SALT',        'VQ=rr!H^lJylM%=<v8^x=?&`>5oLArfle66*g5i~?X:o?`nZPy!7W:sr8q`b6C(b' );
define( 'SECURE_AUTH_SALT', 'a!aRpIC2JBP+eo<>`%A~J{%{*PGa-rB7 N##XVvxSy#0I2:KK5a]3|~z&H`Pu^y4' );
define( 'LOGGED_IN_SALT',   'f&2G0t^|ha+q2r oho_#9iNP=2%_AlLUBH~w^k^P6/&mJ&[}ih``{q7jf+oDEKuh' );
define( 'NONCE_SALT',       'Esx_2S}+s;K}<]xMyzY+:-m[ zMB]*H^[L0qbk`Gzxo`Jsakwb*O1CEB.i9+4NV;' );

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
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
