<?php
  require_once('Book_controller.php');

// $Origin=$_POST['Departure'];
// $Destination=$_POST['Destination'];
// $Departure_Date=$_POST['departure_date'];
// $Class=$_POST['travel_class'];
// $Airline_Name=$_POST['airline_name'];
// $Flight_No=$_POST['flight_no'];

 $Fname=$_POST['firstname'];
 $email=$_POST['email'];
 $address=$_POST['address'];
 $id=$_POST['pasportnum'];

 $country=$_POST['state'];
 $phone=$_POST['num'];

// $cardname=$_POST['cname'];
// $cardnum=$_POST['cardnumber'];
// $expire=$_POST['expmonth'];
// $expyr=$_POST['expyear'];
// $cvv=$_POST['cvv'];




$add=addPassenger($Fname, $email, $address,$id,$country,$phone);
  if($add){
    // header('location: index.php');
    
       echo "<script language='javascript'>;
       alert('Payment successful Ticket Purchased');
       window.location.href='index.php';
       </script>";
  }else{
      echo "<script>;
      alert('Unsucessful. Try Again');
      window.location.href='passenger.php';
      </script>";
  }
  

?>