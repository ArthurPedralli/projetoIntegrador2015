<?php
include("cabecalho.php");
include("menu.php");  
?>
	
<link type="text/css" rel="stylesheet" href="./css/index.css"/>
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" language = "javascript" src="./script/index.js"></script>

	<div class="row">
		<div class="container-fluid">
			<div class="tabela">
				
				<div class="col-md-12">	
					<table width="100%" border="0">
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

							<tr>
						        <td>
						        	<input placeholder = "São Paulo - SP / Rua Oscar Freire, São Paulo - SP" type="text" id="txtOrigem" class="form-control" style="width: 500px" />
						        </td>
						        <td>
						        	<input placeholder = "Rio de Janeiro - RJ / Rua da Conceição, Rio de Janeiro - RJ" type="text" style="width: 500px"  class="form-control" id="txtDestino" />
						        </td>
							</tr>
					</table>
				</div>

				<div class="col-md-12">	
					<table width="100%" border="0">
						<tr height="30">
							<td>
								<label for="txtConsumo">Consumo do veículo (KM/L): </label>
							</td>
							<td>
								<label for="txtPrecoCombustivel">Preço do combustível (R$): </label>
							</td>
						</tr>

						<tr>
							<div class="form-group">
								<td>
									<input type="text" id="txtConsumo" class="form-control" style="width: 500px" />
								</td>
								<td>
									<input  type="text" id="txtPrecoCombustivel" class="form-control" style="width: 500px" />
								</td>	
							</div>						
						</tr>
					</table>
				</div>

				<div class="col-md-12">	
					<div class="botaoConfirmacao">
						<tr>
					    	<div>
						    	<td height="60">
						        	<input type="button" value="Calcular distância" onclick="CalculaDistancia()" class="btn btn-success" />
						    	</td>
					    	</div>         
						</tr>
					</div>
				</div>

			</div>
		</div>
	</div>
	
	<div class="row">
		<div><span id="litResultado">&nbsp;</span></div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<div class="mapa" >
	        	<iframe width="100%" scrolling="no" height="500" frameborder="0" id="map" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?output=embed"></iframe>
	        	<!----<div id="map" style="width:100%; height:100%" onload="initialize()"></div> -->
	    	</div>
		</div>
	</div>

<?php
include("rodape.php");
?>
