<?php
	$im = imagegrabscreen();
	imagepng($im, "imagem.png");
	//$to_crop_array = array('x' =>85 , 'y' => 120, 'width' => 1190, 'height'=> 680);
	$to_crop_array = array('x' =>70 , 'y' => 111, 'width' => 1000, 'height'=> 560);
	$thumb_im = imagecrop($im, $to_crop_array);
	imagepng($thumb_im, 'imagem.png');
	header('Location: http://localhost/projetoIntegrador2015/geraPDF.php');

?>