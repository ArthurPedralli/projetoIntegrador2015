<?php
session_start();
if ($_POST["captcha"] !== $_SESSION["sCaptcha"]) {
    echo "<h1>Voc� n�o acertou!</h1>";
    echo "<a href='index.php'>Retornar</a>";
    exit;
}

echo "<h1>Voc� acertou</h1>";
$_SESSION["sCaptcha"] = null;