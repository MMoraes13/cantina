<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!doctype html>
<html lang="en">
<head>
	<title>Adicionar funcionário</title>
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
<?php 
session_start();
if ($_SESSION['logged'] == 1) {
	
	?>
	<body>
		<h1 class="header-agileits w3layouts w3 w3l w3ls">Bem Nutrido</h1>
		<div class="content-w3ls agileits agileinfo wthree">
			<form action="add_administrador_back.php" method="post">
				<div class="form-wthree1 agileits agileinfo wthree">

					<div class="form-control"> 
						<label class="header">Nome <span>:</span></label>
						<input type="text" id="firstname" name="firstname" placeholder="Nome do funcionário" title="Insira o Nome do funcionário" required="">
					</div>

				</div>

				<div class="form-wthree2 w3-agileits agileits-w3layouts agile">

					<div class="form-control"> 
						<label class="header">Sobrenome <span>:</span></label>
						<input type="text" id="lastname" name="lastname" placeholder="Sobrenome do funcionário" title="Sobrenome do funcionário" required="">
					</div>

				</div>

				<div class="form-wthree2 w3-agileits agileits-w3layouts agile">
					<div class="form-control"> 
						<label class="header">Login <span>:</span></label>
						<input type="text" id="login" name="login" placeholder="Login do funcionário" title="Login" required="">
					</div>
				</div>		
				<div class="form-wthree2 w3-agileits agileits-w3layouts agile">

					<div class="form-control"> 
						<label class="header">Senha<span>:</span></label>
						<input type="password" id="password" name="password" placeholder="Senha" title="Senha" required="">
					</div>

				</div>		
				<div class="clear"></div>

				<div class="form-control last">
					<input type="submit" class="register" value="Registrar">
					<input type="reset" class="reset" value="Cancelar">
					<div class="clear"></div>
				</div>	
			</form>
		</div>
		<?php
	} else {
		?>
		<html lang="en">
		<head>
			<title>Adicionar funcionário</title>
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
				<div> 
					<center><h2> Acesso negado </h2></center>
				</div>
			</div>


			<?php
		}
		?>
		<p class="copyright w3layouts w3 w3l w3ls">Design by <a href="https://w3layouts.com/" target="_blank">W3layouts</a></p>
	</body>
	</html>