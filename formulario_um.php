<?php
  session_start(); // deve vim antes de quaquer c�digo que se tenha abaixo, inicia a sess�o php e ecoa alguns tipos de heades
    //sempre no in�cio do script
?>



<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Formul�rio de inscri��o</title>
</head>
<body>
	<p>FORMUL�RIO PARA INSCRI��O DE COMPETIDORES</p>
	<form action="rn_formulario.php" method="post">
        <?php
            $mensagemDeErro = isset($_SESSION['mensagem de erro']) ? $_SESSION['mensagem de erro'];
        ?>
        <p>Your name: <input type="text" name="nome"></p>
		<p>Your  age: <input type="text" name="idade"></p>
		<p><input type="submit"></p>
	</form>
</body>
</html>


