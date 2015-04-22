<?php
echo "Inicio<br>";

$db = "dbteste04"; // nome do banco de dados
$host = "localhost"; // host (local onde seu banco de dados está hospedado, caso seja na sua máquina use "localhost") DESTAQUE 6
$user = "postgres"; // nome de usuário registrado no banco de dados
$pass = "baleia"; // senha do usuário
$port = "5432"; // "porta" para conexão ao banco de dados

$main_file = "noticias.php"; // nome deste arquivo
$user_add = "eu"; // usuário que irá adicionar as notícias
$password_add = "senha4321"; // senha para o usuário que irá adicionar as notícias

$string_connect = "host=$host port=$port dbname=$db user=$user password=$pass"; // Variável com as informações para a conexão ser feita
echo "$string_connect";

$connect = pg_pconnect ( $string_connect ); // Comando para conectar-se ao servidor
                                            
// $conexao = pg_connect ( "host=localhost port=5432 dbname=dbteste04 user=postgres password=baleia" ) or die ( "A conexão falhou: <br>" . pg_errormessage () );
                                            // $conexao = pg_connect ( "host localhost port 5432 dbname postgres user postgres password baleiaw" );
                                            // echo "$conexao";

$query = pg_query ( "SELECT * FROM nome;" );
echo "$query";

pg_close ( $connect );
// mysql_close ( $conexao );

?>