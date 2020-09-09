<?php
//    if(isset($_POST['submit']))
//    {
//       $name=$_POST ['name'];
//       $email=$_POST['email'];
//       $No=$_POST['no'];
//       $msg=$_POST['msg'];

      
//       $subject="Form submission";

//       if(empty($name) || empty($email) || empty($NO) || empty($msg))
//       {
//           header('location:.index.php?error');
//       }
//       else
//       {
//         $to='mayurinarkhede2154@gmail.com';

//         if(mail ($to, $subject, $msg, $headers))
//         {
//             header("location:index.php?success");
//         }        
//        }
//    }
//     else
//     {
//         header('location:.index.php');
//     }
    

//     $msg = "";
//     if(isset($_GET['error']))
//     {
//          $msg = "Please Fill in the blanks ";
//          echo "<div class="alert alert-danger">".$msg."</div>"; 
//     }
//     if(isset($_GET['success']))
//     {
//          $msg = "Your Message has been sent ";
//          echo "<div class="alert alert-success">".$msg."</div>"; 
//     }


$to="mayurinarkhede2154@gmail.com";

$subject="Form submission";

$message="Thank you!";

$headers="From: mayurinarkhede2154@gmail.com";
   if(mail($to, $subject, $message, $headers)){
       echo "mail send";
   }
   else{
       echo "Mail not send";
   }


?> 