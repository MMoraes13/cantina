<?php
/*
// mysql_connect("database-host", "username", "password")
$conn = mysql_connect("localhost","root","root") 
			or die("cannot connected");

// mysql_select_db("database-name", "connection-link-identifier")
@mysql_select_db("test",$conn);
*/

/**
 * mysql_connect is deprecated
 * using mysqli_connect instead
 */

$databaseHost = 'cantina.mysql.dbaas.com.br';
$databaseName = 'cantina';
$databaseUsername = 'cantina';
$databasePassword = 'B3mNutr1d0';
   mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
   try { 
      $mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
   } catch (mysqli_sql_exception $e) { 
        throw new MySQLiQueryException($SQL, $e->getMessage(), $e->getCode());
   }
 
?>
