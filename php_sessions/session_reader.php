<!-- Session Reader -->
<pre>
<?php
session_start();
$_SESSION = $_GET;
print_r($_SESSION);
$_SESSION['errors'] = array();
if(preg_match('/\d/', $_GET['user_name'])){
    $_SESSION['errors']['name'] = "Invalid Name entered";
}
if(preg_match('/\D/', $_GET['user_age'])){
    $_SESSION['errors']['age'] = 'Invalid Age Entered';
}
if(preg_match('/\d/', $_GET['user_occupation'])){
    $_SESSION['errors']['occupation'] = 'Invalid Occupation Entered';
}
if(count($_SESSION['errors']) > 0){
    header('location: session_setter.php');
}
?>
</pre>
