<?php
	
	$categorias = [];
	$categorias[] = "infantil";
	$categorias[] = "adolescente";
	$categorias[] = "adulto";
	$categorias[] = "idoso";
	
	$nome = $_POST["nome"];
	$idade = $_POST["idade"];
	
	if(empty($nome)){
		echo "O nome n�o pode ser vazio";
		return;
	}
	
	if(strlen($nome) < 3){
		echo "O nome de conter mais de tr�s caracteres";
		return;
	}
	
	if (strlen($nome) > 40){
		echo "O nome � muito extenso";
		return;
	}
	
	if (!is_numeric($idade)){
		echo "� necess�rio digitar um n�mero";
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

