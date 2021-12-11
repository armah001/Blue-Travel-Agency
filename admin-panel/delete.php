<?php
//include_once (dirname(__FILE__)).'\Book_controller.php';
require_once('../Book_controller.php');

$id = $_GET['id'];

if(isset($id)){
    $deleteticket =deleteTicket($id);
    if($deleteticket){
        echo"<script language='javascript'>;
        alert('Ticket Deleted');
        window.location.href='dashboard.php';
        </script>";
       // header("location: dashboard.php");
    }else{
        echo "<script>;
        alert('something went wrong');
        </script>";
    }
}

?>