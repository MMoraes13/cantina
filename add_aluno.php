<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!doctype html>
<?php 
ini_set('session.save_path', 'tmp');  
session_start(); 
if ($_SESSION['logged'] == 1) {
	?>
	<html lang="en">
	<head>
		<title>Adicionar aluno</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!-- fonts  -->
		<link href="//fonts.googleapis.com/css?family=Metrophobic" rel="stylesheet">
		<link href="//fonts.googleapis.com/css?family=Nova+Flat" rel="stylesheet">
		<!-- /fonts -->
		<!-- css -->
		<link href="css/style.css" rel='stylesheet' type='text/css' media="all" /> 
		<!-- /css -->
	</head>
	<body>
		<h1 class="header-agileits w3layouts w3 w3l w3ls">Bem Nutrido</h1>
		<div class="content-w3ls agileits agileinfo wthree">
			<form action="add_aluno_back.php" method="post">
				<div class="form-wthree1 agileits agileinfo wthree">

					<div class="form-control"> 
						<label class="header">Nome <span>:</span></label>
						<input type="text" id="firstname" name="firstname" placeholder="Nome do aluno" title="Insira o Nome do aluno" required="">
					</div>
					<div class="form-control"> 
						<label class="header">Matricula <span>:</span></label>
						<input type="number" id="lastname" name="lastname" placeholder="Matricula do aluno" title="Matricula do aluno" required="">
					</div>
				</div>

				<div class="form-wthree2 w3-agileits agileits-w3layouts agile">

					<div class="form-control"> 
						<label class="header">Turma <span>:</span></label>
						<input type="text" id="address" name="address" placeholder="Turma do aluno" title="Turma do aluno" required="">
					</div>

				</div>
				<div class="clear"></div>

				<div class="form-control last">
					<input type="submit" class="register" value="Registrar">
					<input type="reset" class="reset" value="Cancelar"  onclick="window.location='index.php';">
					<div class="clear"></div>
				</div>	
			</form>
		</div>
		<h6><p class="copyright w3layouts w3 w3l"> Olá, <?php echo $_SESSION['nome'];?>. <a href="add_lanche.php"> Adicionar lanche </a><span>.<a href="add_administrador.php"> Adicionar administrador </a><span>.</span><a href="add_aluno.php"> Adicionar aluno </a><span>.</span><a href="logout.php"> Sair </a>.</p> </h6>
		<p class="copyright w3layouts w3 w3l w3ls">Design by <a href="https://w3layouts.com/" target="_blank">W3layouts</a></p>
	</body>
	</html>

	<?php
} else{  header("Location: acessonegado.php"); }
?>