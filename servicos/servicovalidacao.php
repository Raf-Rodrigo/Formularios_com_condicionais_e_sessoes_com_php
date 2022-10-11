<?php

function validaNome(String $nome):bool{
	if(empty($nome)){
		setarMensagemErro("O nome não pode ser vazio"); //uma array associativo, associar o valor a uma chave
		return false;
	}
	
	if(strlen($nome) < 3){
		setarMensagemErro("O nome de conter mais de três caracteres");
		return false;
	}
	
	if (strlen($nome) > 40){
		setarMensagemErro("O nome é muito extenso");
		return false;
	}
	return true;
}

function validaIdade(string $idade) : bool
{
	//is_integer - verifica se é do tipo inteiro, no casa está verificando se é numérico
	if (!is_numeric($idade)) { //verifica se o tipo de dados for um número
		setarMensagemErro("É necessário digitar um número");
		return false;
	}
	
	return true;
}

