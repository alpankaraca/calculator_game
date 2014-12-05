<?php
/**
 * Created by PhpStorm.
 * User: alpankaraca
 * Date: 05/12/14
 * Time: 11:58
 */
include 'header.php';

session_start();

$link = mysqli_connect('localhost', 'root', '8jy90v', 'calculator');
if (!$link) {
    echo "Could not conect";
    die('Could not connect: ' . mysql_error());
}

$username = $_POST['username'];
$password = $_POST['password'];


$sql = "SELECT * from user WHERE username='$username' and password='$password'";
if (mysqli_query($link, $sql)) {
    $_SESSION["calculator_user"] = $username;
    echo "Logged in successfully" . "<br>" . $_SESSION["calculator_user"] . "-" . $username . "<br>";
    header('Location: game.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($link);
}

mysqli_close($link);

?>