<?php
echo "oit";
$conexao = mysql_connect ( "localhost", "root", "baleia", "my_wiki" ) or die ( "A conexão falhou: <br>" . mysql_error () );
// $conexao = pg_connect ( "host localhost port 5432 dbname postgres user postgres password baleiaw" );
// echo "$conexao";

echo "<br>Conexão OK<br>";
$query = mysql_query ( "use my_wiki;" );
$query = mysql_query ( "SELECT user_name FROM user where user_id = 1;" );

$answer = mysql_fetch_array ( $query );
echo "<br>" . $answer ["user_name"];

mysql_close ( $conexao );

?>