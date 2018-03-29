<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'projet');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Gwq4 vvW2g&sD8f9.;6m( Wvm96y8*b9$.X_+bvoBBKjq`QP(0S)=u-(nowI.FC5');
define('SECURE_AUTH_KEY',  'kHOGhI2T|~OcfVb2o</8jED{l.<?N/-F+t) iG+xy7mjO31(lk j=*>,/R;5Hx3k');
define('LOGGED_IN_KEY',    '*nEz]qL:$ur~pDz?RV0X26yj[|:DlxQvT/cbFDZtB![T2dW9/<H><A:+0/aS%3%P');
define('NONCE_KEY',        ',<[[q+-=nm8%O?8nWmF*28;FRCwe%]<6,Oz+N;xCNR2Jv7s|/)OBeUh|Z^WseTpj');
define('AUTH_SALT',        'E&vc=<kPB:MDL,NY=,9{#c{{Z4D2^;xkW`6wK^/MK_<>mXhC&rQwXJsR4^lo(<MJ');
define('SECURE_AUTH_SALT', 'gZsP?7x{.E%/J<=e-^.s4/7Kd6!n&:ZZ1zD)PV-P}5FQ&*BI1,47:%R~jbC}EJI^');
define('LOGGED_IN_SALT',   'MQ2]d@g`2X`XT$.ku*rY$jLd7W~TW=?iS<w.la=*4MB>t)?dPnG!JV`8YJm;Zlum');
define('NONCE_SALT',       'LQUB+.Za+P<Lg%f/dVl+z}e+,Rq9Mv=4@W+Hw!)KnVPRg0jCv#;AE7(J1J1HhviO');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');