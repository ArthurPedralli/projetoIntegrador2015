<?php
include("cabecalho.php");
include("menu.php");
?>

<link type="text/css" rel="stylesheet" href="./css/index.css"/>

<script src="https://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script>
<script type="text/javascript" language = "javascript" src="./script/index.js"></script>


	<div class="row">
		<div class="container-fluid">
			<div class="tabela">

				<div class="row">
					<div class="col-md-12 form-group">
						<div class="col-md-6">
						    <label for="txtOrigem">Endereço de origem: </label>
				        	<input placeholder = "São Paulo - SP / Rua Oscar Freire, São Paulo - SP" type="text" id="txtOrigem" class="form-control" required/>
						</div>
						<div class="col-md-6">
				        	<label for="txtDestino">Endereço de destino: </label>
		        			<input placeholder = "Rio de Janeiro - RJ / Rua da Conceição, Rio de Janeiro - RJ" type="text"  class="form-control" id="txtDestino" required/>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12 form-group">
						<div class="col-md-6">
							<label for="txtConsumo">Consumo do veículo (KM/L): </label>
							<input placeholder = "12.4" type="text" id="txtConsumo" class="form-control" />
						</div>
						<div class="col-md-6">
							<label for="txtPrecoCombustivel">Preço do combustível (R$): </label>
							<input placeholder= "3.23" type="text" id="txtPrecoCombustivel" class="form-control" />
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12 form-group">
						<div class= "col-md-6">
							<input type="button" value="Calcular distância" onclick="CalculaDistancia()" class="btn btn-success" data-target="#mapa" />
<!-- 						<button type="button" id="myButton" data-loading-text="Loading..." class="btn btn-primary" onclick="CalculaDistancia()" autocomplete="off">Calcular</button>-->
						</div>
						<div class= "col-md-6">
							<input type="button" id="gera_PDF" value="Imprimir" onclick="#" class="btn btn-default pull-right" data-target="#mapa" />
						</div>
					</div>
				</div>


				<div class="row">
					<div class="col-md-12">
						<div class= "col-md-6">
							<div><span id="litResultado">&nbsp;</span></div>
						</div>
					</div>
				</div>

				<div class="row" id="mapa1">
					<div class="col-md-12 form-group">
						<div id="mapa">
					      <!--	<iframe width="100%" scrolling="no" height="450" frameborder="0" id="map" marginheight="0" marginwidth="0"  src="https://maps.google.com/maps?output=embed"></iframe>-->
					       	<!--<div id="map" style="width:100%; height:100%" onload="initialize()"></div> -->
					    </div>

					</div>
				</div>

				<div class="row" id="mapa2" style=" display: none;">
					<div class="col-md-12 form-group">
					      	<iframe width="100%" scrolling="no" height="450" frameborder="0" id="map" marginheight="0" marginwidth="0"  src="https://maps.google.com/maps?output=embed"></iframe>
					</div>
				</div>

			</div>
		</div>
	</div>


<?php
include("rodape.php");
?>
