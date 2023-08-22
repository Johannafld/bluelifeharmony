<?php
// Connexion BDD
$host = "localhost";
$user = "root";
$password = "root";
$bdd = "bluelifeharmony";

$lien = mysqli_connect($host, $user, $password, $bdd);

if (!$lien) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    // echo "<p>Connected successfully to the database!</p>";
    mysqli_query($lien, "set names utf8");
}

// VARIABLES
$user = $_SESSION["user"];

// Visit front page
if (isset($_GET['frontpage'])) {
    header("location: ../index.php");
}

// Logout
if (isset($_GET['logout'])) {
	session_destroy();
    header("location: ../login.php");
}
?>