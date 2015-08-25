<?php  
	include_once("lib/mpdf60/mpdf.php");

	$origem = $_REQUEST['origem'];
	$destino = $_REQUEST['destino'];
	$preco = $_REQUEST['preco'];
	$consumo = $_REQUEST['consumo'];
	$totalCombustivel = $_REQUEST['totalCombustivel'];

	$mpdf = new mPDF();
	$mpdf->WriteHTML($origem);
	$mpdf->WriteHTML($destino);
	$mpdf->WriteHTML($preco);
	$mpdf->WriteHTML($consumo);
	$mpdf->WriteHTML($totalCombustivel);
	$mpdf->Output();
	$mpdf->Open();

?>