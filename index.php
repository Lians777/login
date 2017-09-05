<?php 

session_start();


if (isset($_POST['username']) && (isset($_POST['password'])) {

    if ($_POST['username'] == "ignas" && $_POST['passworld'] == "slaptas") {
        
        $_SESSION['user']['usernaem'] = $_POST['usernaem'];
       	$_SESSION['user']['level'] = $_POST['admin'];


 } else {
 $error = "wrong usernaem or passworld";
    }

}


    
else if && (isset($_POST['submit'])




if (isset($_GET['logout'])) {
	session_destroy();

}
   




 else {
$error = "no login";
}

if (isset($_SESSION['user'])) {
    
}$vardas = $_SESSION['user']['usernaem'];




include "main.php";

 ?>
