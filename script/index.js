function CalculaDistancia() {


  if ($('#txtOrigem').val() == ''){
    $("#txtOrigem").focus();
    return;
  };

  if($('#txtDestino').val() == ''){
    $( "#txtDestino" ).focus(); 
    return;
  };

  $('#litResultado').html('Aguarde...');


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
            var consumo = $("#txtConsumo").val();
                consumo = consumo.replace(/,/g, ".");
                //console.log(consumo);

            //Preco Combustivel
            var preco = $("#txtPrecoCombustivel").val();
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
                return;
            }

            numsStr = numsStr.substr(1);
            //console.log("N-F: ",numsStr);

            var totalParcial = numsStr  / consumo;

            var totalCombustivel = totalParcial * preco;

            totalCombustivel = totalCombustivel ? "<br /><strong>Gasto com Combustível</strong>: R$ "+totalCombustivel.toFixed(2) : "";

            //melhorias a fazer
            //totalCombustivel = totalCombustivel.replace(/./g, ",");

            //Se o status for OK
            //Endereço de origem = response.originAddresses
            //Endereço de destino = response.destinationAddresses
            //Distância = response.rows[0].elements[0].distance.text
            //Duração = response.rows[0].elements[0].duration.text
            $('#litResultado').html("<strong>Origem</strong>: " + response.originAddresses +
                                    "<br /><strong>Destino:</strong> " + response.destinationAddresses +
                                    "<br /><strong>Distância</strong>: " + response.rows[0].elements[0].distance.text +
                                    " <br /><strong>Duração</strong>: " + response.rows[0].elements[0].duration.text + totalCombustivel
                                  );
            //Atualizar o mapa
            $("#map").attr("src", "https://maps.google.com/maps?saddr=" + response.originAddresses + "&daddr=" + response.destinationAddresses + "&output=embed");
        }
    }
}

 
