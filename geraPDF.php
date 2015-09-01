<?php  
	include_once("lib/mpdf60/mpdf.php");

	/*echo "<iframe width='100%' scrolling='no' height='450' frameborder='0' id='map' marginheight='0' marginwidth='0'  
	src='https://maps.google.com/maps?output=embed'></iframe>";*/

	echo "<iframe width='50%' scrolling='no' height='50%' frameborder='0' id='map' marginheight='0' marginwidth='0'  
	src='https://maps.google.com/maps?saddr=".$_REQUEST['origem']."&daddr=".$_REQUEST['destino']."&output=embed'></iframe>";

	$origem = "Origem: ".$_REQUEST['origem'];
	$destino = "Destino: ".$_REQUEST['destino'];
	$preco = "Preço: ".$_REQUEST['preco'];
	$consumo = "Consumo: ".$_REQUEST['consumo']; 
	$totalCombustivel = $_REQUEST['totalCombustivel'];
		

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