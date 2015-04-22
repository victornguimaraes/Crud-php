<?php
include 'phplot-6.1.0/phplot.php';
include 'funcoes.php';

$data = geraArrayP1 ();
$settings = array (
		'headers' => array (
				'Resposta',
				'Quantidade' 
		),
		'data' => $data 
);

$plot = new PHPlot ( 550, 600 );
$plot->SetTitle ( 'Escolaridade' );
$plot->SetDataValues ( $data );
$plot->SetDataType ( 'text-data-single' );
$plot->SetPlotType ( 'pie' );
foreach ( $data as $row )
	$plot->SetLegend ( $row [0] );
$plot->SetCallback ( 'draw_graph', 'draw_data_table', $settings );
$plot->DrawGraph ();

?>