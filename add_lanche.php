<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {	
	$idAluno = mysqli_real_escape_string($mysqli, $_POST['idAluno']);
	$idAdministrador = mysqli_real_escape_string($mysqli, $_POST['idAdministrador']);

	// checking empty fields
	if(empty($idAluno) || empty($idAdministrador)) {
				
		if(empty($idAluno)) {
			echo "<font color='red'>aluno field is empty.</font><br/>";
		}		
		if(empty($idAdministrador)) {
			echo "<font color='red'>administrador field is empty.</font><br/>";
		}
		//link to the previous padministrador
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
		// if student didnt eat today
		//$data = date("Y-m-d H:i:s");
		$resquery = mysqli_query($mysqli, "SELECT * FROM lanche_dia WHERE  DATE(NOW()) = DATE(data)  AND idAluno = '$idAluno';");
		//echo "SELECT * FROM lanche_dia WHERE  DATE(NOW()) = DATE(data)  AND idAluno = '$idAluno';";
		if (empty (mysqli_fetch_array($resquery))) {
			//echo "array vazio";
			$result = mysqli_query($mysqli, "INSERT INTO lanche_dia(idAluno,idAdministrador,data) VALUES('$idAluno','$idAdministrador',NOW())");
			echo "Sirva o lanche!";
		} 
		else {
			echo "Lanche já servido!";
		}
	}
}
?>
</body>
</html>
