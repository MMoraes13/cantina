<?php
//including the database connection file
ini_set('session.save_path', 'tmp');  
session_start();
include_once("config.php");
try {
	if ($_SESSION['logged'] == 1) {	

		$nomeAluno = mysqli_real_escape_string($mysqli, $_POST['firstname']);
		$matricula = mysqli_real_escape_string($mysqli, $_POST['lastname']);
		$turma = mysqli_real_escape_string($mysqli, $_POST['address']);

	// checking empty fields
		if(empty($nomeAluno) || empty($matricula) || empty($turma) ) {

			if(empty($nomeAluno)) {
				echo "<font color='red'>aluno field is empty.</font><br/>";
			}

			if(empty($matricula)) {
				echo "<font color='red'>administrador field is empty.</font><br/>";
			}

			if(empty($turma)) {
				echo "<font color='red'>administrador field is empty.</font><br/>";
			}
		//link to the previous padministrador
			echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
		} else { 
		// if all the fields are filled (not empty) 

		//insert data to database	
			//echo "INSERT INTO aluno(matricula,nome,turma, ativo) VALUES('$matricula','$nomeAluno', '$turma', 1);";
			$result = mysqli_query($mysqli, "INSERT INTO aluno(matricula,nome,turma, ativo) VALUES('$matricula','$nomeAluno', '$turma', 1);");

		//display success messadministrador
			echo "<script>
			alert('Aluno ".$nomeAluno." ".$matricula." adicionado.');
			window.location.href='index.php';
			</script>";
		} 
	} else {
		header("Location: acessonegado.php");
	}
} catch (mysqli_sql_exception $e) { 
	header("Location: erro.php");
}	
?>



