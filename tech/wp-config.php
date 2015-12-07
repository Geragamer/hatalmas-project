<?php
/** 
 * A WordPress fő konfigurációs állománya
 *
 * Ebben a fájlban a következő beállításokat lehet megtenni: MySQL beállítások
 * tábla előtagok, titkos kulcsok, a WordPress nyelve, és ABSPATH.
 * További információ a fájl lehetséges opcióiról angolul itt található:
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php} 
 *  A MySQL beállításokat a szolgáltatónktól kell kérni.
 *
 * Ebből a fájlból készül el a telepítési folyamat közben a wp-config.php
 * állomány. Nem kötelező a webes telepítés használata, elegendő átnevezni 
 * "wp-config.php" névre, és kitölteni az értékeket.
 *
 * @package WordPress
 */

// ** MySQL beállítások - Ezeket a szolgálatótól lehet beszerezni ** //
/** Adatbázis neve */
define('DB_NAME', 'tech');

/** MySQL felhasználónév */
define('DB_USER', 'Rendszergazda');

/** MySQL jelszó. */
define('DB_PASSWORD', 'Rendszergazda');

/** MySQL  kiszolgáló neve */
define('DB_HOST', 'localhost');

/** Az adatbázis karakter kódolása */
define('DB_CHARSET', 'utf8');

/** Az adatbázis egybevetése */
define('DB_COLLATE', '');

/**#@+
 * Bejelentkezést tikosító kulcsok
 *
 * Változtassuk meg a lenti konstansok értékét egy-egy tetszóleges mondatra.
 * Generálhatunk is ilyen kulcsokat a {@link http://api.wordpress.org/secret-key/1.1/ WordPress.org titkos kulcs szolgáltatásával}
 * Ezeknek a kulcsoknak a módosításával bármikor kiléptethető az összes bejelentkezett felhasználó az oldalról. 
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'SgVqh $&aa,e(r+hn8NQsN0hVphw-+9|F8_QhkapSq|r)M;zHJnQ>v ZxQ:HU(-;');
define('SECURE_AUTH_KEY', 'QUv[73>_MuxVnk1EAu+!|:M2Xk8GQH5W%={Fu%J|t27vuAVVjVO7$iAFXDu{-5d@');
define('LOGGED_IN_KEY', '7CrYQ-.lIW}kfYHt4g<X$*2W!Q/`F;2QUMhNx^0LcE@|cu)L5]%c-D|oT^1n>O,,');
define('NONCE_KEY', '?||GD8^qdrAISs^Gsl,f9U%Cr{+ye0jEke^pl=Yh| Lxb!oYlV7vb=])ZjubU)@o');
define('AUTH_SALT',        '#/3Gz2Txe8hk6i,-yH_+mMZ(c02xqS;Omn6:-?890S^l]Mq$1dCB|<jfb07+D`Zk');
define('SECURE_AUTH_SALT', '|/!{J; f%[k]Y-qn<+Le6_cHm~Qx#7~+%L%TcRL*W>~?a->Y*k(R%t[d=?Q^%AKn');
define('LOGGED_IN_SALT',   'JY>ra49!!PTPn?^lgQle2!WEI7O[t^5-9}q^ygl:&k`v;6p}qo5eeIyQGPV#@DXi');
define('NONCE_SALT',       ';e=k&0=nPl,P(G Wi5Q$U+#0fOcA2-$?H>7TVa$a%7i6ECo9U{*`=gQeflXro}nB');

/**#@-*/

/**
 * WordPress-adatbázis tábla előtag.
 *
 * Több blogot is telepíthetünk egy adatbázisba, ha valamennyinek egyedi
 * előtagot adunk. Csak számokat, betűket és alulvonásokat adhatunk meg.
 */
$table_prefix  = 'wp_';

/**
 * Fejlesztőknek: WordPress hibakereső mód.
 *
 * Engedélyezzük ezt a megjegyzések megjelenítéséhez a fejlesztés során. 
 * Erősen ajánlott, hogy a bővítmény- és sablonfejlesztők használják a WP_DEBUG
 * konstansot.
 */
define('WP_DEBUG', false);

/* Ennyi volt, kellemes blogolást! */

/** A WordPress könyvtár abszolút elérési útja. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Betöltjük a WordPress változókat és szükséges fájlokat. */
require_once(ABSPATH . 'wp-settings.php');
