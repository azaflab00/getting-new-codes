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


    $sql = "select * from cafescad";
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
						<li><a class="catalogo">Catalogo</a></li>
						<li><a class="cadastro">Cadastro</a></li>
						<li><a href="read.php">Consulta</a></li>
						<li><a class="catalogo">Atualizar</a></li>
						<li><a class="catalogo">Deletar</a></li>
						<li><a class="about">Sobre</a></li>
						<li><a class="test">Teste</a></li>
					</ul>
				</nav>
				<section id="catalogo">
					<h1>Catálogo de Cafés</h1>

					  <!-- LOOP Catálogo -->

					<?php
							print "$registros encontrados.";

							print "<br><br>";

							while($exibirRegistros = mysqli_fetch_array($consulta)){

								$id = $exibirRegistros[0];
								$nome = $exibirRegistros[1];
								$desc = $exibirRegistros[2];

								print "<article>";

                                print"$id\n";
                                print"$nome<br>";
                                print"$desc<br>";

								print "</article>";
								print "<br>";
							}
					?>
					  <!-- Fecha LOOP Catálogo -->
					</table>
				</section>

				<section class="d-none" id="cadastro">

					<h1>Cadastro de Cafés</h1>


							<form method="post" action="create.php">
								<fieldset>
									<label for="id">Café ID<br></label>
									<input type="number" name="id" id="id" class="campo" maxlength="3" placeholder="" required>
								</fieldset>

								<fieldset>
									<label for="nome">Nome do Café<br></label>
									<input type="text" name="nome" id="nome" class="campo" maxlength="40" required>
								</fieldset>

								<fieldset>
									<label for="desc">Descrição<br></label>
									<textarea rows="6" id="desc" name="desc" class="campo" maxlength="200" required></textarea>
								</fieldset>

								<input type="submit" value="Salvar" class="btn">
								<input type="reset" value="Limpar" class="btn">
							</form>



				</section>

				<section class="d-none" id="read">
					<h1>Consulta de Cafés</h1>

							<form method="post" action="read.php">
						          <fieldset>
							            <label for="filtro_tabela">Pesquisar por ID<br></label>
							            <input type="text" name="pesquisa" id="filtro_tabela" class="campo" maxlength="40" required>
						         </fieldset>
					       </form>
				</section>

			</div>
		</body>
	</html>

	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
