
<?php
	include_once("lib/mpdf60/mpdf.php");

	$html.="<div>
				<img src='imagem.jpeg'>
			</div>";

	$mpdf = new mPDF();
	$mpdf->AddPage('L');
	$mpdf->WriteHTML($html);
	$mpdf->Output();
	$mpdf->Open();

?>