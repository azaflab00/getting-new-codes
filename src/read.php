<?php
	header('Content-Type: json_decode(json)');
	header('Character-Encoding: utf-8');


	    $hostname = "mysql_db";
	    $user = "root";
	    $password = "root";
	    $database = "cafecadastro";
	    // Create connection
	    $conexao = mysqli_connect($hostname, $user, $password, $database);
    		// Check connection
    if (!$conexao) {
        die("Connection failed: " . mysqli_connect_error());
    }
    /* echo "Connected successfully"; */

    $pesquisa = isset($_POST['pesquisa'])?$_POST['pesquisa']:"";

    $sql = "select * from cafescad where idcf='$pesquisa'";
    $consulta = mysqli_query ($conexao,$sql);
    $registros = mysqli_num_rows($consulta);

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
						<li><a onclick="goBack()">Voltar página</a></li>
					</ul>
				</nav>
				<section id="catalogo">
					<h1>Consultas</h1>

					<form method="post" action="read.php">
						<fieldset>
							<label for="filtro_tabela">Pesquisar por <strong>ID</strong><br></label>
							<input type="text" name="pesquisa" id="filtro_tabela" class="campo" maxlength="3" required>
						</fieldset>

					 </form>

					<?php
							print "$registros encontrados.";

							print "<br><br>";

							while($exibirRegistros = mysqli_fetch_array($consulta)){

								$id = $exibirRegistros[0];
								$nome = $exibirRegistros[1];
								$desc = $exibirRegistros[2];

								print "<article>";

                                print"$id<br>";
                                print"$nome<br>";
                                print"$desc";

								print "</article>";
							}

							mysqli_close($conexao);
					?>
				</section>
			</div>>
		</body>
	</html>

	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
