<!-- index_select.php -->
<pre>
<?php
require_once('mysql_connect.php');

$query = "SELECT * FROM `todo_items` WHERE `user_id`=1";
$result = mysqli_query($conn, $query);

if(!empty($result) && mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        print_r($row);
    }
}
mysqli_close($conn);
?>
</pre>
