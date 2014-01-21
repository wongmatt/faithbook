<?php

define('DB_HOST', 'localhost');
define('DB_NAME', 'faithbook');
define('DB_USER', 'wongmatt');
define('DB_PASSWORD', 'harvest');

$con=mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die("Boom");
$db=mysql_select_db(DB_NAME, $con) or die("Boom");

function NewUser(){
	$fullname = $_POST['name'];
	$userName = $_POST['newusername'];
	$email = $_POST['email'];
	$password = $_POST['newpassword'];
	$query = "INSERT INTO login (name, username, email, password) VALUES ('$fullname', '$userName', '$email', '$password')";
	$data = mysql_query ($query) or die(mysql_error());
	if($data){
		echo "YOUR REGISTRATION IS COMPLETED";
	}
}

function SignUp(){
	$userName = $_POST['newusername'];
	$password = $_POST['newpassword'];
	$email = $_POST['email'];
	$fullname = $_POST['name'];
	$confpassword = $_POST['confirmpassword'];
	if(!empty($userName) AND !empty($password) AND !empty($email) AND !empty($fullname) AND !empty($confpassword)){
		$query = mysql_query("SELECT * FROM login WHERE username = '$userName' or email = '$email'");
		if($confpassword == $password){
			 if(!$row = mysql_fetch_array($query)){
			NewUser();
			}
			else{
				echo "ERROR 2";
			}
		}
		else{
			echo "Error 3";
		}
	}
	else{
		echo "ERROR";
	}
}

function SignIn(){
	$userName = $_POST['oldusername'];
	$password = $_POST['oldpassword'];
	if(!empty($userName) AND !empty($password)){
		$query = mysql_query("SELECT * FROM login where username = '$userName' AND password = '$password'");
		$row = mysql_fetch_array($query);
		if($row['password'] == $_POST['oldpassword'] AND $row['username'] == $_POST['oldusername']){
			echo "SUCCESS";
		}
		else{
			echo "SORRY";
		}
	}
	else{
		echo "SORRY";
	}
}

if(isset($_POST['signup'])){
	SignUp();
}

if(isset($_POST['signin'])){
	SignIn();
}

?>