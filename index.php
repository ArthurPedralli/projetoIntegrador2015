<?php
include("cabecalho.php");
include("menu.php");  
?>
	<!DOCTYPE html>
	<html>
		<head> 
			<title>Rota Fácil</title>
			<link type="text/css" rel="stylesheet" href="./css/index.css"/>
		</head>
		<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
		<script type="text/javascript" language = "javascript" src="./script/index.js"></script>
        
        </script>


        
		<body>
			<div class="row">
				<div class="container-fluid">
					<table width="100%" border="0">
						<div class="label_formulario">
							<tr>
								<div class="form-group">
									<td>
							        	<label for="txtOrigem">Endereço de origem: </label>
									</td>
									<td>
							        	<label for="txtDestino">Endereço de destino: </label>
									</td>
								</div>
							</tr>
							
						</div>
						<div class="text_formulario">
							<tr>
						        <div class="form-group">
							        <td>
							        	<input placeholder = "São Paulo - SP" type="text" id="txtOrigem" class="form-control" style="width: 500px" />
							        </td>
							        <td>
							        	<input placeholder = "Rio de Janeiro - RJ" type="text" style="width: 500px"  class="form-control" id="txtDestino" />
							        </td>
						        </div>        
							</tr>
							<tr>

								<td>
									
									<label for="txtConsumo">Consumo do veículo (KM/L): </label>
								</td>

								<td>
									
									<label for="txtPrecoCombustivel">Preço do combustível (R$): </label>
								</td>
								


							</tr>
							<tr>
								
								<td>
									<input type="text" id="txtConsumo" class="form-control" style="width: 100px" />
								</td>

								<td>
									<input  type="text" id="txtPrecoCombustivel" class="form-control" style="width: 100px" />
								</td>							

							</tr>
						</div>
						<div class="botaoConfirmacao">
							<tr>
						    	<div>
							    	<td height="60">
							        	<input type="button" value="Calcular distância" onclick="CalculaDistancia()" class="btn btn-success" />
							    	</td>
						    	</div>         
							</tr>
						</div>
					</table>
				</div>
			</div>
			<div class="row">
				<div><span id="litResultado">&nbsp;</span></div>
			</div>
			<div class="row">
				<div class="mapa" >
	            	<iframe width="100%" scrolling="no" height="500" frameborder="0" id="map" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?output=embed"></iframe>
	            	<!----<div id="map" style="width:100%; height:100%" onload="initialize()"></div> -->
	        	</div>
			</div>
		</body>
	</html>
<?php
include("rodape.php");
?>
