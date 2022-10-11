<?php

	session_start();
	
	function setarMensagemErro(string $mensaagem) : void{
		
		$_SESSION['mensagem-de-erro'] = $mensaagem;
	}
	
	function obterMensagemErro() : ?string
	{
		if (isset($_SESSION['mensagem-de-erro'])){
			return $_SESSION['mensagem-de-erro'];
		}
		return null;
	}
	
	function setarMensagemSucesso() : ?string{
		if(isset($_SESSION['mensagem-de-sucesso'])){
			return $_SESSION['mensagem-de-sucesso'];
		}
		return null;
	}
	
	function obterMensagemSucesso() :?string{
		if (isset($_SESSION['mensagem-de-sucesso'])){
			return $_SESSION['mensagem-de-sucesso'];
		}
		return null;
	}
	
	function removerMensagemSucesso() : void {
		if(isset($_SESSION['mensagem-de-sucesso'])){
			unset($_SESSION['mensagem-de-sucesso']);
		}
	}

	function removerMensagemErro() : void {
		if(isset($_SESSION['mensagem-de-erro'])){
			unset($_SESSION['mensagem-de-erro']);
		}
	}
