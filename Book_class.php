<?php
//connecting to databse
require_once('bluetravelsdb_class.php');

class Book extends db_connection{

    
    
    public function createticket($price,$dest,$Origin,$class,$date,$airline,$flight){
        $sql= "INSERT INTO Ticket(ticket_price,Destination,Departure,travel_class,departure_date,airline_name,flight_no) 
        VALUES('$price','$dest','$Origin','$class','$date','$airline','$flight')";
        
        
        return $this-> db_query($sql);
    }

    // public function createpassenger($Fname, $email,$phone){
    //     $sql="INSERT INTO passenger(fullname,tel,email) VALUES('$Fname','$phone','$email')"; 
    //     return $this-> db_query($sql);
    // }


    public function Passenger_details($Fname, $email, $address,$id,$country,$phone){
        $sql="INSERT INTO passenger VALUES('$Fname', '$email',' $address','$id','$country','$phone')";
        return $this-> db_query($sql);
    }

    public function update_ticket($id,$dest,$Origin,$date,$class){
        $sql="UPDATE Ticket SET  Destination='$dest', Departure='$Origin', departure_date='$date', travel_class='$class'
        where ticket_no='$id'";
        return $this->db_query($sql);
    }
 

    public function getTicket(){
        // $sql="SELECT * FROM Ticket";
        $sql="SELECT * FROM Ticket";
        return $this->db_query($sql);
    }

    public function getticketsfromdestination($dest){
        $sql="SELECT ticket_price, Destination, Departure, departure_date, travel_class, airline_name, 
                flight_no FROM Ticket WHERE Destination ='$dest'";

        return $this->db_query($sql);
    }

    public function deleteticket($id){
        //sql query
        $sql= "DELETE FROM Ticket WHERE ticket_no ='$id' ";   

        //run query
        return $this->db_query($sql);

    }
    public function login($uname,$password){
        $sql="SELECT * FROM Employees WHERE users='".$uname."'AND Pass='".$password."' limit 1";
         return $this->db_query($sql);
    }

        






}
?>