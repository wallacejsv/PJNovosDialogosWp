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
define('DB_NAME', 'novosdialogos');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'KL82#e (ph&;rq.l ,Iy~qJW+T!oy|-O:}dSxLp lzXaghv3|!Fo4OQPF=K2t(2s');
define('SECURE_AUTH_KEY',  '6eG}_M5aqP9 |A2DG}[<u`uf1RVy+(pRvXZDo=Uc_=R,LGxwr/^xs~tcm  >rM,W');
define('LOGGED_IN_KEY',    'Hxpm~nBFZuf}6yI83#/$>G0#!^df:LJT]dwKtl7r%apIppY6]#:+G3oll%*e0]En');
define('NONCE_KEY',        'w@keek^wBcn-uuFFu{|*sORNk%!%<@%*5*o>#>HXVgkd&i%^[$x`f/Ku%.LDpHKt');
define('AUTH_SALT',        '>y>+9g >([]>$W:N!Bv+#9H86g2m3KLPR?$9.CzYM%@(O|-7pSW(Bd}C&jM@EfL4');
define('SECURE_AUTH_SALT', '0gq`+F$)jJ.-mv;/p;!2]5uNnN*{(E;96/d@(XQd>SYS}55JLS9)DR(8TYQ8Ce4O');
define('LOGGED_IN_SALT',   '-MrbS|idDfnV}*dHli{+hb{2Xh7I[`n+q46W+iPg%Yv@i9/H6HVXL-.q#pP+E@1%');
define('NONCE_SALT',       ':EY##;<E7Mu]B44OqiCOW)R5=Nkr4I(UGIbC#zN+y:,ZSuC,7w7-NxZDDML>biY#');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


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
