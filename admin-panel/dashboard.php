<!DOCTYPE html>
<html lang="en">
    <head>
        <title>BLUE TRAVEL AND TOUR</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        	<!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap-theme.min.css">
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
    <style>
        body {
            background: #f2f6e9;
        }
        .navbar {
            background:#6ab446;
        }
        .nav-link,
        .navbar-brand {
            color: #fff;
            cursor: pointer;
        }
        .nav-link {
            margin-right: 1em !important;
        }
        .nav-link:hover {
            color: #000;
        }
        .navbar-collapse {
            justify-content: flex-end;
        }
        p{
            text-align: center;
        }

        .btn-primary {
            color: #fff;
            background-color: #ff8c00;
            border-color: #ff8c00;
        }
      </style>  
</head>
<body>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

    <nav class="navbar navbar-expand-md">
        <a class="navbar-brand" href="dashboard.php">Dashboard</a>
        <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="main-navigation">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="../index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../aboutus.php">About Us</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">log Out</a>
                </li>
            </ul>
        </div>
    </nav>
<br>



<div class="available">
<table class="table table-bordered" id="dataTable" width="100" collspacing="0">
      <thead>
        <tr>
          <th>Origin</th>
          <th>Destination</th>
          <th>Departure_Date</th>
          <th>Class</th>
          <th>Airline_Name</th>
          <th>Flight_Num</th>
            <th>Action</th>
          

        </tr>
      <thead>
        <tbody>
            
        <div class="add-button">
            <a href="create_ticket.php"><button type="button" class="ticket-btn btn btn-secondary btn-lg">Add New Ticket</button></a>
        </div>
            <?php
            require '../Book_controller.php';
            
                    $books = getTicketss();
                    foreach($books as $key => $value){
                    ?>   
                        <tr>

                            <td><?= $value['Departure']; ?></td>
                            <td><?= $value['Destination']; ?></td>
                            <td><?= $value['departure_date']; ?></td>
                            <td><?= $value['travel_class']; ?></td>
                            <td><?= $value['airline_name']; ?></td>
                            <td><?= $value['flight_no']; ?></td>
                            
                            
                            <td>
                            <a href="delete.php?id=<?= $value['ticket_no'] ?>" class="btn btn-danger btn-custom"> Delete</a> 
                            <a href="update.php?id=<?= $value['ticket_no'] ?>" class="btn btn-light btn-custom"> Update</a> 
                          </td>
                        

                       
                        </tr>
                        <?php
                     }
                    
                ?>    
        </tbody>
    </table>
  </div>

</body>
</html>
