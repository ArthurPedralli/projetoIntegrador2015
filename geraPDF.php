
<?php

	
	include_once("lib/mpdf60/mpdf.php");

	$mpdf = new mPDF();
	$html = "<img src='imagem.png'> ";
	
	$mpdf->WriteHTML($html);
	$mpdf->Output();
	$mpdf->Open();

?>