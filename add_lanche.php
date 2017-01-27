<?php 
session_start();
if ($_SESSION['logged'] == 1) {
?>
	<!doctype html>
	<html lang="en">
	<head>
		<title>Login</title>
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
		<script src="jquery-2.1.0.min.js"></script>
		<script src="app.js"></script>
	</head>
	<body>
				<div id="error" name="error">
					<!-- error will be shown here ! -->
				</div>		
		<h1 class="header-agileits w3layouts w3 w3l w3ls">Bem Nutrido</h1>
		<div class="content-w3ls agileits agileinfo wthree">
			<form action="./" method="post">
				<div class="form-wthree1 agileits agileinfo wthree">

					<div class="form-control"> 
						<label class="header">Login <span>:</span></label>
						<input type="number" id="code" name="code" title="Insira o codigo do aluno" required="">
					</div>

				</div>
				<div class="clear"></div>
				
				<div class="form-control last">
					<input type="submit" name="connect" id="connect" class="register" value="Registrar">

					<div class="clear"></div>
				</div>	
			</form>
		</div>
		<p class="copyright w3layouts w3 w3l w3ls">Design by <a href="https://w3layouts.com/" target="_blank">W3layouts</a></p>
	</body>
	</html>

<?php } ?>