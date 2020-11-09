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
define( 'DB_NAME', 'wordpress' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'gangyeah' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '1S2s3SZsz' );

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
define( 'AUTH_KEY',         '|2E~O0?+rYqX7{(IJ;)(-,N}?TY@>2Jl_JiVqBp/{^j=(e-XDWK7CHwd0i0Q9^HV' );
define( 'SECURE_AUTH_KEY',  '<WYE:n)3,wVc[,^Mf7/4;}iq]K&ae-DR*%02N<:Y7~a9x+IXCebjLbzDL/@a-FB.' );
define( 'LOGGED_IN_KEY',    'F}6-agQ0/`@]s6$L1&(fJZSF[MPe{9p]C],?t& :GG|be4]heL0*ib|4kh:N16V6' );
define( 'NONCE_KEY',        '4f?w:@mZ3z0Rh}n~LXQ0xEFpwHl@ZlbX:iB.s!+g:Wv|M/rVP%b^`Mzo(eNQXt~_' );
define( 'AUTH_SALT',        '<qi){e%z80y~h>f!nj^1J;5d)ANmR-?3uFO~KjbL1Kk@%<+e !Q)sqDL(2t`r~r`' );
define( 'SECURE_AUTH_SALT', 'XxdfD[&Xp:Y5J;d?%Is?I6GqCK@)~j 0DlhA%Roqz3f)#gy]}{M3YH[@(& qVX^*' );
define( 'LOGGED_IN_SALT',   '}-?fgfTiU*-US^S{@UpVUPz4YFeXG;xz^3r MyPi@?KufA$7D713_~Iaru<Px&M8' );
define( 'NONCE_SALT',       'B0<y_x$FgX%&lJdrjr<.X:sbxQNB3/[g.tHBZevBs*X<2-Ft Y?oi}2UAC4jHoOU' );

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
