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
		

		<?php
		include 'funcoes.php';
		
		$nome = $_POST ["nome"];
		
		$cpf = $_POST ["cpf"];
		
		$dataNascimento = $_POST ["data"];
		$cidade = $_POST ["cidade"];
		$estado = $_POST ["estado"];
		$sexo = $_POST ["sexo"]; // Arrumar lance do sexo, tá dando on
		
		$conexao = conectarBD ();
		
		$comando = "INSERT INTO Pessoa(CPF,Nome) VALUES (\"$cpf\",\"$nome\");";
		executa ( $comando );
		
		$comando = "INSERT INTO Dados_Pessoais(cidade,estado,sexo,cpf,nascimento) VALUES (\"$cidade
		\",\"$estado\",\"$sexo\",\"$cpf\",\"$dataNascimento\");";
		executa ( $comando );
		
		mysql_close ( $conexao );
		
		echo "Prezado $nome, sobre a sua educação responda: <br>";
		
		?>
		
		<form method="post" action="agradecimentos.php">
			Qual a sua escolaridade? <select name="p1" id="p1">
				<option value="escolaridade"></option>
				<option value="Analfabeto">Analfabeto</option>
				<option value="Primeiro grau incompleto">1º Grau incompleto</option>
				<option value="Primeiro grau completo">1º Grau completo</option>
				<option value="Segundo grau incompleto">2º Grau incompleto</option>
				<option value="Segundo grau completo">2º Grau completo</option>
				<option value="Terceiro grau incompleto">3º Grau incompleto</option>
				<option value="Terceiro grau completo">3º Grau completo</option>


			</select> <br>Você acredita que com mais estudo poderia ter um
			salário melhor?<input type="radio" name="p2sim" id="p2sim"><label
				for="p2sim">Sim</label> <input type="radio" name="p2nao" id="p2nao"><label
				for="p2nao">Não</label> <br> <br> <input type="submit" class="botao"
				value="Avançar"> <br> <br> <br> <br> <br> <br> <a href="main.php"
				class="botao">Voltar</a>
			<!--  <br> <a href="01exercicio.html" class="botao">Voltar</a> -->
			<br>
			
			<?php
			
			echo "<input type=\"hidden\" name=\"cpf\" value=\"$cpf\">";
			?>
			
		</form>
		<!-- <a href="javascript:history.go(-1)" class="botao">Voltar</a> -->
	</div>
</body>
</html>


