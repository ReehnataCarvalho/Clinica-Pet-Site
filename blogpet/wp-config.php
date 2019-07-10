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
define('DB_NAME', 'blog');

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
define('AUTH_KEY',         'iEtTl.G,*#6Fqq|w<N9ya1#HcvB084Gby[Lrbm4{#`A]hOvI]P::m?;-ItqLC]PS');
define('SECURE_AUTH_KEY',  'dqMmolM/~puuy-m;PtQ{%fwUN,~{wW;,^cV9JDA_.G7#!EL@Jz5DRam<mx~reJ67');
define('LOGGED_IN_KEY',    'FP<1?f0YJ85pPX3!i*vR(;-{`b3=p<~MBK?G(6}#@JMt/L}nG[*88.aJIDHxeY*Y');
define('NONCE_KEY',        '-EXXPJMNuWGq%LUgN6 Dv@J)5ZT,C|Q0q9k/W`u`vPJ5j61>o)qd`8xjZ{pn8NK5');
define('AUTH_SALT',        'sd0@FxDEYdTYJ+%Yyk5!tibZ*im#xhE_ZvMNXB_iN aPubt8t?J{#Iuh;kx-~EF&');
define('SECURE_AUTH_SALT', ',7r60ra/_tzGVcW=sL&,/dGzF$NUNn5I~&4Or1zUi]?]3xQ@VnN(c50(.%!F.0(U');
define('LOGGED_IN_SALT',   'z__vB b%v$0ZqdKyD~dx/Jn[5~oD&%LQ%n6ZnLxcM^EI6*TCRArvEbHK d~Twu/Q');
define('NONCE_SALT',       '~H/J&5:_$IvoV*=UZM8`>n$J[<))rg`Wd9$D8 ]WM[~}X3)P<zV^WDN=Efd^+8mQ');

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
