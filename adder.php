<html>
<head>
<title>Calculator Result Page</title>
</head>

<body>
<h3>
<?php
session_start(); 
$given = $_POST['result'];
$result = $_POST['result_h'];


$link = mysqli_connect('localhost', 'root', '8jy90v', 'calculator');
if (!$link) {
    echo "Could not conect";
    die('Could not connect: ' . mysql_error());
}

if ($result == $given){
    $username = $_SESSION['calculator_user'];

    $sql = "UPDATE user SET score= score + 1 WHERE username='$username'";

	echo "Congragulations you did a GREAT job! " . $result;
	echo "<br />Your score is: " . $_SESSION['score'] . "<br />";
	echo '<img src="http://treasure.diylol.com/uploads/post/image/342045/resized_success-kid-meme-generator-congratulations-you-big-girl-170c10.jpg" />';
}else{
	echo "<br />Your answer, " . $given . " is not correct! Go back and try again";
	if ($_SESSION['score'] <= 0) {
                echo "Score can't be less than 0";
        }else{
                $_SESSION['score'] -= 1;
		echo "Your score is: " . $_SESSION['score'];
        }
	echo '<br /><img src="http://www.guitarmasterclass.net/guitar_forum/uploads/monthly_04_2013/post-17069-1366803213.jpg" />' ;
}
?>
</h3>

<a href="/" >Go back </a>

</body>

</html>
