<?php
	
	session_start(); // inica uma sess�o no arquivo
	/*Forma de persistir o estado de navega��o enquanto o navegador estiver aberto, para persistir estado, podemos
	trabalhar com sess�es, precisamos informar que ter� uma ses�o, tamb�m vamos conhecer a fun��o headers, que realiza
	redicionamento*/

	include "servicos/servicoMensagemSessao.php";
	include "servicos/servicovalidacao.php";
	include "servicos/servicoCategoriaCompetidor.php";
	
	$nome = $_POST["nome"];
	$idade = $_POST["idade"];
	
	//chamamos a fun��o

	defineCategoriaCompetidor($nome, $idade);
	
	header('location: index.php');
	
