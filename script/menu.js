
$(document).ready(function(){
  $( "#myform" ).validate({
    rules: {
      nomeUsuario:"required",
      emailUsuario:"required",
      textoUsuario:"required",
    },
    messages : {
      nomeUsuario:"* Campo Obrigatório",
      emailUsuario:"* Campo Obrigatório",
      textoUsuario:"* Campo Obrigatório",
    },      
    submitHandler: function(form) {
      var nomeUsuario = $('#nomeUsuario').val();
      var emailUsuario = $('#emailUsuario').val();
      var status = $("input[name='status']:checked").val();
      var textoUsuario = $('#textoUsuario').val();  
      $.ajax({
        url: './acoes/duvidasSugestoes_acoes.php',
        type: 'POST',
        data: {nomeUsuario: nomeUsuario, emailUsuario: emailUsuario, status: status, textoUsuario: textoUsuario, acao: 1},
        success: function(retorno) {
          $('#myModal').modal('hide');
        }
      });
    }
  });
});
