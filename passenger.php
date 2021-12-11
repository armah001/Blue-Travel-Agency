
 <?php

include_once (dirname(__FILE__)).'\Book_controller.php';

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>BLUE TRAVEL AND TOUR</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        		<!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-theme.min.css">
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
        <a class="navbar-brand" href="index.html">Blue Travel Agency</a>
        <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="main-navigation">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="aboutus.php">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Trips</a>
                </li> 
                <li class="nav-item">
                    <a class="nav-link" href="login.php">log In</a>
                </li>
            </ul>
        </div>
    </nav>
<br>
<div class="section-heading">


<center><h1 style = "font-size:62px;">Passenger Details </h1></center>
<br>
<div class="container-fluid">
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Message!</strong> Please review your passenger information.
			You cannot change your reservation once you proceed. 
		</div>
		<div class="panel panel-default">
			<div class="panel-body">
			 <h2>
			 	<center>PASSENGER INFO</center>
			 </h2>
             <div class="row" >
             <form name="search_form" action="passinsert_controller.php" method="POST"> 
				<div class="container-fluid">
					
					  <div class="form-group">
					    <label for="">Booked By:</label>
					    <input type="text" class="form-control" id="book-by" name="fullname" placeholder="Enter Full Name"
					    autofocus="" required="" autocomplete="off">
					  </div>
					  <div class="form-group">
					    <label for="">Contact:</label>
					    <!-- <input type="text" name="num" class="form-control" id="cont" placeholder="Enter Contact" required="" autocomplete="off"> -->
                        <input type="tel" class="form-control"id="cont" name="num" placeholder="Enter Contact" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required="" autocomplete="off"><br>
                        <small>Format: 024-455-6781</small><br>
                        <label for="email"><i class="fa fa-envelope"></i> Email</label><br>
                        <input type="email" id="email" name="email" placeholder="john@example.com" required="">
					  </div>
					  <div class="form-group">
					    <label for="">Address:</label>
					    <input type="text" class="form-control" id="address" placeholder="Enter Address" name="address" required="" autocomplete="off">
					  </div>
					<br />
					
					  <button type="submit" class="btn btn-success">Next
					  <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
					  </button>
					</form>
				</div>
            </div>
			</div>
		</div>
	</div>
	<div class="col-md-4"></div>
</div>
</form>
</body>
</html>
