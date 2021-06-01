<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Listagem de Jogos</title>
	<meta charset = "UTF-8" />
	<link rel="stylesheet" href="estilos/estilo.css"/>
</head>
<body>
	<?php
		require_once "includes/banco.php"
	?>
	<div id="corpo">
		<h1>Escolha seu jogo</h1>
		<table class="listagem">
			<?php
				$busca = $banco->query("SELECT * FROM JOGOS ORDER BY NOME");
				if(!$busca){
					echo "<p>Infelizmente a busca deu errado!</p>";
				}else{
					if($busca->num_rows == 0){
						echo "<tr><td>Nenhum registro encontrado";
					}else{
						while($reg=$busca->fetch_object()){
							echo "<tr><td>$reg->capa<td>$reg->nome<td>Adm";
						}
					}
				}
			?>
		</table>
	</div>
	<?php $banco->close(); ?>
</body>
</html>