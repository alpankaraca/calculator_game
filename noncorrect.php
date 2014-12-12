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


<img src="http://www.guitarmasterclass.net/guitar_forum/uploads/monthly_04_2013/post-17069-1366803213.jpg" />
<a href="/calculator-game/">Again</a>