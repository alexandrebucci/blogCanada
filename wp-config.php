<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'blog');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'password');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'm7zZpC>jw>-;O}{^J9l;.UopIsJi{.BbujVJ7N|.+LSdl?SDt3BY#kb1<N3`s~(e');
define('SECURE_AUTH_KEY',  '5pT]D`&a?McLZ5CH1m29K?h##P@Luc|qyc|kjzo3!!2j4_k;kg7ywx_Z0|rc2+y_');
define('LOGGED_IN_KEY',    '5zLmLuVLP*h^xktFlKqrbt(>J>{.zA#i#;w_d@yw;B`?038[yrVB;A}R+Gd=$g/F');
define('NONCE_KEY',        'n7{d2wQ_ rvuj1$T$HCvGBnKT$2O7HA9XlR|X]h!Y@(cAdELG5MTJsv}u *|nv/J');
define('AUTH_SALT',        '{G +GZaKNYUu-[9(%&[b|)OM^T,8|X Do$rIWX@u-[+DA:_<+<Xg4rxeE#p7Jr>+');
define('SECURE_AUTH_SALT', 'c}::f3Z^4$h/+Ev|eDZm_aEnC{ANYf?[IV&23r];|dy `*<n+JcjsqvblnPGe9#+');
define('LOGGED_IN_SALT',   'q/^D:dpfHBZYNR>e1S7hYI?SxnNqaaGIR?<P%%@~7L0J>p30vL,[-J`=f>rm_58k');
define('NONCE_SALT',       ':kJTITLr~Tq(igVjW68E8eCr6D:0^%1h<smfUFC!@:*fomY!+,;P<tS4I~|dsslY');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');