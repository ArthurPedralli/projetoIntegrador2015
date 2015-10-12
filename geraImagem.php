<?php
	$im = imagegrabscreen();
	imagejpeg($im, "imagem.jpeg");
	$to_crop_array = array('x' =>70 , 'y' => 111, 'width' => 1000, 'height'=> 560);
	$thumb_im = imagecrop($im, $to_crop_array);
	imagejpeg($thumb_im, 'imagem.jpeg');
	header('Location: http://localhost/projetoIntegrador2015/geraPDF.php');
?>