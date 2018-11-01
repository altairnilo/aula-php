<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'imuni_teste');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'imuni_dados');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'mjockermoore');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

define ('WP_HOME', 'http://dedetizadoraimuniastro.com/teste');

define ('WP_SITEURL', 'http://dedetizadoraimuniastro.com/teste');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '*+W %,62km@J}?Xvl&<R<<&&xdB7O$ZSZ|>Gb!jsTRZ@O/j|Q-&v$<20S!;+^Fv#');
define('SECURE_AUTH_KEY',  'wyr$%@-S];.C;*bZ]i(Zi4pKW$U7zo=)u+7d%YUW2Qd2q@[_lY9HFf0Py9rl1]3o');
define('LOGGED_IN_KEY',    '_TKO)dYJe[nuCmHfT^<MPz/XrR$Xo/@_idZ^1Q*+BdY lB~W+AW%5%O#+pjiyK_6');
define('NONCE_KEY',        'Ql8BR]lY]Q`9cN<UT3wmR_v7u|D6%--R,`a$zp}];>Y;6_o3 8|G~E5p}>Q+mda4');
define('AUTH_SALT',        '7j;?l-cf_CCE8-k#/Qz~a7vHX1E%,SC+3ml3B41jPUA=~v~R$Pf adQ.mOwZ6v*p');
define('SECURE_AUTH_SALT', '-i@<|AG5-->Zh$C)Uw?)<TP.KYwYJkvBqojVkGKNsp,fP/Ff!T+Q-tgY|#*M*#74');
define('LOGGED_IN_SALT',   ']+sZn&UV3=oN_J/.D~]Hy&:,!$G!3Ju Q~MJCVVI tE;4$P28;B{{-cJ,lgt&G0x');
define('NONCE_SALT',       '%m-`CM/O-Kc!ID+3h}L]|F/]MD8{9`3QQ-FYbM9x$!p$d >#n3G#j@qWdppx,-Hh');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * O idioma localizado do WordPress é o inglês por padrão.
 *
 * Altere esta definição para localizar o WordPress. Um arquivo MO correspondente ao
 * idioma escolhido deve ser instalado em wp-content/languages. Por exemplo, instale
 * pt_BR.mo em wp-content/languages e altere WPLANG para 'pt_BR' para habilitar o suporte
 * ao português do Brasil.
 */
define('WPLANG', 'pt_BR');

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
