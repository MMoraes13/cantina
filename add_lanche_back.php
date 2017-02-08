
<?php
ini_set('session.save_path', 'tmp');  
session_start();
//including the database connection file
include_once("config.php");
if ($_SESSION['logged'] == 1) { 
  try {
    $idAdministrador = mysqli_real_escape_string($mysqli, $_SESSION['idAdmin']);
    $idAluno = mysqli_real_escape_string($mysqli, $_POST['idAluno']);
    $nomeAluno = mysqli_real_escape_string($mysqli, $_POST['firstname']);
    $dirIdAluno = trim($idAdministrador);
    $dirIdAluno = trim($idAluno);

    // if all the fields are filled (not empty) 
    // if student didnt eat today
   
      $resquery = mysqli_query($mysqli, "SELECT DATE(lanche_dia.data) FROM lanche_dia WHERE DATE(NOW()) = DATE(lanche_dia.data) AND idAluno = '$idAluno';");
      $dirresquery = trim(mysqli_fetch_array($resquery));
      echo "SELECT DATE(lanche_dia.data) FROM lanche_dia WHERE DATE(NOW()) = DATE(lanche_dia.data) AND idAluno = '$idAluno';";
      if (mysqli_num_rows($resquery) == 0) {
      //echo "array vazio";
        echo "INSERT INTO lanche_dia(idAluno,idAdministrador,data) VALUES('$idAluno','$idAdministrador',NOW())";
        $result = mysqli_query($mysqli, "INSERT INTO lanche_dia(idAluno,idAdministrador,data) VALUES('$idAluno','$idAdministrador',NOW())");
        $_SESSION['serviu'] = 1;
        //unset($_POST['code']);
        echo "<script>
        alert('Lanche servido para ".$nomeAluno."');
        window.location.href='index.php';
        </script>";
      } else {
        header("Location: erro_jaComeu.html");
      }
    
    } catch (mysqli_sql_exception $e) { 
      header("Location: erro_banco.html");
    }
  }
  
?>