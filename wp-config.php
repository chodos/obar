<?php
/** 
 * A configuração de base do WordPress
 *
 * Este ficheiro define os seguintes parâmetros: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, e ABSPATH. Pode obter mais informação
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} no Codex. As definições de MySQL são-lhe fornecidas pelo seu serviço de alojamento.
 *
 * Este ficheiro é usado para criar o script  wp-config.php, durante
 * a instalação, mas não tem que usar essa funcionalidade se não quiser. 
 * Salve este ficheiro como "wp-config.php" e preencha os valores.
 *
 * @package WordPress
 */

// ** Definições de MySQL - obtenha estes dados do seu serviço de alojamento** //
/** O nome da base de dados do WordPress */
define('DB_NAME', 'obar');

/** O nome do utilizador de MySQL */
define('DB_USER', 'root');

/** A password do utilizador de MySQL  */
define('DB_PASSWORD', 'ch02896');

/** O nome do serviddor de  MySQL  */
define('DB_HOST', 'localhost');

/** O "Database Charset" a usar na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O "Database Collate type". Se tem dúvidas não mude. */
define('DB_COLLATE', '');

/**#@+
 * Chaves Únicas de Autenticação.
 *
 * Mude para frases únicas e diferentes!
 * Pode gerar frases automáticamente em {@link https://api.wordpress.org/secret-key/1.1/salt/ Serviço de chaves secretas de WordPress.org}
 * Pode mudar estes valores em qualquer altura para invalidar todos os cookies existentes o que terá como resultado obrigar todos os utilizadores a voltarem a fazer login
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '7B{Xf2o)G,RWi-H.[:Y/3m!o1N`TN,ED[tSnUs9Y+y7+eqkPQ4K^=CQyW,9+G2/@');
define('SECURE_AUTH_KEY',  ']HpJ@D0p<p8eXA1 PucWE}A#-jLCZ,16xFGBs(Y5%&<}9Oqkifhch{WKZ7I>~,!q');
define('LOGGED_IN_KEY',    'LcF3#IG#uWM4NmV/x>GWb~B2i:/(vPUb6e^ETuKiA;/n(ddfQZd;{1jO`2VSq^,(');
define('NONCE_KEY',        '#AYioa9^jztxwVF,!w(qxrP{y]/Fx$w]>|}EC BRkdg1u[$*!>n#?)7590mpr4%@');
define('AUTH_SALT',        'mT@-&(|Ejnojnj-r#9W`dob;:%lR|<^g$(gS}/Bk!p/M,G;@)TRG+$93Hyszjb<M');
define('SECURE_AUTH_SALT', 'k:%PT51|I23/2T^}Yj_yP->*GC$Othc *&<JW>!qG}=:[Xvt#erU7S!fk^-jk0#<');
define('LOGGED_IN_SALT',   '$4XRo^HU;6}vfY<C3f]o- U::-_a8J+O4l$0ZC-DZ_(}Sg0!2xX7j-dVb[eT&Jm#');
define('NONCE_SALT',       ',^RVd6Vse%vd<fJ;^`ry+lUn:.0SV5-fcmoC&j?$s[a%,O|,!G}($eZr?]ICQj8S');

/**#@-*/

/**
 * Prefixo das tabelas de WordPress.
 *
 * Pode suportar múltiplas instalações numa só base de dados, ao dar a cada
 * instalação um prefixo único. Só algarismos, letras e underscores, por favor!
 */
$table_prefix  = 'wp_';

/**
 * Idioma de Localização do WordPress, Inglês por omissão.
 *
 * Mude isto para localizar o WordPress. Um ficheiro MO correspondendo ao idioma
 * escolhido deverá existir na directoria wp-content/languages. Instale por exemplo
 * pt_PT.mo em wp-content/languages e defina WPLANG como 'pt_PT' para activar o
 * suporte para a língua portuguesa.
 */
define('WPLANG', 'pt_PT');

/**
 * Para developers: WordPress em modo debugging.
 *
 * Mude isto para true para mostrar avisos enquanto estiver a testar.
 * É vivamente recomendado aos autores de temas e plugins usarem WP_DEBUG
 * no seu ambiente de desenvolvimento.
 */
define('WP_DEBUG', false);

/* E é tudo. Pare de editar! */

/** Caminho absoluto para a pasta do WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Define as variáveis do WordPress e ficheiros a incluir. */
require_once(ABSPATH . 'wp-settings.php');
