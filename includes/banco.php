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
	
	//2º)Agora que conseguimos acessar o BD, podemos fazer requisições. Para isso, usaremos o método query() no objeto $banco
	//No exemplo abaixo, estamos capturando TODOS OS registros da tabela GENEROS
	$busca = $banco->query("SELECT * FROM USUARIOS");
	if(!$busca){//Se houver erro durante a requisição
		echo "Erro durante a requisição: $banco->error";
	}else{
		//3º)Para capturar CADA REGISTRO (linha) individualmente, usamos o método fetch_object()
		//Cada vez que o comando $registro = $busca->fetch_object() é executado, UM registro é armazenado no objeto $registro. Assim, usamos o loop para capturar CADA UM DOS REGISTROS
		while($registro = $busca->fetch_object()){
			print_r($registro);
			echo "<br>";
		}
	}
	
	
	
	