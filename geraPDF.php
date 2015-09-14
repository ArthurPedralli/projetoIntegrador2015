<?php  
	include_once("lib/mpdf60/mpdf.php");

	/*echo "<iframe width='100%' scrolling='no' height='450' frameborder='0' id='map' marginheight='0' marginwidth='0'  
	src='https://maps.google.com/maps?output=embed'></iframe>";*/
	echo $mapa_teste = "img src='https://maps.google.com/maps?saddr=".$_REQUEST['origem']."&daddr=".$_REQUEST['destino']."&output=embed' 
	alt='Smiley face' height='42' width='42'";
	echo "teste";
	echo $mapa = "<iframe width='50%' scrolling='no' height='50%' frameborder='0' id='map' marginheight='0' marginwidth='0'  
	src='https://maps.google.com/maps?saddr=".$_REQUEST['origem']."&daddr=".$_REQUEST['destino']."&output=embed'>
	</iframe>";

	$origem = "Origem: ".$_REQUEST['origem'];
	$destino = "Destino: ".$_REQUEST['destino'];
	$preco = "Preço: ".$_REQUEST['preco'];
	$consumo = "Consumo: ".$_REQUEST['consumo']; 
	$totalCombustivel = $_REQUEST['totalCombustivel'];

	/*$mpdf->Image('files/images/frontcover.jpg',0,0,210,297,'jpg','',true, false);*/

	/*echo "<pre>".print_r($origem, true)."</pre>";
	echo "<pre>".print_r($destino, true)."</pre>";
	echo "<pre>".print_r($preco, true)."</pre>";
	echo "<pre>".print_r($consumo, true)."</pre>";
	echo "<pre>".print_r($totalCombustivel, true)."</pre>";*/
		
		

	$mpdf = new mPDF();
	$mpdf->WriteHTML($origem);
	$mpdf->WriteHTML($destino);
	$mpdf->WriteHTML($preco);
	$mpdf->WriteHTML($consumo);
	$mpdf->WriteHTML($totalCombustivel);
	$mpdf->WriteHTML($mapa_teste);
	$mpdf->WriteHTML($mapa);
	$mpdf->WriteHTML("<iframe width='50%' scrolling='no' height='50%' frameborder='0' id='map' marginheight='0' marginwidth='0'  
	src='https://maps.google.com/maps?saddr=".$_REQUEST['origem']."&daddr=".$_REQUEST['destino']."&output=embed'>
	</iframe>");
	$mpdf->Output();
	$mpdf->Open();

?>