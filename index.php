<?php

  include("index.html");

  $msg = "";
  if(isset($_GET['error']))
  {
       $msg = "Please Fill in the blanks ";
       echo "<div class="alert alert-danger">".$msg."</div>"; 
  }
  if(isset($_GET['success']))
  {
       $msg = "Your Message has been sent ";
       echo "<div class="alert alert-success">".$msg."</div>"; 
  }


?>

