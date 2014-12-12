<?php
/**
 * Created by PhpStorm.
 * User: alpankaraca
 * Date: 12/12/14
 * Time: 09:48
 */


session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// remove all session variables
session_unset();

// destroy the session
session_destroy();

header('Location: index.php');
?>

</body>
</html>