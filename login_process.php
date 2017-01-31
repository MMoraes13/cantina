<?php
ini_set('session.save_path', 'tmp');  
   session_start();
   include_once("config.php");


  $login = mysqli_real_escape_string($mysqli, $_POST['login']);
  $password = mysqli_real_escape_string($mysqli, $_POST['password']);

  $password = md5($password);

  try {
    $_SESSION['logged'] = 0;
    $funcionario = mysqli_query($mysqli, "SELECT * FROM administrador WHERE login='$login'");
    
    while($res = mysqli_fetch_array($funcionario))
    {
      $id = $res['id'];
      $nome = $res['nome'];
      $sobrenome = $res['sobrenome'];
      $login = $res['login'];
      $pass = $res['pass'];
    }
    if ($pass == $password ) {
      $_SESSION['logged'] = 1;
      $_SESSION['id'] = $id;
      $_SESSION['nome'] = $nome;
      $_SESSION['sobrenome'] = $sobrenome;
      header("Location:index.php");
    }
    else { 
      $_SESSION['logged'] = 0;
      $_SESSION['id'] = '';
      $_SESSION['nome'] = '';
      $_SESSION['sobrenome'] = '';
      header("Location: index.php");
    }
    
  } catch (mysqli_sql_exception $e) { 
    throw new MySQLiQueryException($SQL, $e->getMessage(), $e->getCode());
  }  


?>