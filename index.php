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
							<a href="#botaoCalcular"><input id="botaoCalcular" type="button" value="Calcular distância" onclick="CalculaDistancia()" class="btn btn-success" data-target="#mapa"/></a>
<!-- 						<button type="button" id="myButton" data-loading-text="Loading..." class="btn btn-primary" onclick="CalculaDistancia()" autocomplete="off">Calcular</button>-->
						</div>
					</div>
				</div>


				<div class="row">
					<div class="col-md-12">
						<div class= "col-md-6">
							<div><span id="litResultado">&nbsp;</span></div>
						</div>
						<form method="POST">
							<div class= "col-md-6">
								<input type="button" value="Imprimir" id="gera_PDF" class="btn btn-default pull-right" 
								data-target="#mapa" /> 
							</div>
						</form>
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

	<script type="text/javascript">
		$(document).ready(function(){
		      $('#gera_PDF').click(function(){

		          	<?php 
		          		$im = imagegrabscreen();
						imagepng($im, "imagem.png");
						/*imagedestroy($im);*/
						$to_crop_array = array('x' =>100 , 'y' => 123, 'width' => 1000, 'height'=> 560);
						$thumb_im = imagecrop($im, $to_crop_array);
						imagejpeg($thumb_im, 'imagem.png', 100);


						/*include_once("lib/mpdf60/mpdf.php");
						$mpdf = new mPDF();
						$mpdf->WriteHTML('Olá');
						$mpdf->Output();
						$mpdf->Open();
						exit;*/
		            ?>
		      });
		});
	</script>


<?php
include("rodape.php");
?>
