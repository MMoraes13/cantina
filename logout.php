<?php
ini_set('session.save_path', 'tmp');  

session_start();
include_once("config.php");
session_destroy ();
header("Location: index.php");

?>