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
				<div><a class="menu" href="inserir.php">Nova</a></div>
				<div><a class="menu" href="noticias.php">Notícias</a></div>
			</div>
        </div>
        
        <h1 id="titulopage">Notícias</h3>

        <?php
            include("conexao.php");

            $consulta = "select * from noticia";
            $resultado = mysqli_query($conexao, $consulta);

            if(mysqli_num_rows($resultado)>0){
                for($i=0; $i<mysqli_num_rows($resultado);$i++){
                    $linha = mysqli_fetch_assoc($resultado);
                    echo '<div id="lista_noticias">';
                    echo '<h1 class="titulo_noticia">'. $linha['titulo'].'</h1><br>';
                    echo '<p class="conteudo">'.$linha['noticia'].'</p><br>';
                    echo '<p class="autor">'.$linha['nome'].'</p><br>';
                    echo '</div>';
                }
            }
            
        ?>

       
	</body>
</html>