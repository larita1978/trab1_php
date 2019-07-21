<html>
	<head>
		<title>Noticias</title>
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
			</div>
        </div>
		
		<!-- aqui começa os comentários -->
        <h1 id="titulopage">Informações</h3>

        <?php
            include("conexao.php");

            $usuario = $_POST['login'];
            $senha = $_POST['senha'];
            
            $consulta = "select * from usuario where login='". $usuario. "'and senha='".$senha."'";

            $resultado = mysqli_query($conexao, $consulta);
            session_start();
            if(mysqli_num_rows($resultado) > 0){
                while($linha = mysqli_fetch_assoc($resultado)){
                    $usuariologado = $linha['login'];
                }
                $_SESSION['usuario']=$usuariologado;
                
                header('location:noticias.php');
            }else{
                $resposta="Usuário ou senha incorretos!";
                header('location:index.html?resultado='.$resposta);
                header('Refresh:0');
            }
        ?>
		

       
	</body>
</html>