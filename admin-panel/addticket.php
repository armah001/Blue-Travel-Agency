<?php
//include_once (dirname(__FILE__)).'\Book_controller.php';
require_once('../Book_controller.php');

// if(isset($_POST['insert'])){

$price = $_POST['amount'];
$dest = $_POST['destination'];
$Origin = $_POST['departure'];
$class = $_POST['class'];
$date=$_POST['date'];
$airline=$_POST['airline'];
$flight=$_POST['flight_num'];

// $createticket = create($price,$dest,$Origin,$class,$date,$airline,$flight);

$ticket=create($price,$dest,$Origin,$class,$date,$airline,$flight);

if($ticket){
    echo "<script language='javascript'>;
           alert('Ticket Successfully Created');
           window.location.href='dashboard.php';
          </script>";
    } else{
        echo "<script>;
        alert('something went wrong');
        </script>";
        echo $ticket;
    }
// }

?>   

