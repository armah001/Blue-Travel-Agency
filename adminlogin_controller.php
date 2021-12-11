<?php

  require_once('Book_controller.php');
//   $conn = new mysqli(SERVER, USERNAME, PASSWD, DATABASE);
//   // Check connection
//   if ($conn->connect_error) {
//       die("Connection failed: " . $conn->connect_error);
//   }
  
//   if(isset($_POST['submitBtn'])){

    $uname=$_POST['user'];
    $password=$_POST['passw'];

    $login=Adminlogin($uname,$password);
    if($login){
        echo "<script language='javascript'>;
        alert('Log In successful');
        window.location.href='admin-panel/dashboard.php';
        </script>";
    }else{
        echo "<script>;
        alert('Invalid credentials. Try Again');
        window.location.href='login.php';
        </script>";
    }
    
    // $result=mysqli_query($conn,$sql);
    
    // if(mysqli_num_rows($result)==1){
    
    //     header("location: index.html");
        
    //     exit();
    // }
    // else{
    //     echo " You Have Entered An Incorrect Password";
    //     exit();
    // }
        
// }
?>
