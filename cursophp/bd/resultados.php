<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8" />
<link rel="stylesheet" href="_css/estilo.css">
<title>Resultados</title>
<style type="text/css">
</style>
</head>
<body>


<?php
include 'funcoes.php';

$conxao = conectarBD ();
?>
	<div>
		<h2>Resultados:</h2>


		<form method="POST" action="consulta.php">
			<a>Respostas de um usuário específico</a><input type="text"
				name="cpf" id="cpf"> <input type="submit" class="botao"
				value="Consultar"> <br> <a>Gerar gráficos</a><input type="submit"
				class="botao" value="Gerar"> <br> <br> <a href="main.php"
				class="botao">Início</a> <br>
		</form>

	</div>
</body>
</html>


