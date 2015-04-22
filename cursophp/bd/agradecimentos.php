<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8" />
<link rel="stylesheet" href="_css/estilo.css">
<title>Enquete</title>
<style type="text/css">
</style>
</head>
<body>
	<div>

		<h2>Obrigado</h2>

		<?php
		include 'funcoes.php';
		
		$cpf = $_POST ["cpf"];
		
		$p1 = $_POST ["p1"];
		$p2sim = $_POST ["p2sim"];
		$p2nao = $_POST ["p2nao"];
		
		$p3 = $_POST ["p3"];
		$p4 = $_POST ["p4"];
		$p5 = $_POST ["p5"];
		
		$conexao = conectarBD ();
		
		if ($p2sim != NULL) {
			if (strcmp ( $p2sim, "on" ) == 0) {
				$p2 = "Sim";
			} elseif (strcmp ( $p2sim, "off" ) == 0) {
				$p2 = "Nao";
			}
		}
		if ($p2nao != NULL) {
			if (strcmp ( $p2nao, "on" ) == 0) {
				$p2 = "Nao";
			} elseif (strcmp ( $p2nao, "off" ) == 0) {
				$p2 = "Sim";
			}
		}
		
		$comando = "INSERT INTO Perguntas(p1,p2,p3,p4,p5,cpf) VALUES (\"$p1\",\"$p2\",\"$p3\",\"$p4\",\"$p5\",\"$cpf\");";
		executa ( $comando );
		
		mysql_close ( $conexao );
		
		?>
		
		
		
		<br> <br> <a href="main.php" class="botao">Início</a> <br>
		</form>
		<!-- <a href="javascript:history.go(-1)" class="botao">Voltar</a> -->
	</div>
</body>
</html>


