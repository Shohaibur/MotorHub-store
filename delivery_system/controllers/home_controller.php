<?php 


if($_SERVER["REQUEST_METHOD"] == "POST") {

	logout();
}

function logout()
{
    $_SESSION["isLoggedIn"] = false;
    header("Location: login.php");
    die();
}

?>