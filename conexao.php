<?php
	$endereco = "localhost:3306";
	$usuario = "root";
	$senha = "toor";
	$nome_banco = "noticia";
	
	//cria a conexao
	$conexao = mysqli_connect($endereco, $usuario, $senha, $nome_banco);
	
	//if(!$conexao){
	//	die("Falha na conexão: " . mysqli_connect_error());
	//}else{
	//	echo "Parabéns, deu certo!";
	//}
?>