<?php
// including the database connection file
ini_set('session.save_path', 'tmp');  
include_once("config.php");
session_start();
if ($_SESSION['logged'] != 1) { header("Location: acessonegado.php"); }
?>

<html>
<head>
	<title>Buscar relatório do mês</title>
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
	<form action="geraRelatorio.php" method="POST">
		<div class="form-wthree1 agileits agileinfo wthree">
		
			<div class="form-control"> 		
				<label class="header">Mês<span>:</span></label> 
				<input type="number" name="mes" min="1" max="12">	
				
			</div>
	
		</div>
		
		<div class="form-wthree2 w3-agileits agileits-w3layouts agile">
			
			<div class="form-control"> 
				<label class="header">Ano <span>:</span></label>
				<input type="number" name="ano" min="2017">	
			</div>
		
		</div>

		<div class="clear"></div>
		<div class="form-control last">
			<input type="hidden" value=<?php echo $id; ?> id="id" name="id"/>
			<input type="hidden" value="update" id="update" name="update"/>
			<input type="submit" class="register" value="Confirmar">
			<input type="reset" class="reset" value="Cancelar">
			<div class="clear"></div>
		</div>
		</form>	
</div>
<?php include 'footer.php';?>
</body>
</html>
