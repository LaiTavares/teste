<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'ccbeu');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '_%Z8%7F`K0$c<yXb|bg|C@=3AEGycYmz]yk:CKd`-MPRSS5)~k])`|}rSteG.Y;8');
define('SECURE_AUTH_KEY',  'dN8hoI?7k-!DW|4H/waowhR.W5(2m_^<Wj_PkrPR~.wAXiA{GsO5.![{I#h^{s{_');
define('LOGGED_IN_KEY',    'BHf/^)E*={KRx*}z38D(6BfDT_#h6;R2we#^OQJIaihe8z!IuzfE+C<27^JJ)ES_');
define('NONCE_KEY',        'e%<=hm:H)|AiuI}nRwt)n6Vt}h1_y;%)Yc,&5x?KvLBhk{&Kp v_V6=LcK->WJ5l');
define('AUTH_SALT',        'wnx BwNfAF0hUy=>4!0u:W;e(r-]fezBO%?}v|vh,<!es+Z?tQ2@X%/o5$@u2)f&');
define('SECURE_AUTH_SALT', '*%r)mQ<HnL#lVYx%XV ]@=0K|V&3w)n_ol,*rxqyw18lujzlGpl9F`g!Dr?Ot5t ');
define('LOGGED_IN_SALT',   'QOi7).fD~} j`3SQWxodGDw &NbGG~8538T$0>xF,2FmLx^_)[N`.206Yh+wD9{b');
define('NONCE_SALT',       'Oy<SqKnSan18cQ#Se#b>?if7Mr Fd+9W3[^ZiWc.LL}|^M5Tz_Vzl7<B.d;dr%1l');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
