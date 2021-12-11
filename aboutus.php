<?php

  require('bluetravelsdb_cred.php');
  $conn = new mysqli(SERVER, USERNAME, PASSWD, DATABASE);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }    
    
    if(isset($_POST['submitBtn'])){
    
    $title=$_POST['name'];
    $email=$_POST['email'];
    $body=$_POST['message'];
    
    $sql= "INSERT INTO Feedback VALUES('$title','$email','$body') ";
    
    $result=mysqli_query($conn,$sql);
    
    if($result){
        echo "Messagse has been recorded";
        header( "refresh:1.2;url=index.php" );
        
        exit();
    }
    else{
        echo " Message has not been recorded";
        exit();
    }
    
     
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>BLUE TRAVEL AND TOUR</title>
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
.btn {
    display: inline-block;
    padding: 6px 12px;
    margin-bottom: 0;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.42857143;
    text-align: center;
    border: 1px solid transparent;
    border-radius: 4px;
    border-radius: 3cm;
    margin:15px 0px 0px;
    background:#6ab446;
}
.contact-form .contact{
    text-align: center;
    background-image: url(contact-bg.jpg);
    margin:0 auto !important;
}
.contact{
    margin: 0 auto !important;
}
.bi{
    font-size: 2rem !important;
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
    
    <h2>Contact Information</h2>
     <p> <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-phone" viewBox="0 0 16 16">
        <path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z"/>
        <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
      </svg> +233 247891044/ +233 207891044 
      
      <br> <br> 

        <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
          </svg> Bluetravelagency@info.com
        
    </p>
</div>
<br>
<br>
<section class="contact-form">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2>Leave us a message</h2>
                </div>
            </div>
            <div class="col-lg-12">
                <form  class="contact" name="contact" id="contact" method="POST">
                    <div class="row">
                        <div class="col-md-6 ">
                            <fieldset>
                                <input name="name" type="text" class="form-control" id="name" placeholder="Your name..." required="">
                            </fieldset>
                        </div>
                        <div class="col-md-6">
                            <fieldset>
                                <input name="email" type="text" class="form-control" id="email" placeholder="Your email..." required="">
                            </fieldset>
                        </div>
                        <div class="col-md-12">
                            <fieldset>
                                <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your message..." required=""></textarea>
                            </fieldset>
                        </div>
                        <div class="col-md-12">
                            <fieldset>
                                <button type="submit" name="submitBtn" id="form-submit" class="btn">Submit Your Message</button>
                            </fieldset>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <br> <br>
</section>
    <section class="map">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d71000.90181688966!2d-0.23200332330528836!3d5.562960476953826!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdf9084b2b7a773%3A0xbed14ed8650e2dd3!2sAccra!5e0!3m2!1sen!2sgh!4v1638332579477!5m2!1sen!2sgh" width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen loading="eager"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
       
<br>
    <p>Copyright &copy; 2021 Blue Travel Agency</p>
</body>
</html>