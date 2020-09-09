
<!-- //    if(isset($_POST['submit']))
//    {
//       $name=$_POST ['name'];
//       $email=$_POST['email'];
//       $No=$_POST['no'];

    //   $message="Thank you!";

      
    //   $subject="Form submission";

//       if(empty($name) || empty($email) || empty($NO) || empty($msg))
//       {
        //   $headers='location:.index.html?';
//       }
//       else
//       {
        // $to='mayurinarkhede2154@gmail.com';

        // if(mail ($to, $subject, $message, $headers))
        // {
        //     echo "mail send";
        // }   
        // else{
        //         echo "Mail not send";
        // }
                 
//        }
//    }
//     else
//     {
//         header('location:.index.html');
//     }
    

    // $message = "";
    // if(isset($_GET['error']))
    // {
    //      $message = "Please Fill in the blanks ";
    //      echo "<div class="alert alert-danger">".$message."</div>"; 
    // }
    // if(isset($_GET['success']))
    // {
    //      $message = "Your Message has been sent ";
    //      echo "<div class="alert alert-success">".$message."</div>"; 
    // }


// $to="mayurinarkhede2154@gmail.com";

// $subject="Form submission";

// $message="Thank you!";

// $headers="From: mayurinarkhede2154@gmail.com";
//    if(mail($to, $subject, $message, $headers)){
//        echo "mail send";
//    }
//    else{
//        echo "Mail not send";
//    } -->




<?php


$name=$_POST ['name'];
$visitor_email=$_POST['email'];
$Mobno=$_POST['no'];
$email_from='yugalmali198@gmail.com';

$email_subject="New form submission";
$email_body="User name :$name.\n".
            "User Email:$visitor_email.\n".
            "user Mobno:$Mobno.\n";
    $to="mayurinarkhede2154@gmail.com";
    $headers="From:$email_from\r\n";
    $headers="Reply-To:$visitor_email\r\n";
    if (mail($to,$email_subject,$email_body,$headers))
    {
        header("location: index.html?success");
    }
    else{

        header("location: index.html?error");
    }
            
?>

