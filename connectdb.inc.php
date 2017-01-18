<?php
/**
 * 
 * Configuração para conexão com
 * o banco de dados.
 * @author Edy Segura, edy@segura.pro.br
 * 
 */

//$pdo = new PDO('pgsql:dbname=conta;user=user;password=senha;host=localhost');
//$pdo = new PDO('firebird:dbname=c:\\base.gdb', 'SYSDBA', 'masterkey');
//$pdo = new PDO('mysql:host=localhost;dbname=conta', 'root', 'root');
$pdo = new PDO('sqlite:usuarios.sqlite');
?>