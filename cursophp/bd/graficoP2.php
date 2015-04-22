<?php
include 'phplot-6.1.0/phplot.php';
include 'funcoes.php';
$data = geraArrayP2 ();

// Instancia o objeto e setando o tamanho do grafico na tela
$plot = new PHPlot ( 550, 600 );
// Tipo de borda, consulte a documentacao
$plot->SetImageBorderType ( "plain" );
// Tipo de grafico, nesse caso barras, existem diversos(pizza…)
$plot->SetPlotType ( "bars" );
// Tipo de dados, nesse caso texto que esta no array
$plot->SetDataType ( "text-data" );
$plot->SetTitle ( "Acreditam na interferência da educação nos rendimentos" );
// Setando os valores com os dados do array
$plot->SetDataValues ( $data );
// Legenda, nesse caso serao tres pq o array possui 3 valores que serao apresentados
/*
 * $plot->SetLegend ( array (
 * "Estudantes",
 * "Colunistas",
 * "Desenvolvedores"
 * ) );
 */

// Utilizados p/ marcar labels, necessario mas nao se aplica neste ex. (manual) :
$plot->SetXTickLabelPos ( "none" );
$plot->SetXTickPos ( "none" );
// Gera o grafico na tela
$plot->DrawGraph ();

?>