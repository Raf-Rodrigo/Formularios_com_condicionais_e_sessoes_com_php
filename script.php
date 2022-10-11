<?php
	
	session_start(); // inica uma sessуo no arquivo
	/*Forma de persistir o estado de navegaчуo enquanto o navegador estiver aberto, para persistir estado, podemos
	trabalhar com sessѕes, precisamos informar que terс uma sesуo, tambщm vamos conhecer a funчуo headers, que realiza
	redicionamento*/

	include "servicos/servicoMensagemSessao.php";
	include "servicos/servicovalidacao.php";
	include "servicos/servicoCategoriaCompetidor.php";
	
	$nome = $_POST["nome"];
	$idade = $_POST["idade"];
	
	//chamamos a funчуo

	defineCategoriaCompetidor($nome, $idade);
	
	header('location: index.php');
	
