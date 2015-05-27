<?php
include("cabecalho.php");
include("menu.php");  
?>
<link type="text/css" rel="stylesheet" href="./css/duvidasSugestoes.css"/>

<div class="formulario">
  
  <fieldset>
    <div class="row col-md-12 form-group ">
      <label for="nomeUsuario">Nome</label>
        <input type="text" class="form-control" id="nomeUsuario" placeholder="Nome: ">
    </div>
    <div class="row col-md-12 form-group">
      <label for="nomeUsuario">Nome</label> 
        <input type="text" class="form-control" id="nomeUsuario" placeholder="Nome: ">
    </div>
    <div class="row col-md-12 form-group">
      <label for="nomeUsuario">Nome</label>
        <input type="text" class="form-control" id="nomeUsuario" placeholder="Nome: ">
    </div>
    <div class="row col-md-12  form-group">
      <label for="nomeUsuario">Nome</label>
        <input type="text" class="form-control" id="nomeUsuario" placeholder="Nome: ">
    </div>
    <div class="row col-md-12 form-group">
      <label for="nomeUsuario">Nome</label>
        <input type="text" class="form-control" id="nomeUsuario" placeholder="Nome: ">
    </div>

    <div class="form-group">
      <label class="col-sm-3 col-md-2 control-label" for="captcha">
        <span class="text-danger">*</span> Verificação:
      </label>
      <div class="col-sm-9 col-md-10">
        <div class="captcha well well-sm text-center">
          <span class="help-block">Por favor, complete o campo abaixo com os caracteres exibidos na imagem:</span>
          <img src="./captcha/captcha.php" title="Clique para atualizar a imagem" alt="Clique para atualizar a imagem" onclick="this.src=this.src" style="cursor: pointer;"><br>
          <input id="captcha" name="captcha" placeholder="Digite o texto" type="text" maxlength="5" required>
        </div>
      </div>
    </div>

    <div class="row col-md-12 form-group">
      <button type="button" class="btn btn-success">Enviar!</button>
    </div>
  </fieldset>
</div>

<?php
include("rodape.php");
?>