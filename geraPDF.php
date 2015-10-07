
<?php
	include_once("lib/mpdf60/mpdf.php");

	$html.="
				<p style='font-size: 30px;
						  color:red; 
						  font-family: 'Times New Roman';'
					align='center'>
				 	calculesuarota.com
				</p>
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