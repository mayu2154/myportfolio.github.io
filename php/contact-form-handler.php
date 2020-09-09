<?php
   if(isset($_POST['submit'])){
      $name=$_POST ['name'];
      $email=$_POST['email'];
      $No=$_POST['no'];
      $msg=$_POST['msg'];

      $to='mayurinarkhede2154@gmail.com';
      $subject="Form submission";


    $message="Name: ".$name. "\n"."Phone: ".$phone."\n". "Wrote the following: "."\n\n".$msg;
    $headers="From: ".$email;

    if(mail ($to, $subject, $message, $headers)){
        echo"<h1> Thank you for contact me !"." ".$name.", </h1>";
    }
     else{
         echo "Something went wrong!";
    }
         
    // $email_body="User name :$name.\n".
    //         "User Email:$visitor_email.\n".
    //         "user Mobno:$Mobno.\n";
    //         $to="mayurinarkhede2154@gmail.com";
    //         $headers="From:$email_from\r\n";
    //         $headers="Reply-To:$visitor_email\r\n";
    //         mail($to,$email_subjec,$email_body,$headers);
    //         header("location:Main.html");
            
    }
?>