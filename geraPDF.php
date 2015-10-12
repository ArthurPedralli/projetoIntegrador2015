
<?php
	include_once("lib/mpdf60/mpdf.php");

	$html.="	<img src='calculesuarota.com.png' style='margin-left: 250px;'>
				<img src='imagem.jpeg'>
			";

	//echo $html;
	$mpdf = new mPDF();
	$mpdf->AddPage('L');
	$mpdf->WriteHTML($html);
	$mpdf->Output('calculesuarota.com.pdf','I');
	$mpdf->Output();
	$mpdf->Open();

?>