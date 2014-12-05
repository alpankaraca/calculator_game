<?php
/**
 * Created by PhpStorm.
 * User: alpankaraca
 * Date: 05/12/14
 * Time: 11:58
 */
include 'header.php';




$username = $_POST['username'];
$password = $_POST['password'];


echo $username;
echo $password;
echo "<br> you are logged in";

$sql = "SELECT * from user WHERE username='$username' and password='$password'";
if (mysqli_query($link, $sql)) {
    echo "Logged in successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($link);
}

mysqli_close($link);

?>