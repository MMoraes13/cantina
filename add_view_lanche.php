<?php
// including the database connection file

ini_set('session.save_path', 'tmp');  

include_once("config.php");
session_start();
?>
<?php
if ($_SESSION['logged'] == 1) {
//getting id from url
$id = $_POST['code'];
if (!isset($id)) {
	header("Location: add_aluno.php");
}

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM aluno WHERE (matricula-'$id')=0");

if(mysqli_num_rows($result) == 0)
   {
        header ("Location:noaluno.php");
   } else {
		while($res = mysqli_fetch_array($result))
		{
			$idAluno = $res['id'];
			$nome = $res['nome'];
			$matricula = $res['matricula'];
			$turma = $res['turma'];
			$ativo = $res['ativo'];
		}
	}
}	
?>
<html>
<head>
	<title>Confirmar lanche</title>
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
	<form action="add_lanche_back.php" method="post">
		<div class="form-wthree1 agileits agileinfo wthree">
		
			<div class="form-control"> 
				<label class="header">Nome <span>:</span></label>
				<input type="text" id="firstname" name="firstname" placeholder="Nome do aluno" title="Insira o Nome do aluno" value="<?php echo $nome ?>" required="" readonly>
			</div>
	
		</div>
		
		<div class="form-wthree2 w3-agileits agileits-w3layouts agile">
			
			<div class="form-control"> 
				<label class="header">Matricula <span>:</span></label>
				<input type="text" id="lastname" name="lastname" placeholder="Matricula" title="Sobrenome do aluno" value="<?php echo $matricula ?>" required="" readonly>
			</div>
		
		</div>
		<div class="form-wthree2 w3-agileits agileits-w3layouts agile">
			
			<div class="form-control"> 
				<label class="header">Turma <span>:</span></label>
				<input type="text" id="address" name="address" placeholder="Turma do aluno" title="Turma do aluno" value="<?php echo $turma ?>" required="" readonly>
			</div>
		</div>	

		<div class="clear"></div>
		<div class="form-control last">
			<input type="hidden" value=<?php echo $idAluno; ?> id="idAluno" name="idAluno"/>
			<input type="hidden" value="update" id="update" name="update"/>
			<input type="submit" class="register" value="Confirmar">
			<input type="reset" class="reset" value="Cancelar" onclick="window.location.href ='index.php'">
			<div class="clear"></div>
		</div>	
	</form>
</div>
<h6><p class="copyright w3layouts w3 w3l"> Olá, <?php echo $_SESSION['nomeAdmin'];?>. <a href="add_lanche.php"> Adicionar lanche </a><span>.<a href="add_administrador.php"> Adicionar administrador </a><span>.</span><a href="add_aluno.php"> Adicionar aluno </a><span>.</span><a href="logout.php"> Sair </a>.</p> </h6>
<p class="copyright w3layouts w3 w3l w3ls">Design by <a href="https://w3layouts.com/" target="_blank">W3layouts</a></p>

</body>

</html>
