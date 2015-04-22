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

	<div>

		<h2>Consulta:</h2>
<?php
include 'funcoes.php';
include 'phplot-6.1.0/phplot.php';
// include 'phplot-6.1.0/rgb.inc.php';

$conexao = conectarBD ();

$cpf = isset ( $_POST ["cpf"] ) ? $_POST ["cpf"] : NULL;

if ($cpf != NULL) {
	$comando = "SELECT * 
FROM Pessoa
JOIN Dados_Pessoais
JOIN Perguntas
WHERE Pessoa.cpf =$cpf
AND Dados_Pessoais.cpf =$cpf
AND Perguntas.cpf =$cpf;";
	
	$query = executa ( $comando );
	$answer = mysql_fetch_array ( $query );
	echo "<br> O usuário " . $answer ["Nome"] . " efetuou as seguintes respostas:";
	echo "<br>Escolaridade: " . $answer ["p1"];
	echo "<br>Acredita que com mais estudo poderia ter um
			salário melhor : " . $answer ["p2"];
} else { // gerar os gráficos
	echo "Gráfico da Pergunta 1:<br> <img src=\"graficoP1.php\" id=graficoP1\">";
	echo "Gráfico da Pergunta 2:<img
			src=\"graficoP2.php\" id=graficoP2\">";
}

?>


<?php

?>
		

		<form method="POST" action="consulta.php">
			<br> <a href="main.php" class="botao">Início</a> <br>
		</form>

	</div>
</body>
</html>


