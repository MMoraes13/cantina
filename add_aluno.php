<html>
<head>
	<title>Add Aluno</title>
</head>

<body>
<?php
//including the database connection file
include_once("config.php");

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
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='index.php'>View Result</a>";
	}

?>
</body>
</html>



