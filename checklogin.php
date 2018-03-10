<?php

include('sessions.inc.php');
//check login / password combination

if ($_POST['username'] == "admin" && $_POST['password'] == "james"){

$_SESSION['login'] = 1; 
// redirect browser
header("Location:../Logedin/index.html");
}

else 

{


header("Location:../index.php");


}

?>

