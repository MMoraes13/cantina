
<?php
session_start();
//including the database connection file
include_once("config.php");
try{
	if ($_SESSION['logged'] == 1) {
		$nomeFuncionario = mysqli_real_escape_string($mysqli, $_POST['firstname']);
		$sobrenomeFuncionario = mysqli_real_escape_string($mysqli, $_POST['lastname']);
		$login = mysqli_real_escape_string($mysqli, $_POST['login']);
		$password = mysqli_real_escape_string($mysqli, $_POST['password']);
		$pass = md5($password);


	// // checking empty fields
		if(empty($nomeFuncionario) || empty($sobrenomeFuncionario) || empty($login) 
			|| empty ($password)) {

			if(empty($nomeFuncionario)) {
				echo "<font color='red'>administrador field is empty.</font><br/>";
			}

			if(empty($sobrenomeFuncionario)) {
				echo "<font color='red'>administrador field is empty.</font><br/>";
			}

			if(empty($login)) {
				echo "<font color='red'>administrador field is empty.</font><br/>";
			}
	// 	//link to the previous padministrador
			echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
		} else { 
	// 	// if all the fields are filled (not empty) 

	 	//insert data to database	

			$result = mysqli_query($mysqli, "INSERT INTO administrador(nome,sobrenome,login, pass) VALUES('$nomeFuncionario','$sobrenomeFuncionario', '$login', '$pass');");


			echo "<script>
			alert('Funcionário ".$nomeFuncionario." ".$sobrenomeFuncionario." adicionado.');
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



