<?php
/**
 * 
 * Pega o usuário no banco de dados
 * @author Edy Segura, edy@segura.pro.br
 * 
 */

require "connectdb.inc.php";

if(!empty($_GET['id']) && $_GET['edit'] == "true") {
	$stmt = $pdo->prepare("SELECT * FROM usuarios WHERE id = ?");
	
	if($stmt->execute(array($_GET['id']))) {
	  $row      = $stmt->fetch();
	  
	  $id       = $row['id'];
	  $login    = $row['login'];
		$nome     = $row['nome'];
		$email    = $row['email'];
		$telefone = $row['telefone'];
	}

}
?>