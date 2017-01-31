<?php
// including the database connection file

ini_set('session.save_path', 'tmp');  

include_once("config.php");
session_start();

/*if(isset($_POST['update']))
{	

	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	
	$nome = mysqli_real_escape_string($mysqli, $_POST['firstname']);
	$sobrenome = mysqli_real_escape_string($mysqli, $_POST['lastname']);
	$turma = mysqli_real_escape_string($mysqli, $_POST['address']);	
	
	$selectAluno = "SELECT * FROM aluno WHERE aluno.id = ".$id;
	echo $selectAluno;
	// checking empty fields
	if(empty($nome) || empty($sobrenome) || empty($turma)) {	
			
		if(empty($nome)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($sobrenome)) {
			echo "<font color='red'>sobrenome field is empty.</font><br/>";
		}
		
		if(empty($turma)) {
			echo "<font color='red'>turma field is empty.</font><br/>";
		}		
	} else {	
		$ativo = isset($_POST['ativo']) ? 1 : 0;
		echo "UPDATE aluno SET nome='$nome',sobrenome=$sobrenome,turma=$turma, ativo=$ativo WHERE id=$id";
		$result = mysqli_query($mysqli, "UPDATE aluno SET nome='$nome',sobrenome='$sobrenome',turma='$turma', ativo='$ativo' WHERE id='$id';");
		
		//redirectig to the display page. In our case, it is index.php
		//header("Location: index.php");
	}
}*/
?>
<?php
if ($_SESSION['logged'] == 1) {
//getting id from url
$id = $_POST['code'];
if (!isset($id)) {
	header("Location: add_aluno.php");
}

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM aluno WHERE id=$id");

if(mysqli_num_rows($result) == 0)
   {
        header ("Location:noaluno.php");
   } else {
		while($res = mysqli_fetch_array($result))
		{
			$nome = $res['nome'];
			$sobrenome = $res['sobrenome'];
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
				<label class="header">Sobrenome <span>:</span></label>
				<input type="text" id="lastname" name="lastname" placeholder="Sobrenome do aluno" title="Sobrenome do aluno" value="<?php echo $sobrenome ?>" required="" readonly>
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
			<input type="hidden" value=<?php echo $id; ?> id="id" name="id"/>
			<input type="hidden" value="update" id="update" name="update"/>
			<input type="submit" class="register" value="Confirmar">
			<input type="reset" class="reset" value="Cancelar" onclick="window.location.href ='index.php'">
			<div class="clear"></div>
		</div>	
	</form>
</div>
<h6><p class="copyright w3layouts w3 w3l"> Olá, <?php echo $_SESSION['nome'];?>. <a href="add_lanche.php"> Adicionar lanche </a><span>.<a href="add_administrador.php"> Adicionar administrador </a><span>.</span><a href="add_aluno.php"> Adicionar aluno </a><span>.</span><a href="logout.php"> Sair </a>.</p> </h6>
<p class="copyright w3layouts w3 w3l w3ls">Design by <a href="https://w3layouts.com/" target="_blank">W3layouts</a></p>

</body>

</html>
