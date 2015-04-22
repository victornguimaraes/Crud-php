<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8" />
<link rel="stylesheet" href="_css/estilo.css">
<title>Enquete</title>
<style type="text/css">
h2 {
	color: #80a2ff;
	text-shadow: 1px 1px 1px navy;
	float: inherit;
	width: 100px;
}
</style>
</head>
<body>


<?php
$texto = "Caramba";
$strCript = base64_encode ( $texto );

?>
	<div>
		<h2>Enquete:</h2>


		<form method="POST" action="dadosEducacao.php">
			Dados pessoais <br> Qual o seu nome?<input type="text" name="nome"><br>
			<br> <br> Qual o seu CPF?<input type="number" name="cpf"
				required="required"><br> <br> <br> Qual a sua data de nascimento?<input
				type="date" name="data"><br> <br>Qual a sua cidade natal?<input
				type="text" name="cidade"><br> <br> Qual o seu Estado de origem? <select
				name="estado">
				<option value="estado">Selecione o Estado</option>
				<option value="ac">Acre</option>
				<option value="al">Alagoas</option>
				<option value="am">Amazonas</option>
				<option value="ap">Amapá</option>
				<option value="ba">Bahia</option>
				<option value="ce">Ceará</option>
				<option value="df">Distrito Federal</option>
				<option value="es">Espírito Santo</option>
				<option value="go">Goiás</option>
				<option value="ma">Maranhão</option>
				<option value="mt">Mato Grosso</option>
				<option value="ms">Mato Grosso do Sul</option>
				<option value="mg">Minas Gerais</option>
				<option value="pa">Pará</option>
				<option value="pb">Paraíba</option>
				<option value="pr">Paraná</option>
				<option value="pe">Pernambuco</option>
				<option value="pi">Piauí</option>
				<option value="rj">Rio de Janeiro</option>
				<option value="rn">Rio Grande do Norte</option>
				<option value="ro">Rondônia</option>
				<option value="rs">Rio Grande do Sul</option>
				<option value="rr">Roraima</option>
				<option value="sc">Santa Catarina</option>
				<option value="se">Sergipe</option>
				<option value="sp">São Paulo</option>
				<option value="to">Tocantins</option>
			</select>
			<fieldset>
				<legend>Sexo</legend>
				<input type="radio" name="sexo" id="masculino"> <label
					for="masculino">Masculino</label> <br> <input type="radio"
					name="sexo" id="feminino"> <label for="masculino">Feminino</label>

			</fieldset>
		
		
		<?php
		?>
		<input type="submit" class="botao" value="Avançar"> <br> <br> <br> <br>
			<br> <a href="main.php" class="botao">Voltar</a>
			<!--  <br> <a href="01exercicio.html" class="botao">Voltar</a> -->
			<br>
		</form>
		<!-- <a href="javascript:history.go(-1)" class="botao">Voltar</a> -->
	</div>
</body>
</html>


