<?php
$user_info = [
    ['id'=>1, 'username'=>'kchau', "password"=>"bd771e67ad4a69d9408bcc2b9614f2c046ca5d24"],
    ['id'=>2, 'username'=>'redranger', "password"=>"e06d26ada448bc45a0b9652e1ebddecc07a126cb"],
    ['id'=>3, 'username'=>'fetchexpert', "password"=>"e669fc9d9c5d956f00e7df513e9ac7f5b4abae26"],
    ['id'=>4, 'username'=>'kingarthur', "password"=>"611c366a71c5a51452b4979cb5086a4be972d2b5"],
    ['id'=>5, 'username'=>'gandalf', "password"=>"84a0d67b46778b2a67ee88acf427975ba2a6be00"]
];
$username = $_POST['username'];
$password = $_POST['password'];

$success = false;
$message = 'Access Denied';
$output= [];

foreach($user_info as $user){
    if($username === $user['username'] && sha1($password) === $user['password']){
        $message = ('User Credentials Accepted');
        $_SESSION['user_id'] = $user['id'];
        $output['user_id'] = $user['id'];
        $success = true;
    }else{
        $message = ('Username and password do not match');
    }
}
$output['success'] = $success;
$output['message'] = $message;

$outputString = json_encode($output);
print($outputString);
?>