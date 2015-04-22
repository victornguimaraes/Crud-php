<?php

/**
 *  função que executa um comando SQL
 * @param unknown $comando
 */
function executa($comando) {
	$query = mysql_query ( $comando ) or die ( mysql_error () );
	
	return $query;
}

/**
 * Função que inicia uma conexão com o banco
 *
 * @param unknown $conexao        	
 */
function conectarBD() {
	$conexao = mysql_connect ( "localhost", "root", "baleia", "crud_php" ) or die ( "A conexão falhou: <br>" . mysql_error () );
	
	$comando = "use crud_php;";
	executa ( $comando );
	
	echo "<br>Conexão OK<br>";
	return $conexao;
}

/**
 * FUnção que conecta com o banco de dados, usando o Phplot e retorna um campo solicitado
 *
 * @param unknown $comando        	
 * @param unknown $campo        	
 * @return mixed
 */
function consultaBDPhplot($comando, $campo) {
	$pdo = new PDO ( 'mysql:host=localhost;dbname=crud_php;charset=utf8', 'root', 'baleia' );
	
	$res = $pdo->query ( $comando );
	$obj = $res->fetch ();
	
	return $obj [$campo];
}

/**
 * Função que monta o array que contém os dados a serem plotados no gráfico P1
 *
 * @return multitype:multitype:string mixed
 */
function geraArrayP1() {
	$data = array (
			array (
					'Analfabeto',
					consultaBDPhplot ( "select count(p1) from Perguntas where p1='Analfabeto';", "count(p1)" ) 
			),
			array (
					'Primeiro Grau incompleto',
					consultaBDPhplot ( "select count(p1) from Perguntas where p1='Primeiro grau incompleto';", "count(p1)" ) 
			),
			array (
					'Primeiro Grau completo',
					consultaBDPhplot ( "select count(p1) from Perguntas where p1='Primeiro grau completo';", "count(p1)" ) 
			),
			array (
					'Segundo Grau incompleto',
					consultaBDPhplot ( "select count(p1) from Perguntas where p1='Segundo grau incompleto';", "count(p1)" ) 
			),
			array (
					'Segundo Grau completo',
					consultaBDPhplot ( "select count(p1) from Perguntas where p1='Segundo grau completo';", "count(p1)" ) 
			),
			array (
					'Terceiro Grau incompleto',
					consultaBDPhplot ( "select count(p1) from Perguntas where p1='Terceiro grau incompleto';", "count(p1)" ) 
			),
			array (
					'Terceiro Grau completo',
					consultaBDPhplot ( "select count(p1) from Perguntas where p1='Terceiro grau completo';", "count(p1)" ) 
			),
			array (
					'Nao informado',
					consultaBDPhplot ( "select count(p1) from Perguntas where p1='';", "count(p1)" ) 
			) 
	);
	return $data;
}
function geraArrayP2() {
	$data = array (
			array (
					"Sim",
					consultaBDPhplot ( "select count(p2) from Perguntas where p2='Sim';", "count(p2)" ) 
			),
			array (
					"Nao",
					consultaBDPhplot ( "select count(p2) from Perguntas where p2='Não';", "count(p2)" ) 
			),
			array (
					"Não responderam",
					consultaBDPhplot ( "select count(p2) from Perguntas where p2='';", "count(p2)" ) 
			) 
	);
	return $data;
}
?>