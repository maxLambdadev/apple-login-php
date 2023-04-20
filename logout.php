<?php

session_start();

$username ="";
$password ="";
$id_user ="";
$validated ="";
$name = "";


$_SESSION["username"] = $username;

$_SESSION["id_user"] = $id_user;

$_SESSION["name"] = $name;

$_SESSION["validated"]= $validated;






session_destroy();

/*
unset ("username");

//unset ("password");

unset ("id_user");

unset ("validated");



*/
?>

<script>

document.location.href ="login.php";
</script>









?>