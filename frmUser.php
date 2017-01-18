<?php include "getUser.inc.php"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Cadastro de Usuário</title>

</head>
<body>

<h1>Cadastro de usuário</h1>
<form action="saveUser.action.php" method="post">
	<fieldset>
		<legend>Dados do Usuário</legend>
		
		<label for="login">
			Login:<br />
			<input type="text" id="login" name="login"
			 value="<?php echo $login; ?>" />
		</label>
		
		<br />
		
		<label for="nome">
			Nome:<br />
			<input type="text" id="nome" name="nome"
			 value="<?php echo $nome; ?>" />
		</label>
		
		<br />
		
		<label for="email">
			Email:<br />
			<input type="text" id="email" name="email"
			 value="<?php echo $email; ?>" />
		</label>
		
		<br />
		
		<label for="telefone">
			Telefone:<br />
			<input type="text" id="telefone" name="telefone"
			 value="<?php echo $telefone; ?>" />
		</label>
		
		<?php if(empty($_GET['edit'])) { ?>
		<br />
		<label for="senha">
			Senha:<br />
			<input type="password" id="senha" name="senha" />
		</label>
		<?php } else { ?>
		<input type="hidden" name="edit" value="true" />
		<input type="hidden" name="id" value="<?php echo $id; ?>" />
		<?php } ?>
		
		<br />
		<br />
		
		<input type="submit" value="Salvar" />
		<input type="reset" value="Cancelar" 
		 onclick="document.location = 'index.php'" />
		
	</fieldset>
</form>

</body>
</html>