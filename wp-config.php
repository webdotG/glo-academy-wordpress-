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
define( 'DB_NAME', 'maket' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'maket_admin' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'TeTWvYFAvxRdSa5C' );

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
define( 'AUTH_KEY',         '=u1LEh|,nG -N/Yd@>=3evHp@%DY_43HxDK(!C:q]a6?)A$8q;}ym*}N^v%[Z-]*' );
define( 'SECURE_AUTH_KEY',  '&5!UVu(og)}>A#McNq+74@cIL,yd6!%Ba7Ed{-^ZJP-8!UlXl.&grI*n-+5gR%9`' );
define( 'LOGGED_IN_KEY',    'ELG[yJDWDymE[g-Y2>)]qHumS@Bng,82v^pwD,[$A#@Y!H] |E->W9h tAX4[tzw' );
define( 'NONCE_KEY',        'cK&=gCFR31!oKxewJg4r*U8]Q{d^ZiY3yGm{-cI)<6LXm1DeP!Jo1hNREtHN|.AT' );
define( 'AUTH_SALT',        ']xfb?+((cY7d>5T$D{FFVpV|Z&y};UcAa9`FOK_R/v}4bHnn,pR/})@SkP`K=oW`' );
define( 'SECURE_AUTH_SALT', '^a~0{%4LG9Zg0g>qNC1FNnJ4^b_.q|&f0?^@#W0<~CJbX{kNiKjV~P/b`uwJwn9v' );
define( 'LOGGED_IN_SALT',   '.8.Yg5VDm5?[dD8hUb &o[0X1KX[Xk-3zGvw4`6v(mn#2f[i[6HK#%%wD#):A2>1' );
define( 'NONCE_SALT',       'jUAJ<Bnt|Tv1@:VK HPLL3LJK aE|-~s,g67(Ez8`L~gphL{?m{S3dIlAFP3hV$<' );

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
