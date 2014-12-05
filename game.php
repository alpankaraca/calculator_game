<?php
/**
 * Created by PhpStorm.
 * User: alpankaraca
 * Date: 05/12/14
 * Time: 12:16
 */


include 'header.php';

$link = mysqli_connect('localhost', 'root', '8jy90v', 'calculator');
if (!$link) {
    echo "Could not conect";
    die('Could not connect: ' . mysql_error());
}




?>



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
        echo "<br>" . $_SESSION["calculator_user"] . "-" . $username . "<br>";

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