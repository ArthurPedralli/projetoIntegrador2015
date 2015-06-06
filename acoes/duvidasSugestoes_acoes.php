<?php 
include("../conexao.php"); 


$acao = $_POST['acao'];

switch ($acao) {
	case '1':
		$nomeUsuario 	= $_POST['nomeUsuario'];
        $emailUsuario 	= $_POST['emailUsuario'];
        $status 		= $_POST['status'];
        $textoUsuario 	= $_POST['textoUsuario'];

        $sql = "INSERT INTO usuario 
        			(nomeUsuario, 
        			emailUsuario,
        			tipoResposta,
        			mensagemUsuario)
	         	VALUES 
	         		('{$nomeUsuario}',
	         		'{$emailUsuario}',
	         		'{$status}',
	         		'{$textoUsuario}')
	         	 ";

	    $resultado = mysql_query($sql);
	    
	    if ($resultado) {
	    	echo "Cadastro com Sucesso!";
	    }else{
	    	echo "Falha ao cadastrar";
	    }

	break;
}

?>