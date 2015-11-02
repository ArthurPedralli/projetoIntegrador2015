
$(document).ready(function(){
    $( "#myForm" ).validate({
        rules: {
          txtOrigem:"required",
          txtDestino:"required",
        },
        messages : {
          txtOrigem:"* Campo Obrigatório",
          txtDestino:"* Campo Obrigatório",
        }
    });
});

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
    var map = new google.maps.Map(document.getElementById("mapa"), mapOptions); 
}
google.maps.event.addDomListener(window, 'load', initialize);

function geraImagem(){
    window.open("http://localhost/projetoIntegrador2015/geraImagem.php", '_blank');
}

function CalculaDistancia() {

    if ($('#txtOrigem').val() == ''){
        $("#txtOrigem").focus(); return;
    };

    if($('#txtDestino').val() == ''){
        $( "#txtDestino" ).focus(); return;
    };

    if($('#txtConsumo').val() < 0){
        $( "#txtConsumo" ).focus(); return;
    };

    if ($('#txtPrecoCombustivel').val() < 0){
        $("#txtPrecoCombustivel").focus(); return;
    };

    $('#botaoCalcular').text('Calculando...').attr('disabled','disabled');

    var service = new google.maps.DistanceMatrixService();
        service.getDistanceMatrix({
        origins:      [$("#txtOrigem").val()],
        destinations: [$("#txtDestino").val()],
        travelMode:   google.maps.TravelMode.DRIVING,
        unitSystem:   google.maps.UnitSystem.METRIC
    }, callback);


    function callback(response, status) {
        if (status != google.maps.DistanceMatrixStatus.OK){
            $('#litResultado').html(status);

        }else{
            consumo = $("#txtConsumo").val();
            consumo = consumo.replace(/,/g, ".");

            preco = $("#txtPrecoCombustivel").val();
            preco = preco.replace(/,/g, ".");

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
                }
            } catch (error){
                $('#litResultado').html('Local não encontrado!');
                $('#botaoCalcular').text('Calcular distância').removeAttr("disabled");
                return;
            }

            numsStr = numsStr.substr(1);

            var totalParcial = numsStr  / consumo;
            totalCombustivel = totalParcial * preco;
            totalCombustivel = totalCombustivel ? "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='glyphicon glyphicon-usd' style='color:red' aria-hidden='true'></span> R$ "+totalCombustivel.toFixed(2) : "";

            origem = response.originAddresses;
            destino = response.destinationAddresses; 

            $('#litResultado').html("</br><h4><span class='glyphicon glyphicon-map-marker' style='color:green' aria-hidden='true'></span> " + response.originAddresses +
                                    "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='glyphicon glyphicon-map-marker' style='color:red' aria-hidden='true'></span> " + response.destinationAddresses +
                                    "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='glyphicon glyphicon-road' style='color:red' aria-hidden='true'></span> " + response.rows[0].elements[0].distance.text +
                                    "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='glyphicon glyphicon-time' style='color:red' aria-hidden='true'></span> " + response.rows[0].elements[0].duration.text + 
                                    totalCombustivel +
                                    "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a id='myLink' href='javascript:geraImagem();'><span class='glyphicon glyphicon-floppy-disk' aria-hidden='true'></span> Salvar</a></h4><br>" 
                                  );
            $( "#mapa1" ).hide();
            $( "#mapa2" ).show();
            $('#botaoCalcular').text('Calcular distância').removeAttr("disabled");
            $("html, body").delay(2000).animate({scrollTop: $('#litResultado').offset().top }, 2000);
            $("#map").attr("src", "https://maps.google.com/maps?saddr=" + response.originAddresses + "&daddr=" + response.destinationAddresses + "&output=embed");
        }
    }
}