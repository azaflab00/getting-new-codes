<?php
	header('Content-Type: json_decode(json)');
	header('Character-Encoding: utf-8');

	    $hostname = "mysql_db";
	    $user = "root";
	    $password = "pass";
	    $database = "cafecadastro";
	    // Create connection
	    $conexao = mysqli_connect($hostname, $user, $password, $database);
    		// Check connection
    if (!$conexao) {
        die("Connection failed: " . mysqli_connect_error());
    }
    /* echo "Connected successfully"; */


			//$id = $_POST['id'];
			$nome = $_POST['nome'];
			$desc = $_POST['desc'];

			$sql = "insert into cafescad (idcf,nomecf,desccf) values ('$id','$nome','$desc')";
			$salvar = mysqli_query($conexao,$sql);

			$linhas = mysqli_affected_rows($conexao);

	 	mysqli_close($conexao);
?>

<!DOCTYPE html>
	<html lang="pt-br">
		<head>
			<meta charset="utf-8">
			<link href="https://fonts.googleapis.com/css?family=Mali" rel="stylesheet">
			<title>CafeShowCad</title>
			<link rel="stylesheet" href="css/estilo.css">
		</head>
		<body>
			<div class="container">
				<nav>
					<ul class="menu">
						<li><a href="index.php">Catálogos</a></li>
					</ul>
				</nav>
				<section id="catalogo">
					<h1>Confirmação de Cadastro</h1>

					<?php
					    if ($linhas == 1){

							print "Cadastro efetuado com sucesso!";
						}else{

                           print "Cadastro NÃO efetuado. \nJá existe um café com este nome!";

						}
					?>
				</section>
			</div>>
		</body>
	</html>
