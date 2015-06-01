<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link type="text/css" rel="stylesheet" href="./css/menu.css"/>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
	    <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>

	          </button>
	          <a class="navbar-brand" href="./index.php">Calcule sua Rota</a>

	        </div>
	        <div id="navbar" class="navbar-collapse collapse">
	          	<ul class="nav navbar-nav">
		            <li class="dropdown">
		              <a href="./dicasSeguranca.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Segurança<span class="caret"></span></a>
		              <ul class="dropdown-menu" role="menu">
		                <li><a href="./dicasSeguranca.php">Dicas</a></li>
		                <li><a href="#">Vídeos</a></li>
		              </ul>
		            </li>
	          	</ul>
	            <ul class="nav navbar-nav navbar-right">
	            	<li><a class="link" data-toggle="modal" data-target="#myModal">Dúvidas e Segustões</a></li>
	            </ul>
	        </div>
	    </div>
	</nav> 
	 
	 <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <form id="myform" >
            <input type="hidden" name="idProfessor" id="idProfessor" value="">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Dúvidas e Sugestões</h4>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label for="nomeUsuario">Nome</label>
                <input type="text" class="form-control" id="nomeUsuario" name="nomeUsuario" placeholder="Nome: ">
              </div>
              <div class="form-group">
                <label for="emailUsuario">Email</label>
                <input type="text" class="form-control" id="emailUsuario" name="emailUsuario" placeholder="Email: ">   
              </div>
              <div class="bs-example" data-example-id="block-checkboxes-radios">
                <label>Escolha: </label>
                <div class="radio">
                  <label>
                    <input type="radio" name="status" id="optionsRadios1" value="duvida" checked> Dúvida
                  </label>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="status" id="optionsRadios2" value="sugestao"> Sugestão
                  </label>
                </div>
              </div>
              <div class="form-group">
                <label for="textoUsuario">Texto</label>
                <textarea class="form-control" rows="3" id="textoUsuario" name="textoUsuario"></textarea> 
              </div>
            </div>
            <!-- <div class="form-group">
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
            </div>-->
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
              <form action="#myModal1">
                <button type="submit" class="btn btn-primary">Salvar</button>
              </form>
            </div>

          </form>
        </div>
      </div>
    </div>


    <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <form id="myform" >

            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
              <button type="submit" id="envia_dica_sugestao" class="btn btn-primary">Salvar</button>
            </div>

          </form>
        </div>
      </div>
    </div>
</body>
</html>
