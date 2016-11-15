<!-- index_insert.php -->
<?php
require_once('mysql_connect.php');
$userInput =$_POST;
$query = "INSERT INTO `todo_items`(`title`, `details`, `user_id`) VALUES ('$userInput[title]','$userInput[details]', 1)";
mysqli_query($conn, $query);
print_r($query);
if(mysqli_affected_rows($conn) > 0){
    print('Something was changed');
}else{
    print('Uh oh, something went wrong');
}