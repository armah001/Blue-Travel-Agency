<?php
//include_once (dirname(__FILE__)).'\Book_controller.php';
require_once('../Book_controller.php');

if(isset($_POST['insert'])){
    $id = $_GET['id'];
    $dest=$_POST['destination'];
    $Origin=$_POST['depart'];
    $date=$_POST['date'];
    $class=$_POST['class'];

    $update_ticket= updateticket($id,$dest,$Origin,$date,$class);

    if($update_ticket){
        echo"<script language='javascript'>;
        alert('Ticket Updated');
        window.location.href='dashboard.php';
        </script>";
    }else{
        echo "<script>;
        alert('something went wrong');
        window.location.href='dashboard.php';
        </script>";
        
    }




}
?>
