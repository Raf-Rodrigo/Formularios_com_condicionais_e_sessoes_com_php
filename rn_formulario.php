<?php
	
	session_start(); // inica uma sessão no arquivo
	/*Forma de persistir o estado de navegação enquanto o navegador estiver aberto, para persistir estado, podemos
	trabalhar com sessões, precisamos informar que terá uma sesão, também vamos conhecer a função headers, que realiza
	redicionamento*/
	
	$categorias = [];
	$categorias[] = "infantil";
	$categorias[] = "adolescente";
	$categorias[] = "adulto";
	$categorias[] = "idoso";
	
	$nome = $_POST["nome"];
	$idade = $_POST["idade"];
	
	if(empty($nome)){
		$_SESSION['mensagem de erro'] = "O nome não pode ser vazio"; //uma array associativo, associar o valor a uma chave
		return;
	}
	
	if(strlen($nome) < 3){
		echo "O nome de conter mais de três caracteres";
		return;
	}
	
	if (strlen($nome) > 40){
		echo "O nome é muito extenso";
		return;
	}
	
	if (!is_numeric($idade)){
		echo "É necessário digitar um número";
		return;
	}
	
	if ($idade >= 6 && $idade <= 12) {
		for ($i = 0; $i <= count($categorias); $i++) {
			if ($categorias[$i] == "infantil") {
				echo "O nadador {$nome} compete na categoria {$categorias[$i]}";
			}
		}
	}else if($idade >= 13 && $idade <= 18){
		for ($i = 0; $i <= count($categorias); $i++){
			if ($categorias[$i] == "adolescente"){
				echo "O nadador {$nome} compete na categoria {$categorias[$i]}";
			}
		}
	}else if ($idade <= 19 && $idade <= 40){
		for ($i = 0; $i <= count($categorias); $i++){
			if ($categorias[$i] == "adulto"){
				echo "O nadador {$nome} compete na categoria {$categorias[$i]}";
			}
		}
	}else{
		for ($i = 0; $i <= count($categorias); $i++){
			if ($categorias[$i] == "idoso"){
				echo "O nadador {$nome} compete na categoria {$categorias[$i]}";
			}
		}
	}

