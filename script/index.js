
  var consumo;
  var destino;
  var preco; 
  var origem;
  var totalCombustivel;

  function initialize() {
     var mapOptions = {
        center: new google.maps.LatLng(-12.456697, -52.082667),
        zoom: 4,
        mapTypeId: google.maps.MapTypeId.ROADMAP
     };
     var map = new google.maps.Map(document.getElementById("mapa"),
   mapOptions); 
  }
  google.maps.event.addDomListener(window, 'load', initialize);

  function geraImagem(){
    window.open("http://localhost/projetoIntegrador2015/geraImagem.php", '_blank');
  }

  function CalculaDistancia() {

    if ($('#txtOrigem').val() == ''){
      $("#txtOrigem").focus();
      return;
    };

    if($('#txtDestino').val() == ''){
      $( "#txtDestino" ).focus();
      return;
    };

    if($('#txtConsumo').val() < 0){
      $( "#txtConsumo" ).focus();
      return;
    };

    if ($('#txtPrecoCombustivel').val() < 0){
      $("#txtPrecoCombustivel").focus();
      return;
    };

   /* $('#litResultado').html('Aguarde...');*/
    $('#botaoCalcular').text('Calculando...').attr('disabled','disabled');

    //Instanciar o DistanceMatrixService
    var service = new google.maps.DistanceMatrixService();
    //executar o DistanceMatrixService
    service.getDistanceMatrix({
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



      //Tratar o retorno do DistanceMatrixService
      function callback(response, status) {
          //Verificar o Status
          if (status != google.maps.DistanceMatrixStatus.OK){
          //Se o status não for "OK"
          $('#litResultado').html(status);
          }else {
              //Consumo
              consumo = $("#txtConsumo").val();
              consumo = consumo.replace(/,/g, ".");
              //console.log(consumo);

              //Preco Combustivel
              preco = $("#txtPrecoCombustivel").val();
              preco = preco.replace(/,/g, ".");
              //console.log(preco);

              var i;
              var numsStr = 0;
              try{

                  for (i=0; i<response.rows[0].elements[0].distance.text.length; i++){
                      var c = response.rows[0].elements[0].distance.text.charAt(i);

                      if (c === ','  || c === ' ') {
                          break;
                      } else if(c ==='.'){
                          // não faz nada mesmo, esta certo!
                      }else{
                          numsStr = numsStr + c;
                      };

                      //console.log("C: ", c);
                      //console.log("N-D: ", numsStr);
                  }
              } catch (error){
                  $('#litResultado').html('Local não encontrado!');
                  $('#botaoCalcular').text('Calcular distância').removeAttr("disabled");
                  return;
              }

              numsStr = numsStr.substr(1);
              //console.log("N-F: ",numsStr);

              var totalParcial = numsStr  / consumo;

              totalCombustivel = totalParcial * preco;

              totalCombustivel = totalCombustivel ? "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='glyphicon glyphicon-usd' style='color:red' aria-hidden='true'></span> R$ "+totalCombustivel.toFixed(2) : "";

              //melhorias a fazer
              //totalCombustivel = totalCombustivel.replace(/./g, ",");

              //Se o status for OK
              //Endereço de origem = response.originAddresses
              //Endereço de destino = response.destinationAddresses
              //Distância = response.rows[0].elements[0].distance.text
              //Duração = response.rows[0].elements[0].duration.text
              origem = response.originAddresses;
              destino = response.destinationAddresses; 

              $('#litResultado').html("</br><h4><span class='glyphicon glyphicon-map-marker' style='color:green' aria-hidden='true'></span> " + response.originAddresses +
                                      "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='glyphicon glyphicon-map-marker' style='color:red' aria-hidden='true'></span> " + response.destinationAddresses +
                                      "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='glyphicon glyphicon-road' style='color:red' aria-hidden='true'></span> " + response.rows[0].elements[0].distance.text +
                                      "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='glyphicon glyphicon-time' style='color:red' aria-hidden='true'></span> " + response.rows[0].elements[0].duration.text + 
                                      totalCombustivel +
                                      "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a id='myLink' href='javascript:geraImagem();'><span class='glyphicon glyphicon-floppy-disk' aria-hidden='true'></span> Salvar</a></h4><br>" 
                                    );

              //Atualizar o mapa
              $( "#mapa1" ).hide();
              $( "#mapa2" ).show();
              $('#botaoCalcular').text('Calcular distância').removeAttr("disabled");
              $("html, body").delay(2000).animate({scrollTop: $('#litResultado').offset().top }, 2000);
              /*$("html, body").animate({
                  scrollTop: $(document).height()
              },1000);*/
              $("#map").attr("src", "https://maps.google.com/maps?saddr=" + response.originAddresses + "&daddr=" + response.destinationAddresses + "&output=embed");
          }
      }
  }

  


