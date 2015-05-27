<?php exit(); ?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php echo $_SERVER['REMOTE_ADDR'] ?><br>
    <img id="captcha" src="//www.unicesumar.edu.br/inscricao/captcha/captcha.php" title="Clique para atualizar a imagem" alt="Clique para atualizar a imagem" onclick="this.src=this.src" style="cursor: pointer">
    <form action="validar.php" name="form" method="post">
        <input type="text" name="captcha" />
        <input type="submit" value="Validar Captcha" />
    </form>
</body>
</html>