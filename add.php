<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {	
	$aluno = mysqli_real_escape_string($mysqli, $_POST['idAluno']);
	$administrador = mysqli_real_escape_string($mysqli, $_POST['idAdministrador']);

	// checking empty fields
	if(empty($aluno) || empty($administrador)) {
				
		if(empty($aluno)) {
			echo "<font color='red'>aluno field is empty.</font><br/>";
		}
		
		if(empty($administrador)) {
			echo "<font color='red'>administrador field is empty.</font><br/>";
		}

		//link to the previous padministrador
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO lanche_dia(idAluno,idAdministrador,data) VALUES('$aluno','$administrador',NOW())");
		
		//display success messadministrador
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='index.php'>View Result</a>";
	}
}
?>
</body>
</html>
