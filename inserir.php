<html>
	<head>
		<title>Noticias</title>
		<meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="estilo.css">
        <link href="https://fonts.googleapis.com/css?family=Old+Standard+TT|Permanent+Marker&display=swap" rel="stylesheet">
	</head>
	<body>
		<!-- cabeçalho com menus -->
		<?php
			session_start();
			if((!isset ($_SESSION['usuario']) == true)){
				unset($_SESSION['usuario']);
				header('location:index.html');
			}
		?>
		<div id="cabecalho">
			<div></div>
			<div id="opcoes">
				<div><a class="menu" href="inserir.html">Nova</a></div>
				<div><a class="menu" href="noticias.php">Notícias</a></div>
			</div>
        </div>
		
		<!-- aqui começa os comentários -->
        <h1 id="titulopage">Informações</h3>

        <form id="cadastro_noticia" action="recebedados.php" method="POST">

			Título: <input type="text" name="titulo"><br><br>
			
			Notícia: <textarea type="text" name="noticia"></textarea><br><br>

            Nome: <input type="text" name="nome"><br><br>

            <button type="submit">Enviar</button>
            <button type="reset">Limpar</button>

        </form>
		<div>

       
	</body>
</html>