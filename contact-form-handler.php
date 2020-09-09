<?php
$name=$_POST ['name'];
$visitor_email=$_POST'email'];
$Mobno=$_POST['no'];
$email_from='mayurinarkhede2154@gmail.com';

$email_subjec="New form submission";
$email_body="User name :$name.\n".
            "User Email:$visitor_email.\n".
            "user Mobno:$Mobno.\n";
            $to="mayurinarkhede2154@gmail.com";
            $headers="From:$email_from\r\n";
            $headers="Reply-To:$visitor_email\r\n";
            mail($to,$email_subjec,$email_body,$headers);
            header("location:Main.html");
            

?>