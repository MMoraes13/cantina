	<?php
//including the database connection file
	session_start();
	include_once("config.php");
	try {
		if ($_SESSION['logged'] == 1) {	

			$nomeAluno = mysqli_real_escape_string($mysqli, $_POST['firstname']);
			$sobrenome = mysqli_real_escape_string($mysqli, $_POST['lastname']);
			$turma = mysqli_real_escape_string($mysqli, $_POST['address']);

	// checking empty fields
			if(empty($nomeAluno) || empty($sobrenome) || empty($turma) ) {

				if(empty($nomeAluno)) {
					echo "<font color='red'>aluno field is empty.</font><br/>";
				}

				if(empty($sobrenome)) {
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
				echo "INSERT INTO aluno(nome,sobrenome,turma) VALUES('$nomeAluno','$sobrenome', '$turma');";
				$result = mysqli_query($mysqli, "INSERT INTO aluno(nome,sobrenome,turma, ativo) VALUES('$nomeAluno','$sobrenome', '$turma', 1);");

		//display success messadministrador
			echo "<script>
			alert('Aluno ".$nomeAluno." ".$sobrenome." adicionado.');
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


