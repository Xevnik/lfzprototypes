<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 11/3/16
 * Time: 12:54 PM
 */
/*Feature Set 2*/
$a = 1;
$b = 5;
include('includes/data.php');
$result = $a * $b;
print("<br>Result is $result");
?>

<?php
/*Feature Set 2*/

$c = 2;
include('includes/data2.php');
include_once('includes/data2.php');
include('includes/data2.php');
$result2 = $c;
print("<br>Result 2 = $result2");
?>