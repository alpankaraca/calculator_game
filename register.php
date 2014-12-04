<?php
/**
 * Created by PhpStorm.
 * User: alpankaraca
 * Date: 05/12/14
 * Time: 01:28
 */

include 'header.php';

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

mysqli_query($link, "INSERT INTO user (username, password, email) VALUES('$username', '$password', '$email') ") or die(mysql_error());

echo $username;
echo $password;
echo $email;
echo "<br> you are registered";
?>

asdf

