<?php
function dbConnect (){
 	  $conn =	null;
 	  $host = 'localhost';
      $db   = 'cristoes_bbsangre';
      $user = 'cristoes';
      $pwd  = '5k7YLp3q9i';
	try {
	   	$conn = new PDO('mysql:host='.$host.';dbname='.$db, $user, $pwd);
		}
	catch (PDOException $e) {
		echo '<p>NO SE HA PODIDO CONECTAR A LA BASE DE DATOS!!</p>';
       
	    exit;
	}
	return $conn;
 }
 function desconectar() {
      $conn = null;
   }
 ?>
