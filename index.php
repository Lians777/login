<?php

$old_user = "";
# COOKIES

//setcookie("username", "Pranas", time() + (60 * 60 * 24 * 7), "/");
/*
if(isset($_COOKIE["username"])) {
	$vardas = $_COOKIE["username"];
} else {
	$vardas = "nežinomas";
}
*/

session_start();


if (isset($_POST['username']) && isset($_POST['password'])) {
	# yra įvesti prisijungimo duomenys..

	if($_POST['username'] == "Ignas" && $_POST['password'] == "slaptas") {
		# vartotojo vardas ir slaptažodis tinka..

		$_SESSION['user']['username'] = $_POST['username'];
		$_SESSION['user']['level'] = "admin";

	} else {
		# vartotojo vardas arba slaptažodis netinkamas
		$error = "Wrong username or password";
	}

} else if (isset($_POST['submit'])) {
	# prisijungimo duomenys nebuvo įvesti
	$error = "No login data";
}


if (isset($_GET['logout'])) {
	session_destroy();
}



// Session check

if (isset($_SESSION['user'])) {

	$vardas = $_SESSION['user']['username'];
	include "view/main.php";

} else {

	include "main.php";

}