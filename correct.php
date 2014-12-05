<?php
/**
 * Created by PhpStorm.
 * User: alpankaraca
 * Date: 05/12/14
 * Time: 14:17
 */

include 'header.php';

$score_table = "SELECT * from user WHERE username='$username'";
$score = mysqli_query($link, $score_table);

while($row = mysqli_fetch_assoc($score)) {
    echo "Name: " . $row["username"]. " <br> Score: " . $row["score"] . "<br>";
}


?>


<img src="http://treasure.diylol.com/uploads/post/image/342045/resized_success-kid-meme-generator-congratulations-you-big-girl-170c10.jpg" style="width: 400px;"/>