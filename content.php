<?php  
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $no = $_POST['no'];
    $msg = $_POST['msg'];

   $subject = "I want to Hire you."; 
   $mailTO = "https://mail.google.com/mail/u/3/#inbox";
   $headers = "From: ".$email;
   $txt = "You have received an e-mail from" .$name. ".\n\n" .$msg;   

   mail($mailTo, $subject, $headers ,$txt);
   header("Location: index.html?mailsendsuccessfully");
}
  

?>