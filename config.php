
<?php
// ini_set('display_errors', 0);
// ini_set('display_startup_errors', 0);
// error_reporting(0);
// ----------------------------- Configurações do Banco de dados
/** O nome do banco de dados*/
define('DB_NAME_LOGIN', 'pdobox');
/** Usuário do banco de dados MySQL */
define('DB_USER_LOGIN', 'root');
/** Senha do banco de dados MySQL */
define('DB_PASSWORD_LOGIN', '');
/** nome do host do MySQL */
define('DB_HOST_LOGIN', 'localhost');

/** O nome do banco de dados*/
define('DB_NAME', 'pdobox');
/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');
/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');
/** nome do host do MySQL */
define('DB_HOST', 'localhost');
/** Caminho para usar o BD */
define('DBAPI','../inc/database.php');


// ----------------------------- Configurações do Domínio
define('BASEURL', '../');
define('BASEURL_CLIENTE', '../Cliente/');
define('BASEURL_COMPLETA', 'http://localhost/');
define('BASEURL_CLIENTE_COMPLETA', 'http://localhost/Cliente/');
define('BASEURL_API', "http://127.0.0.1:1401/");
// define('BASEURLLOGIN','https://sistema.goldinformatica.com.br/FritzBot/index.php');

define('ABSPATH',  '/opt/lampp/htdocs/pobox/');
define("HANNA_LOGO", "../logo-hannah-cabeca.png");
define('HANNAH_LOGO_CLIENTE', "../logo-hannah-cabeca-white.png");
define('HANNA_LOGO_NOME', "../logo-hannah-nome.png");
define('HANNA_LOGO_COMPLETO', "../logo-hannah-completo.png");

// ----------------------------- Configurações Adicionais
define('HEADER_TEMPLATE', '../inc/header.php');
define('FOOTER_TEMPLATE', '../inc/footer.php');

?>
