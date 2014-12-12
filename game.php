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
    <p>I'll give you two numbers and an operation,  you try to calculate them and type it into the input below and click "yesss" =)</p>
    <p>
        <?php
        function add($x, $y) { return $x + $y; }
        function subtract($x, $y) { return $x - $y; }
        function multiply($x, $y) { return $x * $y; }
        function divide($x, $y) { return $x / $y; }

        $operators = array('add', 'subtract', 'multiply');
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
        ___<?php echo $operation ?>
    </p>

    <input type="number" placeholder="RESULT" name="result" />
    <input type="submit" value="yesss" />
</form>