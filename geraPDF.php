<?php
	include_once("lib/mpdf60/mpdf.php");
/*
	if (true) {
		$nome_arq="Calculo_Distancia";
		header("Content-type: application/force-download");
		header("Content-Disposition: attachment; filename=$nome_arq.pdf");
		header("Pragma: no-cache");
	}
*/


	$origem 			= $_REQUEST['origem'];
	$destino 			= $_REQUEST['destino'];
	$preco 				= $_REQUEST['preco'];
	$consumo 			= $_REQUEST['consumo'];
	$totalCombustivel 	= $_REQUEST['totalCombustivel'];

	echo "<p style='margin-left: 25%;'><b>Origem:</b> ".utf8_decode($origem)." </p>";
	echo "<p style='margin-left: 25%;'><b>Destino:</b> ".utf8_decode($destino)." </p>";
	echo "<p style='margin-left: 25%;'><b>Preço Combustível:</b> ".utf8_decode($preco)." </p>";
	echo "<p style='margin-left: 25%;'><b>Consumo:</b> ".utf8_decode($consumo)." </p>";
	echo "<p style='margin-left: 25%;'> ".utf8_decode($totalCombustivel)." </p>";

	echo "<iframe  width='50%' height='60%' scrolling='no' style='margin-left: 25%;' frameborder='0' id='map' marginheight='0' marginwidth='0'
	src='https://maps.google.com/maps?saddr=".$_REQUEST['origem']."&daddr=".$_REQUEST['destino']."&output=embed'></iframe>";


	/*$mpdf = new mPDF();
	$mpdf->WriteHTML($origem);
	$mpdf->WriteHTML($destino);
	$mpdf->WriteHTML($preco);
	$mpdf->WriteHTML($consumo);
	$mpdf->WriteHTML($totalCombustivel);
	$mpdf->Output();
	$mpdf->Open();
*/
?>