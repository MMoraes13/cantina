<?php 
ini_set('session.save_path', 'tmp');  
session_start();
if ($_SESSION['logged'] == 1) {
	?>
	<!doctype html>
	<html lang="en">
	<head>
		<title>Registrar lanche</title>
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
			<form action="add_view_lanche.php" method="post" id="lanche" name"lanche">
				<div class="form-wthree w3-agileits agileits-w3layouts">
					<div class="form-control"> 
						<label class="header">Aluno <span>:</span></label>
						<input type="number" id="code" name="code" title="Insira o codigo do aluno" required="">
					</div>
				</div>
				<div class="clear"></div>
				
				<div class="form-control last">
					<input type="submit" name="connect" id="connect" class="register" value="Registrar">
					<input type="button" name="sair" id="sair" class="reset" value="Sair"  onclick="window.location='logout.php';">
					<input type="hidden" value="update" id="update" name="update"/>
					<div class="clear"></div>
				</div>	
			</form>
		</div>
		<h6><p class="copyright w3layouts w3 w3l"> Olá,<?php echo $_SESSION['idAdmin']; ?> <?php echo $_SESSION['nomeAdmin'];?>. <a href="add_lanche.php"> Adicionar lanche </a><span>.<a href="add_administrador.php"> Adicionar administrador </a><span>.</span><a href="add_aluno.php"> Adicionar aluno </a><span>.</span><a href="logout.php"> Sair </a>.</p> </h6>
		<p class="copyright w3layouts w3 w3l w3ls">Design by <a href="https://w3layouts.com/" target="_blank">W3layouts</a></p>
	</body>
	</html>

	<?php } 
	 else {
			header("Location: acessonegado.php");
		}?>