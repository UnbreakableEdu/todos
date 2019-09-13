<?php
// constantes com as credenciais de acesso ao banco MySQL
define('DB_HOST', 'localhost');
define('DB_USER', 'aluno');
define('DB_PASS', 'aluno');
define('DB_NAME', 'pdo_sessao_2info1');
// habilita todas as exibições de erros
ini_set('display_errors', true);
error_reporting(E_ALL);
// inclui o arquivo de funções
require_once 'functions.php';