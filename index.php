<?php
/**
 * Created by PhpStorm.
 * User: alpankaraca
 * Date: 03/12/14
 * Time: 09:40
 */
    

include 'header.php';

?>

<html>
<head>
    <title>Calculator Game</title>
</head>

<body>

<form action="register.php" method="post">
    <input type="text" name="username" placeholder="username"/>
    <input type="password" name="password" placeholder="password"/>
    <input type="email" name="email" placeholder="in case of password loss"/>
    <input type="submit" value="Register"/>
</form>

<form action="login.php" method="post">
    <input type="text" name="username" placeholder="username"/>
    <input type="password" name="password" placeholder="password"/>
    <input type="submit" value="Register"/>
</form>



<form action="adder.php" method="post">
    <p>Let's play a game;</p>
    <p>I'll give you two numbers and you try to add them and type it into the input below and click "yesss" =)</p>
    <p>
        <?php
        function add($x, $y) { return $x + $y; }
        function subtract($x, $y) { return $x - $y; }
        function multiply($x, $y) { return $x * $y; }
        function divide($x, $y) { return $x / $y; }

        $operators = array('add', 'subtract', 'multiply', 'divide');
        //...


        $a = rand(10, 100);
        echo $a . "<br />";
        $b = rand(10, 100);
        echo $b;

        $operation = $operators[array_rand($operators)];

        $result = call_user_func_array($operation, array($a, $b));
        //$result = $a + $b;
        echo '<input type="hidden" value="' . $result . '" name="result_h" />';
        ?>
        <br />
        ___+
    </p>

    <input type="number" placeholder="TOTAL" name="result" />
    <input type="submit" value="yesss" />
</form>

<?php
echo "alpan"
?>
</body>
</html>

