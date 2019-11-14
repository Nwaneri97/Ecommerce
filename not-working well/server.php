<?php 

session_start();

//initialising variables

$username = "";
$email = "";
$telephone = "";
$password = '';
$confirm_password = "";


$errors = array();
//connect to db

$db = mysqli_connect('localhost','root', '','jumpbox') or die("could not connect to database");

//Register Users

$username = mysqli_real_escape_string($db, isset($_POST['username']));
$email = mysqli_real_escape_string($db, isset($_POST['email']));
$telephone = mysqli_real_escape_string($db, isset($_POST['telephone']));
$password = mysqli_real_escape_string($db, isset($_POST['password']));
$confirm_password = mysqli_real_escape_string($db, isset($_POST['confirm_password']));

//form validation

if(empty($username)) {array_push($errors, "Username is required");}
if(empty($email)) {array_push($errors, "Email is required");}
if(empty($telephone)) {array_push($errors, "Telephone is required");}
if(empty($password)) {array_push($errors, "Password is required");}
if($password != $confirm_password){array_push($errors,"Passwords do not match");}

//check username, email, telephone

$user_check_query = "SELECT * FROM user WHERE username = '$username' or email = '$email' or telephone = '$telephone' LIMIT 1";

$results = mysqli_query($db, $user_check_query);
$user = mysqli_fetch_assoc($results);

if($user){
	if($user['username'] === $username){array_push($errors,"Username already exist");}
	if($user['email'] === $email){array_push($errors,"This email is already in use");}
	if($user['telephone'] === $telephone){array_push($errors,"Phone number already exist");}

}

if(count($errors) === 0){
	$password = md5($password);
	$query = "INSERT INTO user (username, email, telephone, password) VALUES ('$username', '$email', '$telephone','$password')";

	mysqli_query($db, $query);
	$_SESSION['username'] = $username;
	$_SESSION['success'] = "You are now logged in";

	header('location:index.php');


}


//login

if(isset($_POST['login'])){
	$username = mysqli_real_escape_string($db, $_POST['username']);
	$password = mysqli_real_escape_string($db, $_POST['password']);

	if(empty($username)){
		array_push($errors,"Username is required");
	}

	if(empty($password)){
		array_push($errors,"Password is required");
	}


	if(count($errors) == 0){

		$password = md5($password);

		$query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
		$results = mysqli_query($db, $query);

		if(mysqli_num_results($results)){
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "Logged in Successfully";
			header("location:index.php");
		}else{
			array_push($errors, "Wrong Username/Password, Please Try Again");
		}

	}


}





















?>