<?php  
require 'database.php';
if(isset($_POST)){
	$nom = verifyInput($_POST['nom']);
	$prenom = verifyInput($_POST['prenom']);
	$contact = verifyInput($_POST['contact']);
	$email = verifyInput($_POST['email']);
	$mdp1 = verifyInput($_POST['password1']);
	$mdp2 = verifyInput($_POST['password2']);
}

$db = Database::connect();
$insert = $db -> prepare("INSERT INTO user (`nom`, `prenom`, `contact`, `email`, `mdp`) VALUES (?,?,?,?,?)");
$insert -> execute(array($nom , $prenom , $contact , $email ,$mdp1)); 

Database::disconnect();
header("location:../index.php");


function verifyInput($data)
{
	$data = trim($data);
	$data = stripcslashes($data); 
	$data = htmlspecialchars($data);
	return $data;
}

 ?>


