<!-- Session Reader -->
<pre>
<?php
session_start();
$_SESSION = $_GET;
$_SESSION['errors'] = array();
if(preg_match('/\d/', $_GET['user_name'])){
    array_push($_SESSION['errors'], array("name"=>"Invalid Name entered"));
}
if(preg_match('/\D/', $_GET['user_age'])){
    array_push($_SESSION['errors'], array('age'=>'Invalid Age Entered'));
}
if(preg_match('/\d/', $_GET['user_occupation'])){
    array_push($_SESSION['errors'], array('occupation'=>'Invalid Occupation Entered'));
}
if(count($_SESSION['errors']) > 0){
    print_r($_SESSION);
    //header('location: session_setter.php');
}
?>
</pre>
