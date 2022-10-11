<?php

function validaNome(String $nome):bool{
	if(empty($nome)){
		setarMensagemErro("O nome n�o pode ser vazio"); //uma array associativo, associar o valor a uma chave
		return false;
	}
	
	if(strlen($nome) < 3){
		setarMensagemErro("O nome de conter mais de tr�s caracteres");
		return false;
	}
	
	if (strlen($nome) > 40){
		setarMensagemErro("O nome � muito extenso");
		return false;
	}
	return true;
}

function validaIdade(string $idade) : bool
{
	//is_integer - verifica se � do tipo inteiro, no casa est� verificando se � num�rico
	if (!is_numeric($idade)) { //verifica se o tipo de dados for um n�mero
		setarMensagemErro("� necess�rio digitar um n�mero");
		return false;
	}
	
	return true;
}

