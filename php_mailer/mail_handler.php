<?php
ob_start();
$errors = [];
if(strlen($_POST['name']) === 0 || strlen($_POST['subject']) === 0 || strlen($_POST['email']) === 0){
    $errors[] = 'Forms not filled out';
}

if(count($errors) > 0){
    $output = [];
    $output['success'] = false;
    $output['message'] = $errors;
    print(json_encode($output));
    exit();
}
require_once('email_config.php');
require('phpmailer/PHPMailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->SMTPDebug = 0;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication


$mail->Username = EMAIL_USER;                 // SMTP username
$mail->Password = EMAIL_PASS;                 // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to
$options = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
$mail->smtpConnect($options);
$mail->From = 'kchau.mailserver@gmail.com';//your email sending account
$mail->FromName = 'Kevin Chau\'s Mail Daemon';//your email sending account name
$mail->addAddress('kchau.jobs@gmail.com'/*your email address, or the email the sender if you are sending confirmation*/ /*email address user name*/);     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
$mail->addReplyTo($_POST['email']/*email address of the person sending the message, so you can reply*/);
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML
$message = "
Sender: {$_POST['email']}<br>
Subject: {$_POST['subject']}<br>
Message: {$_POST['body']}<br>
";
$mail->Subject = $_POST['subject'];
$mail->Body    = $message;
$mail->AltBody = htmlentities($_POST['body']);

$debug = ob_get_contents();
ob_end_clean();
$output = [
    'success' => false,
    'message' => ''
];
if(!$mail->send()) {
    $output['message'] .= 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
} else {
    $output['message'] .= 'Message has been sent';
    $output['success'] = true;
}
$output_json = json_encode($output);
print($output_json);
?>
