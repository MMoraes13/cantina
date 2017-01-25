<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php 
session_start();
if ($_SESSION['logged'] == 1) { ?>
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
	</head>
	<body>
	<h1 class="header-agileits w3layouts w3 w3l w3ls">Bem Nutrido</h1>
	<div class="content-w3ls agileits agileinfo wthree">
		<form action="login_process.php" method="post">,
	        <div id="error">
	        	<!-- error will be shown here ! -->
	        </div>
			<div class="form-control last">
				<input type="button" class="register" value="Add lanche">
				<div class="clear"></div>
			</div>
			<div class="form-control last">
				<input type="button" class="register" value="Add aluno">
			</div>
			<div class="form-control last">
				<input type="button" class="register" value="Add funcionário">
			</div>	
			<div class="clear"></div>
			
			<div class="form-control last">
				<input type="reset" class="reset" value="Cancelar" action="logout.php">
				<div class="clear"></div>
			</div>	
		</form>
	</div>
	<p class="copyright w3layouts w3 w3l w3ls">Design by <a href="https://w3layouts.com/" target="_blank">W3layouts</a></p>
	</body>
	</html>

<?php 
}
else {
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
	</head>
	<body>
	<h1 class="header-agileits w3layouts w3 w3l w3ls">Bem Nutrido</h1>
	<div class="content-w3ls agileits agileinfo wthree">
		<form action="login_process.php" method="post">,
	        <div id="error">
	        	<!-- error will be shown here ! -->
	        </div>
			<div class="form-wthree1 agileits agileinfo wthree">
			
				<div class="form-control"> 
					<label class="header">Login <span>:</span></label>
					<input type="login" id="login" name="login" title="Insira o login do administrador" required="">
				</div>
		
			</div>
			
			<div class="form-wthree2 w3-agileits agileits-w3layouts agile">
				
				<div class="form-control"> 
					<label class="header">Senha <span>:</span></label>
					<input type="password" id="password" name="password"  title="Senha" required="">
				</div>
			
			</div>
			<div class="clear"></div>
			
			<div class="form-control last">
				<input type="submit" class="register" value="Conectar">
				<div class="clear"></div>
			</div>	
		</form>
	</div>
	<p class="copyright w3layouts w3 w3l w3ls">Design by <a href="https://w3layouts.com/" target="_blank">W3layouts</a></p>
	</body>
	</html>
<?php
}
?>