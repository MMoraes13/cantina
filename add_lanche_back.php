
<?php
session_start();
//including the database connection file
include_once("config.php");
if ($_SESSION['logged'] == 1) {
	$idAdministrador = mysqli_real_escape_string($mysqli, $_SESSION['id']);
	$idAluno = mysqli_real_escape_string($mysqli, $_POST['code']);

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
			$_SESSION['serviu'] = 1;

		} 
		else {
			$_SESSION['serviu'] = 0;
		}
		header("location:index.php");
	}
}		
?>