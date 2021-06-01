<?php
	//Acessar o Banco de Dados bd_games
	//1º) Instanciar o objeto banco
	$banco = new mysqli("127.0.0.1", "root", "", "bd_games");
	if($banco->connect_errno){//Se não conseguir conectar ao banco
		echo "Erro ao tentar acessar o BD: $banco->connect_error";
		die();
	}
	
	//Configurações para caracteres acentuados
	$banco->query("SET NAMES 'utf8'");
	$banco->query("SET character_set_cannection=utf8");
	$banco->query("SET character_set_client=utf8");
	$banco->query("SET character_set_results=utf8");
	
	