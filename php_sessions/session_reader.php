<!-- Session Reader -->
<?php
session_start();
print_r($_GET);
$error = array();

if(preg_match('/\d/', $_GET['user_name'])){
    array_push($error, 'Invalid Name Entered');
}
if(preg_match('/\D/', $_GET['user_age'])){
    array_push($error, 'Invalid Age Entered');
}
if(preg_match('/\d/', $_GET['user_occupation'])){
    array_push($error, 'Invalid Occupation Entered');
}
if(count($error) > 0){
    $_SESSION['errors'] = $error;
    header('location: session_setter.php');
}
$_SESSION = $_GET;

?>