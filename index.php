<!DOCTYPE html>
<html lang="en">
    <head>
        <title>BLUE TRAVEL AND TOUR</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
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
.cardscities {
  /* Add shadows to create the "card" effect */
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  border-radius: 5px; /* 5px rounded corners */
}

/* On mouse-over, add a deeper shadow */
.cardscities:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}
/* Add some padding inside the card container */
.container {
  padding: 2px 16px;
}
img {
    height: 75%;
    max-height: 80%;
    width: 30%;
}

.footer_area {
    position: relative;
    z-index: 1;
    overflow: hidden;
webkit-box-shadow: 0 8px 48px 8px rgba(47, 91, 234, 0.175);
    box-shadow: 0 8px 48px 8px rgba(47, 91, 234, 0.175);
    padding:60px;
}
.footer_area .row {
    margin-left: -25px;
    margin-right: -25px;
}
.card{
    height: 90%;
    text-align: center;
    margin-top: 6rem;
}

.cities{
    height: 28.125rem;
}

.footer_area .row .col,
.footer_area .row .col-1,
.footer_area .row .col-10,
.footer_area .row .col-11,
.footer_area .row .col-12,
.footer_area .row .col-2,
.footer_area .row .col-3,
.footer_area .row .col-4,
.footer_area .row .col-5,
.footer_area .row .col-6,
.footer_area .row .col-7,
.footer_area .row .col-8,
.footer_area .row .col-9,
.footer_area .row .col-auto,
.footer_area .row .col-lg,
.footer_area .row .col-lg-1,
.footer_area .row .col-lg-10,
.footer_area .row .col-lg-11,
.footer_area .row .col-lg-12,
.footer_area .row .col-lg-2,
.footer_area .row .col-lg-3,
.footer_area .row .col-lg-4,
.footer_area .row .col-lg-5,
.footer_area .row .col-lg-6,
.footer_area .row .col-lg-7,
.footer_area .row .col-lg-8,
.footer_area .row .col-lg-9,
.footer_area .row .col-lg-auto,
.footer_area .row .col-md,
.footer_area .row .col-md-1,
.footer_area .row .col-md-10,
.footer_area .row .col-md-11,
.footer_area .row .col-md-12,
.footer_area .row .col-md-2,
.footer_area .row .col-md-3,
.footer_area .row .col-md-4,
.footer_area .row .col-md-5,
.footer_area .row .col-md-6,
.footer_area .row .col-md-7,
.footer_area .row .col-md-8,
.footer_area .row .col-md-9,
.footer_area .row .col-md-auto,
.footer_area .row .col-sm,
.footer_area .row .col-sm-1,
.footer_area .row .col-sm-10,
.footer_area .row .col-sm-11,
.footer_area .row .col-sm-12,
.footer_area .row .col-sm-2,
.footer_area .row .col-sm-3,
.footer_area .row .col-sm-4,
.footer_area .row .col-sm-5,
.footer_area .row .col-sm-6,
.footer_area .row .col-sm-7,
.footer_area .row .col-sm-8,
.footer_area .row .col-sm-9,
.footer_area .row .col-sm-auto,
.footer_area .row .col-xl,
.footer_area .row .col-xl-1,
.footer_area .row .col-xl-10,
.footer_area .row .col-xl-11,
.footer_area .row .col-xl-12,
.footer_area .row .col-xl-2,
.footer_area .row .col-xl-3,
.footer_area .row .col-xl-4,
.footer_area .row .col-xl-5,
.footer_area .row .col-xl-6,
.footer_area .row .col-xl-7,
.footer_area .row .col-xl-8,
.footer_area .row .col-xl-9,
.footer_area .row .col-xl-auto {
    padding-right: 25px;
    padding-left: 25px;
}

.single-footer-widget {
    position: relative;
    z-index: 1;
}
.single-footer-widget .copywrite-text a {
    color: #747794;
    font-size: 1rem;
}
.single-footer-widget .copywrite-text a:hover,
.single-footer-widget .copywrite-text a:focus {
    color: #3f43fd;
}
.single-footer-widget .widget-title {
    margin-bottom: 1.5rem;
}
.single-footer-widget .footer_menu li a {
    color: #747794;
    margin-bottom: 1rem;
    display: block;
    font-size: 1rem;
}
.single-footer-widget .footer_menu li a:hover,
.single-footer-widget .footer_menu li a:focus {
    color: #3f43fd;
}
.single-footer-widget .footer_menu li:last-child a {
    margin-bottom: 0;
}

.footer_social_area {
    position: relative;
    z-index: 1;
}
.footer_social_area a {
    border-radius: 50%;
    height: 40px;
    text-align: center;
    width: 40px;
    display: inline-block;
    background-color: #f5f5ff;
    line-height: 40px;
    -webkit-box-shadow: none;
    box-shadow: none;
    margin-right: 10px;
}
.footer_social_area a i {
    line-height: 36px;
}
.footer_social_area a:hover,
.footer_social_area a:focus {
    color: #ffffff;
}

@-webkit-keyframes bi-cycle {
    0% {
        left: 0;
    }
    100% {
        left: 100%;
    }
}

@keyframes bi-cycle {
    0% {
        left: 0;
    }
    100% {
        left: 100%;
    }
}
ol li, ul li {
    list-style: none;
}

ol, ul {
    margin: 0;
    padding: 0;
}

h1,h6{
    text-align: center;
}
/* .foodcards{
    display: flex;
    justify-content: space-evenly;
    margin: 0 2rem;
     
} */
.section-heading{
    text-align: center;
}
.search_form{
text-align: center;

}
.btn{
    
    display: inline-block;
    /* padding: 6px 12px; */
    margin-bottom: 0;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.42857143;
    text-decoration: #fff;
    background:#6ab446;
    margin:15px 0px 0px;
    border-radius: 3cm;
    
    
}
.bi{
  font-size: 1000px !important;
  width: 5%; height: auto;
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
        
        <h1>WELCOME TO BLUE TRAVEL AND TOUR </h1>
        <h6>We help you buy tickets within your budget</h6>

        <div class="search_form">
            <form name="search_form" action="tickets.php" method="post">
                <h4>Check availability for <strong>direction</strong>:</h4>

                <label for="from">From:</label>
                <select required name='from' >
                    <option value="">Select a location...</option>
                    <option value="Ghana">Ghana</option>                             
                </select>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-right" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1 11.5a.5.5 0 0 0 .5.5h11.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 11H1.5a.5.5 0 0 0-.5.5zm14-7a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H14.5a.5.5 0 0 1 .5.5z"/>
                </svg>
                <label for="to">To:</label>
                <select required name='to'>
                    
                    <option value="">Select a location...</option>
                    <option value="France">France</option>
                    <option value="Switzerland">Switzerland</option>
                    <option value="Sweden">Sweden</option>
                    <option value="Germany">Germany</option>
                    <option value="Italy">Italy</option>
                    <option value="Grece">Grece</option>
                    <option value="USA">USA</option>
                    <option value="Singapore">Spain</option>
                    <option value="Britain">Britain</option>
                    <option value="Turkey">Turkey</option>
                    <option value="Japan">Japan</option>
                </select>
                <br>

                <label>Depature Date </label>
                <input type="date" name="departuredate" required="" >

                <label>Return Date </label>
                <input type="date" name="returndate" required="">
                <br>

                <!-- <label>How many people</label>
                <input required type="number" required="">  -->
                <br>
                <label>Select Class:</label>
                <select required name='class'>      
                  <option value="">Select a location...</option>
                  <option value="Fist">First</option>
                  <option value="Business">Business</option>
                  <option value="Economy">Economy</option>
                </select>     
                <br>
                <button type="submit" name="searchbtn" id="form-submit" class="btn" required="">Buy</button>
            </form>
            <br>

        </div>
        <!-- ticket Date validation -->
        <script>
        function validateForm() {
          let x = document.forms["search_form"]["departuredate,returndate"].value;
          if (x == "") {
            alert("Must be filled out");
            return false;
          }
        }
      </script>
        <div class="col-md-12">
            <div class="section-heading">
                <h2>Experience the world around you once again with these epic destinations</h2>
            </div>
        </div>
        
        <div class = "foodcards"> 
            <div class="row row-cols-1 row-cols-md-3 g-4">
           <div class="cities col-lg-4 col-md-6">
             <div class="card">
               <img src="newyork.jpg" class="card-img-top" alt="...">
               <div class="card-body">
                 <h5 class="card-title">New York, USA</h5>
                 <p class="card-text">New York in the fall before the Snow</p>
                 
               </div>
             </div>
           </div>
           <div class="cities col-lg-4 col-md-6">
                <div class="card">
                    <img src="endinburgh.jpg"class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Edinburgh, Scotland</h5>
                            <p class="card-text">Chilly Edinburgh doing its thing </p>
                 
                        </div>
                </div>
           </div>
           <div class="cities col-lg-4 col-md-6">
             <div class="card">
               <img src="amsterdam2.jpg"  class="card-img-top" alt="...">
               <div class="card-body">
                 <h5 class="card-title">Amsterdam, Netherlands</h5>
                 <p class="card-text">The Venice of the North</p>
                 
               </div>
             </div>
           </div>
           <div class="cities col-lg-4 col-md-6">
             <div class="card">
               <img src="greece.jpg"class="card-img-top" alt="...">
               <div class="card-body">
                 <h5 class="card-title">Santorini, Greece</h5>
                 <p class="card-text">Escape to Santorini, come back Fresh/Renewed</p>
                 
               </div>
             </div>
           </div>
           <div class="cities col-lg-4 col-md-6">
            <div class="card">
              <img src="jap4.jpg"class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Japan</h5>
                    <p class="card-text">Meeting Culture halfway:Explore Culture</p>
                
                 </div>
            </div>
          </div>
          <div class="cities col-lg-4 col-md-6">
            <div class="card">
              <img src="switz2.jpg"class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Switzerland</h5>
                    <p class="card-text">Holiday your way: Experience a magical Christmas</p>
                
                 </div>
            </div>
          </div>
          <div class="cities col-lg-4 col-md-6">
            <div class="card">
              <img src="canada.jpg"class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Canada</h5>
                    <p class="card-text">Here comes the Fall</p>
                
                 </div>
            </div>
          </div>
          <div class="cities col-lg-4 col-md-6">
            <div class="card">
              <img src="acc2.webp"class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Accra, Ghana</h5>
                    <p class="card-text">Ibiza of Africa</p>
                
                 </div>
            </div>
          </div>

        </div>
        </div>
         <br>
         <br>
         <br>

    </body>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <footer class="footer_area section_padding_130_0">
        <div class="container">
          <div class="row">
            <!-- Single Widget-->
            <div class="col-12 col-sm-6 col-lg-4">
              <div class="single-footer-widget section_padding_0_130">
                <!-- Footer Logo-->
                <div class="footer-logo mb-3"></div>
                <p>Blue Travel Agency</p>
                
                <!-- Footer Social Area-->
                <div class="footer_social_area"><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Pinterest"><i class="fa fa-pinterest"></i></a><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Skype"><i class="fa fa-skype"></i></a><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
                
                </div>
              </div>
            </div>
            <!-- Single Widget-->
            <div class="col-12 col-sm-6 col-lg">
              <div class="single-footer-widget section_padding_0_130">
                <!-- Widget Title-->
                <h5 class="widget-title">About</h5>
                <!-- Footer Menu-->
                <div class="footer_menu">
                  <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Corporate Sale</a></li>
                    <li><a href="#">Terms &amp; Policy</a></li>
                    <li><a href="#">Community</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- Single Widget-->
            <div class="col-12 col-sm-6 col-lg">
              <div class="single-footer-widget section_padding_0_130">
                <!-- Widget Title-->
                <h5 class="widget-title">Support</h5>
                <!-- Footer Menu-->
                <div class="footer_menu">
                  <ul>
                    <li><a href="#">Help</a></li>
                    <li><a href="#">Support</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Term &amp; Conditions</a></li>
                    <li><a href="#">Help &amp; Support</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- Single Widget-->
            <div class="col-12 col-sm-6 col-lg">
              <div class="single-footer-widget section_padding_0_130">
                <!-- Widget Title-->
                <h5 class="widget-title">Contact</h5>
                <!-- Footer Menu-->
                <div class="footer_menu">
                  <ul>
                    <li><a href="#">Call Centre</a></li>
                    <li><a href="#">Join Us</a></li>
                    <li><a href="#">Term &amp; Conditions</a></li>
                    <li><a href="#">Help Center</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>

	<!-- ctrl+k+c to comment in html shortcut -->
</html>
