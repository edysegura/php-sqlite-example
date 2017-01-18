<?php
/**
 * 
 * Grava um novo ou atualiza usuário
 * @author Edy Segura, edy@segura.pro.br
 * 
 */

require "connectdb.inc.php";

if(!empty($_POST['login']) &&
   !empty($_POST['nome']) &&
   (!empty($_POST['senha']) || $_POST['edit'] == 'true')) {
	
	if($_POST['edit'] == 'true') {
		$stmt = $pdo->prepare("
			UPDATE usuarios SET 
			login = ?,
			nome = ?,
			email = ?,
			telefone = ? WHERE id = ?
		");
		
		$stmt->execute(array(
			$_POST['login'],
			$_POST['nome'],
			$_POST['email'],
			$_POST['telefone'],
			$_POST['id']
		));
	}
	else {
		$stmt = $pdo->prepare("
			INSERT INTO usuarios 
			(login, nome, email, senha, telefone) VALUES 
			(?, ?, ?, ?, ?)
		");
		
		$stmt->execute(array(
			$_POST['login'],
			$_POST['nome'],
			$_POST['email'],
			md5($_POST['senha']),
			$_POST['telefone']
		));
	}
	
	header("Location: index.php");
}
else {
	header("Location: frmUser.php?error=empty");
}

?>