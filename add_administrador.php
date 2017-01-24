<html>
<head>
	<title>Add administrador</title>
</head>

<body>
<?php
//including the database connection file
include_once("config.php");

	$nomeFuncionario = mysqli_real_escape_string($mysqli, $_POST['firstname']);
	$sobrenomeFuncionario = mysqli_real_escape_string($mysqli, $_POST['lastname']);
	$login = mysqli_real_escape_string($mysqli, $_POST['login']);
	$password = mysqli_real_escape_string($mysqli, $_POST['senha']);
	$password = md5($password);

	// checking empty fields
	if(empty($nomeFuncionario) || empty($sobrenomeFuncionario) || empty($login) || empty ($password)) {
				
		if(empty($nomeFuncionario)) {
			echo "<font color='red'>administrador field is empty.</font><br/>";
		}
		
		if(empty($sobrenomeFuncionario)) {
			echo "<font color='red'>administrador field is empty.</font><br/>";
		}

		if(empty($login)) {
			echo "<font color='red'>administrador field is empty.</font><br/>";
		}
		//link to the previous padministrador
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		echo "INSERT INTO administrador(nome,sobrenome,login, pass) VALUES('$nomeFuncionario','$sobrenomeFuncionario', '$login', '$password');";
		$result = mysqli_query($mysqli, "INSERT INTO administrador(nome,sobrenome,login, pass) VALUES('$nomeFuncionario','$sobrenomeFuncionario', '$login', '$password');");
		
		//display success messadministrador
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='index.php'>View Result</a>";
	}

?>
</body>
</html>



