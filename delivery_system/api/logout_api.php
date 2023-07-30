<?php 

session_start();


if($_SERVER["REQUEST_METHOD"] == "POST") {
    $response = new \stdClass();


	$_SESSION["isLoggedIn"] = false;

    $response->status = 200;
    $response->message = "Logout Successful";

    echo json_encode($response);
}

?>