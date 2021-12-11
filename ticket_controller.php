<?php
  require('Book_controller.php');
  $uname=$_POST['user'];
  $password=$_POST['passw'];

  $view=getSingleticket($id);
  

  ?>
  <?php
$number=$_POST['num'];
 if(preg_match('/[^0-9]/',$number)){
    echo"Enter only numbers";
}

 ?>
 form  method="POST">
                            <!-- <input type="button" value="Home" class="homebutton" id="btnHome" onClick="<?php header("Location: /create_ticket.php"); ?>" />
                                <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>">
                                <input type="button" value="Home" class="homebutton" id="btnHome" onClick="<?php header("Location: /delete.php"); ?>" />
                                <input type="button" value="Home" class="homebutton" id="btnHome" onClick="<?php header("Location: update.php"); ?>" />
                                <input type="button" value="Home" class="homebutton" id="btnHome" onClick="<?php header("Location: create_ticket.php"); ?>" />
                            </form> -->\



                            <!-- <td><a href="payment.phpid=<?= $value['Destination'] ?>" class="btn btn-danger btn-custom"> Buy</a> </td> -->


                            <td>
                        

                        <!-- <form action="update.php" method="POST">
                        <input type="button" value="Home" class="homebutton" id="btnHome" onClick="<?php header("Location: /update.php"); ?>" />
                        </form> -->
                    </td>