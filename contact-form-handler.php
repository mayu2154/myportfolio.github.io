<?php
   if(isset($_POST['submit']))
   {
      $name=$_POST ['name'];
      $email=$_POST['email'];
      $No=$_POST['no'];
      $msg=$_POST['msg'];

      
      $subject="Form submission";

      if(empty($name) || empty($email) || empty($NO) || empty($msg))
      {
          header('location:.index.html?error');
      }
      else
      {
        $to='mayurinarkhede2154@gmail.com';

        if(mail ($to, $subject, $msg, $headers))
        {
            header("location:index.html?success");
        }        
       }
   }
    else
    {
        header('location:.index.html');
    }
    
?>