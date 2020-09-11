<?php


$result="";
if(isset($_POST['submit'])){
    require 'phpmailer/PHPMailerAutoload.php';
    $mail = new PHPMailer;

    $mail->Host='smtp.gmail.com';
    $mail->Port=587;
    $mail->SMTPAuth=true;
    $mail->SMTPSecure='tls';
    $mail->Username='mayurinarkhede2154@gmail.com';
    $mail->Password='mayuri2154';


    $mail->setfrom($_POST['email'],$_POST['name']);
    $mail->addReplayTo($_POST['email'],$_POST['name']);
    $mail->addAddress('yugalmali198@gmail.com');


    $mail->isHTMl(true);
    $mail->Subject='Form Submission: ' .$_POST['subject'];
    $mail->Body= '<h1 align=center>Name : '.$_POST['name']. '<br>Email: '$_POST['email']. '<br>Message: '$_POST['msg'].'</h1>';


    if(!$mail->send()){
        $result="Something went wrong. Please try again";
    }
    else{
        $result="Thanks " .$_POST['name']. " for contacting us. we will get back to you soon!";
        
    }
}


?>
