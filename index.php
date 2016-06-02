<?php
/**
 * Created by PhpStorm.
 * User: barrypoore
 * Date: 02/06/2016
 * Time: 23:57
 */
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once('classes/myClass.php');
$obj = new myClass();

$obj->name = "Billy";

$str = $obj->who($obj->name);


?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<h3>Cool PHP Stuff!!</h3>
<?php echo $str; ?>
</body>
</html>