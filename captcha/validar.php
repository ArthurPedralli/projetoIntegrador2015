<?php
session_start();
if ($_POST["captcha"] !== $_SESSION["sCaptcha"]) {
    echo "<h1>Você não acertou!</h1>";
    echo "<a href='index.php'>Retornar</a>";
    exit;
}

echo "<h1>Você acertou</h1>";
$_SESSION["sCaptcha"] = null;