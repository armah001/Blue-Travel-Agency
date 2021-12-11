<?php

  require_once('Book_controller.php');

  $Fname=$_POST['fullname'];
  $email=$_POST['email'];
  $phone=$_POST['num'];
  $address=$_POST['address'];

//  $insert=createpass($Fname, $email, $phone, $address);
  if($insert){
    //header('location: payment.php');

      // echo "<script language='javascript'>;
      // alert('Insertion successful');
      // window.location.href='payment.php';
      // </script>";
  }else{
      echo "<script>;
      alert('Unsucessful. Try Again');
      window.location.href='passenger.php';
      </script>";
  }


?>