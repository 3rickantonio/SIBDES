<?php
session_start();
$errmsg_arr = array();
$errflag = false;
require_once 'Connection.php';
$conn = dbConnect();
$username = $_POST['username'];
$password = $_POST['password'];

if($username == '') {
	$errmsg_arr[] = 'No debe dejar vacio el campo Usuario';
	$errflag = true;
}
if($password == '') {
	$errmsg_arr[] = 'No debe dejar vacio el campo Password';
	$errflag = true;
}

// query
$result = $conn->prepare("SELECT * FROM usuarios WHERE username= :username AND password= :password AND valido ='ACTIVO'");
$result->bindParam(':username', $username);
$result->bindParam(':password', $password);
$result->execute();
$rows = $result->fetch(PDO::FETCH_NUM);
if($rows > 0) {
  
    $_SESSION ["username"] = $_POST["username"];
   
header("location: ../panel.php");
}
else{
	$errmsg_arr[] = '';
	$errflag = true;
}
if($errflag) {
	$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
	session_write_close();
	header("location: ../index.php");
	exit();
}
?>
