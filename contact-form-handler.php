<?php
//    if(isset($_POST['submit']))
//    {
//       $name=$_POST ['name'];
//       $email=$_POST['email'];
//       $No=$_POST['no'];

      $message="Thank you!";

      
      $subject="Form submission";

//       if(empty($name) || empty($email) || empty($NO) || empty($msg))
//       {
          $headers='location:.index.html?error';
//       }
//       else
//       {
        $to='mayurinarkhede2154@gmail.com';

        if(mail ($to, $subject, $message, $headers))
        {
            header("location:index.html?success");
        }        
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
//    }


?> 