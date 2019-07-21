<html>
	<head>
		<title>Loja</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<link href="https://fonts.googleapis.com/css?family=Old+Standard+TT|Permanent+Marker&display=swap" rel="stylesheet">
	</head>
	<body>
		<!-- cabeçalho com menus -->
		
		<div id="cabecalho">
			<div></div>
			<div id="opcoes">
				<div><a class="menu" href="index.html">Home</a></div>
				<div><a class="menu" href="noticias.php">Notícias</a></div>
			</div>
		</div>
		
		<?php

			$endereco = "localhost:3306";
			$usuario = "root";
			$senha = "toor";
			$nome_banco = "noticia";

			//cria a conexao
			$conexao = mysqli_connect($endereco, $usuario, $senha, $nome_banco);
			
            $title = $_POST['titulo'];
            $info = $_POST['noticia'];
			$name = $_POST['nome'];
			
            $comando = $conexao ->prepare("insert into noticia (titulo, noticia, nome) values(?,?,?)");
            $comando -> bind_param("sss", $title,$info,$name);
			$comando -> execute();
			
			
			if ($name != null){
				echo '<h1 id="titulopage">Notícia enviada com sucesso,<br> Obrigado '. $name.'</h1>';
			}
        ?>
		
	</body>
</html>
