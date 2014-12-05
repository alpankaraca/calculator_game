<?php
/**
 * Created by PhpStorm.
 * User: alpankaraca
 * Date: 05/12/14
 * Time: 01:28
 */

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

include 'header.php';

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];


echo $username;
echo $password;
echo $email;
echo "<br> you are registered";

$sql = 'INSERT INTO user (username, password, email) VALUES("$username", "$password", "$email")';
if (mysqli_query($link, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($link);
}

mysqli_close($link);
?>

asdf

