<?php

//   require('bluetravelsdb_cred.php');
//   $conn = new mysqli(SERVER, USERNAME, PASSWD, DATABASE);
//   // Check connection
//   if ($conn->connect_error) {
//       die("Connection failed: " . $conn->connect_error);
//   }
  
//   if(isset($_POST['submitBtn'])){
    
//     $uname=$_POST['user'];
//     $password=$_POST['passw'];
    
//     $sql="SELECT * FROM Employees WHERE users='".$uname."'AND Pass='".$password."' limit 1";
    
//     $result=mysqli_query($conn,$sql);
    
//     if(mysqli_num_rows($result)==1){
    
//         header("location: index.html");
        
//         exit();
//     }
//     else{
//         echo " You Have Entered An Incorrect Password";
//         exit();
//     }
        
// }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>BLUE TRAVEL AND TOUR Login</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
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
    text-align: center;
    
}
/* .login{
text-align: center;
padding: 1.5% 1.5%;
background-color: darkseagreen; /*it should be faded  
margin: 0 auto !important;
margin-top: 9rem !important;
text-shadow: white 0px 0px 2px;
width: 30%;
} 
.sbtn{
margin: 1.5rem 0;
color: white;
}
*/
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
      </style>  
</head>
<body>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

    <nav class="navbar navbar-expand-md">
        <a class="navbar-brand" href="index.php">Blue Travel Agency</a>
        <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="main-navigation">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="aboutus.php">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="tickets.php">Trips</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">log In</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- </fieldset>    
        <form class="login" method="#" action="#">
            <h3>Login</h3>
             <label for="fname">First name:</label><br> -->
            <!-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
            </svg>
            <input type="text" id="fname" name="fname" placeholder="Username/Email" ><br>
            <label for="lname">Last name:</label><br> 
            <br>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key-fill" viewBox="0 0 16 16">
                <path d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
              </svg>
            <input type="text" id="pass" name="pss" placeholder="Password">
            <br> <br>
            <input type="submit" value="Login" class="btn btn-secondary"> <br><br>
            <input type="submit" value="Forget Password" class="btn btn-secondary"><br> -->

            <!-- login is for admins
            <label for="signup">Do not have an account?</label><br> -->
            <!-- <button type="button" onclick="window.location.href='signUp.html'">Sign Up </button> 
        
             
        </form>
    </fieldset> -->

    <section class="vh-100">
        <div class="container py-5 h-100">
          <div class="row d-flex align-items-center justify-content-center h-100">
            <div class="col-md-8 col-lg-7 col-xl-6">
              <img src="administrator.png" class="img-fluid" alt="Phone image">
            </div>
            <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
              <form method='POST' action="adminlogin_controller.php">
                <!-- Email input -->
                <div class="form-outline mb-4">
                  <label class="form-label" for="form1Example13">Email address</label>
                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                     </svg>
                  <input type="email" name="user" id="" class="form-control form-control-lg" !required/>
                  
                </div>
      
                <!-- Password input -->
                <div class="form-outline mb-4">
                  <label class="form-label" for="form1Example23">Password</label>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key-fill" viewBox="0 0 16 16">
                        <path d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                    </svg>
                  <input type="password" name="passw" id="pass" class="form-control form-control-lg" !required/>
                  
                </div>
      
                <div class="d-flex justify-content-around align-items-center mb-4">
                  <!-- Checkbox -->
                  <div class="form-check">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      value=""
                      id="form1Example3"
                      checked
                    />
                    <label class="form-check-label" for="form1Example3"> Remember me </label>
                  </div>
                  <a href="#!">Forgot password?</a>
                </div>
      
                <!-- Submit button -->
                <button type="submit" name="submitBtn" class="btn btn-primary btn-lg btn-block">Sign in</button>
      
                <div class="divider d-flex align-items-center my-4">
                  <p class="text-center fw-bold mx-3 mb-0 text-muted"></p>
                </div>
      
                
      
              </form>
            </div>
          </div>
        </div>
      </section>





</body>
</html>