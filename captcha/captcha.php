<?php

session_start();

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header("Content-type: image/png");

$tamanhoTexto = 5;
$texto = substr(md5(microtime()),0,$tamanhoTexto);
$fundoPng = "captcha.png";
$fonte = "anonymous.gdf";

$png = imagecreatefrompng($fundoPng);
$fonte = imageloadfont($fonte);
$cor   = imagecolorallocate($png,0,0,0);

imagestring($png,$fonte,15,5,$texto,$cor);
imagepng($png);
imagedestroy($png);

$_SESSION["sCaptcha"] = $texto;