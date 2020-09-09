<?php  
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $no = $_POST['no'];
    $msg = $_POST['msg'];

   $subject = "I want to Hire you."; 
   $mailTO = "yugalmali198@gmail.com";
   $headers = "From: ".$email;
   $txt = "You have received an e-mail from" .$name. ".\n\n" .$msg;   

   mail($mailTo, $subject, $headers ,$txt);
   header("Location: index.html?mailsendsuccessfully");
}
  

?>