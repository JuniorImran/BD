<?php 
	require 'database.php';
	if(isset($_POST)){
		$email=verifyInput($_POST['email']);
		$mdp=verifyInput($_POST['password1']);

 }
	$db = Database::connect();
	$verifi =$db -> prepare("SELECT * FROM user WHERE email =? AND mdp = ? ");
	$verifi -> execute(array($email, $mdp));
	 if ($exist=$verifi -> fetch()) {
	 	session_start();
	 	$_SESSION['use'] = $exist['id'];
	 	header("location:../Batiment.php");
	 }else{
	 	header("location:../index.php");
	 }

	 function verifyInput($data)
{
	$data = trim($data);
	$data = stripcslashes($data); 
	$data = htmlspecialchars($data);
	return $data;
}

 ?>