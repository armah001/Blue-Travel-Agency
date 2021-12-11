

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>BLUE TRAVEL AND TOUR </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <style>
                      body {
    padding: 0;
    margin: 0;
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

body{
    background: #f2f6e9;
    color: #272343;
    font-family: 'DM Sans', sans-serif;
    text-align: center;
}

h4{
    padding-top: 4rem;
    text-align: center;
}

.course-body{
    width: 60%;
    margin: 0 auto;
}
.bi{
    color: black;
} 
.divider:after,
.divider:before {
  content: "";
  flex: 1;
  height: 1px;
  background: #eee;
}
.btn{
    background-color:#6ab446 !important;
}
body{
    background-color: #eceff1;
    color: #272343;
    font-family: 'DM Sans', sans-serif;
}

h4{
    padding-top: 4rem;
    text-align: center;
}

.ticket-body{
    width: 60%;
    margin: 0 auto;
}

      </style>  
</head>
<?php
    include_once (dirname(__FILE__)).'\Book_controller.php';

    $id = $_GET['id'];

?>
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
                    <a class="nav-link" href="..//index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="..//aboutus.php">About Us</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">log Out</a>
                </li>
            </ul>
        </div>
    </nav>

<br>


    <h4>Update Ticket Details </h4>
    <div class="ticket-body">
          <form method="post" action="edit.php?id=<?= $_GET['id'] ?>" id="insert_form">
          
          <label>Destination</label>
          <input type="text" name="destination" id="name" class="form-control" required="" />
          <br />
          <label>Departure Location</label>
          <input type="text" name="depart" id="program" class="form-control" required="">
          <br />  
          <label>Departure Date</label>
          <input type="date" name="date" id="duration" class="form-control" required=""/>
          <br />  
          <label>Travel Class</label>
          <input type="text" name="class" id="class" class="form-control" placeholder="Enter either economy, first or business'" required=""/>
          <br />
          <input type="hidden" name="id" value="<?php echo $id;?>"/>
          <input type="submit" name="insert" id="insert" value="Update" class="btn btn-success" />
          </form>
        </div>




</body>
</html>    