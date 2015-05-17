<?php
include("cabecalho.php");
include("menu.php");  
?>
	<!DOCTYPE html>
	<html>
		<head> 
			<title></title>
			<link type="text/css" rel="stylesheet" href="./css/index.css"/>
		</head>
		<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
        <script type="text/javascript">
            function CalculaDistancia() {
                $('#litResultado').html('Aguarde...');
                //Instanciar o DistanceMatrixService
                var service = new google.maps.DistanceMatrixService();
                //executar o DistanceMatrixService
                service.getDistanceMatrix(
                  {
                      //Origem
                      origins: [$("#txtOrigem").val()],
                      //Destino
                      destinations: [$("#txtDestino").val()],
                      //Modo (DRIVING | WALKING | BICYCLING)
                      travelMode: google.maps.TravelMode.DRIVING,
                      //Sistema de medida (METRIC | IMPERIAL)
                      unitSystem: google.maps.UnitSystem.METRIC
                      //Vai chamar o callback
                  }, callback);
            }
            //Tratar o retorno do DistanceMatrixService
            function callback(response, status) {
                //Verificar o Status
                if (status != google.maps.DistanceMatrixStatus.OK)
                    //Se o status não for "OK"
                    $('#litResultado').html(status);
                else {
                    //Se o status for OK
                    //Endereço de origem = response.originAddresses
                    //Endereço de destino = response.destinationAddresses
                    //Distância = response.rows[0].elements[0].distance.text
                    //Duração = response.rows[0].elements[0].duration.text
                    $('#litResultado').html("<strong>Origem</strong>: " + response.originAddresses +
                        "<br /><strong>Destino:</strong> " + response.destinationAddresses +
                        "<br /><strong>Distância</strong>: " + response.rows[0].elements[0].distance.text +
                        " <br /><strong>Duração</strong>: " + response.rows[0].elements[0].duration.text
                        );
                    //Atualizar o mapa
                    $("#map").attr("src", "https://maps.google.com/maps?saddr=" + response.originAddresses + "&daddr=" + response.destinationAddresses + "&output=embed");
                }
            }
        </script>
		<body>
			<div class="row">
				<div class="container-fluid">
					<table width="100%" border="0">
						<div class="origem">
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
						<div class="destino">
							<tr>
						        <div class="form-group">
							        <td>
							        	<input type="text" id="txtOrigem" class="form-control" style="width: 500px" />
							        </td>
							        <td>
							        	<input type="text" style="width: 500px"  class="form-control" id="txtDestino" />
							        </td>
						        </div>        
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
				<div class="mapa">
	            	<iframe width="100%" scrolling="no" height="350" frameborder="0" id="map" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?output=embed"></iframe>
	        	</div>
			</div>
		</body>
	</html>
<?php
include("rodape.php");
?>
