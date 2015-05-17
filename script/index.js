  function CalculaDistancia() {
    if(document.getElementById("txtOrigem").value == "") {
      alert("O campo 'Origem' deve estar preenchido!");

    }
    else if(document.getElementById("txtDestino").value == "") {
      alert("O campo 'Destino' deve estar preenchido!");
    }
    else {

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


  function initialize() {
        var mapOptions = {
          center: new google.maps.LatLng(-23.403026, -51.917737),
          zoom: 8,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("map"),
            mapOptions);
  }
 
