<?php
ini_set('session.save_path', 'tmp');  

   session_start();
   include_once("config.php");

      $_SESSION['logged'] = 0;
      $_SESSION['id'] = '';
      $_SESSION['nome'] = '';
      $_SESSION['sobrenome'] = '';
      
    header("Location: index.php");

?>