<?php
/**
 * Created by PhpStorm.
 * User: alpankaraca
 * Date: 03/12/14
 * Time: 09:40
 */

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

$link = mysqli_connect('localhost', 'root', '8jy90v', 'calculator');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}




?>