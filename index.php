<?php
  session_start(); // deve vim antes de quaquer código que se tenha abaixo, inicia a sessão php e ecoa alguns tipos de heades
    //sempre no início do script e ecoa alguns tipos de headers e colocar depois ele pode não ter exito?>
i
?>


<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Formulário de inscrição</title>
</head>
<body>
	<p>FORMULÁRIO PARA INSCRIÇÃO DE COMPETIDORES</p>
	<form action="script.php" method="post">
        <?php
            $mensagemDeSucesso = obterMensagemSucesso(){
                if(!empty($mensagemDeSucesso)){
                echo $mensagemDeSucesso;
                }
            }
            
            $mensagemDeErro = obterMensagemErro(){
            if(!empty($mensagemDeErro)){
                echo $mensagemDeErro;
                }
            }
        ?>
        <p>Your name: <input type="text" name="nome"></p>
		<p>Your  age: <input type="text" name="idade"></p>
		<p><input type="submit"></p>
	</form>
</body>
</html>


