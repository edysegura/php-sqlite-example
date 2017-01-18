<?php
/**
 * 
 * Deleta um usuário do banco de dados
 * @author Edy Segura, edy@segura.pro.br
 * 
 */

include "connectdb.inc.php";

$stmt = $pdo->prepare("
	DELETE FROM usuarios
	WHERE id = ?
");

$stmt->execute(array($_GET['id']));
header("Location: index.php");
?>