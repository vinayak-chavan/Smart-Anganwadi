<!DOCTYPE html>
<html lang="en">
<head>
  <title> Smart Anganwadi</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">\
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
  body 
  {
    font: 400 15px Lato, sans-serif;
    line-height: 1.8;
    color: #818181;
  }
  h2 {
    font-size: 24px;
    text-transform: uppercase;
    color: #303030;
    font-weight: 600;
    margin-bottom: 30px;
  }
  h4 {
    font-size: 19px;
    line-height: 1.375em;
    color: #303030;
    font-weight: 400;
    margin-bottom: 30px;
  }  
  .jumbotron {
    background-color: pink;
    background-image: url(C:\xampp\htdocs\Index\php\image.jpg);
    color: #fff;
    padding: 100px 25px;
    font-family: Montserrat, sans-serif;
  }
  .container-fluid {
    padding: 60px 50px;
  }
  .bg-grey {
    background-color: powderblue;
  }
  .logo-small {
    color: silver;
    font-size: 50px;
  }
  .logo {
    color: grey;
    font-size: 200px;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail img {
    width: 100%;
    height: 100%;
    margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
    background-image: none;
    color: #f4511e;
  }
  .carousel-indicators li {
    border-color: #f4511e;
  }
  .carousel-indicators li.active {
    background-color: #f4511e;
  }
  .item h4 {
    font-size: 19px;
    line-height: 1.375em;
    font-weight: 400;
    font-style: italic;
    margin: 70px 0;
  }
  .item span {
    font-style: normal;
  }
  .panel {
    border: 1px solid #f4511e; 
    border-radius:0 !important;
    transition: box-shadow 0.5s;
  }
  .panel:hover {
    box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
    border: 1px solid #f4511e;
    background-color: #fff !important;
    color: #f4511e;
  }
  .panel-heading {
    color: #fff !important;
    background-color: #f4511e !important;
    padding: 25px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
  }
  .panel-footer {
    background-color: white !important;
  }
  .panel-footer h3 {
    font-size: 32px;
  }
  .panel-footer h4 {
    color: #aaa;
    font-size: 14px;
  }
  .panel-footer .btn {
    margin: 15px 0;
    background-color: #f4511e;
    color: #fff;
  }
  .navbar {
    margin-bottom: 0;
    background-color: powderblue;
    z-index: 9999;
    border: 0;
    font-size: 12px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
    font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
    color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
    color: #f4511e !important;
    background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
    color: #fff !important;
  }
  footer .glyphicon {
    font-size: 20px;
    margin-bottom: 20px;
    color: #f4511e;
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
        width: 100%;
        margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
        font-size: 150px;
    }
  }
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">CHILD CO</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#services">ADMIN</a></li>
        <li><a href="#portfolio">USER</a></li>
        <li><a href="#contact">CONTACT</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1>Smart Anganwadi </h1> 
</div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>Objective Of Anganvaadi</h2><br>
      <h4>The key objectives of this scheme are to improve the nutritional and health status of children in the age group 0–6 years; to lay the foundation for proper psychological, physical and social development of the child; to reduce the incidence of mortality, morbidity, malnutrition and school dropout to achieve effective ...</h4><br>
      <p>Anganwadi is a type of rural child care centre in India. They were started by the Indian government in 1975 as part of the Integrated Child Development Services program to combat child hunger and malnutrition. Anganwadi means "courtyard shelter" in Indian languages. ... It is a part of the Indian public health care system.</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-signal logo"></span>
    </div>
  </div>
</div>

<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo"></span>
    </div>
    <div class="col-sm-8">
      <h2>Our Values</h2><br>
      <h4><strong>MISSION:</strong> To be a nodal national technical body on nutrition policy, co-ordination, advocacy, education and dissemination to facilitate effective actions to meet Indias nutrition challenges.</h4><br>
      <h4><strong>VISION:</strong>Converging nutrition related activities through the follow up of policy issues on nutrition as envisaged in the National Nutrition Policy and identified in the National Plan of Action on Nutrition.Generating nutrition awareness amongst programme functionaries and masses to improve their nutrition and dietary habits.</h4>
    </div>
  </div>
</div>
<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
  <h2>ADMIN</h2>
  <br>
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-user logo-small"></span>
      <a href="admin_login.php"><h4>LOGIN</h4></a>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-glass logo-small"></span>
      <a href="foodtype.php"><h4>FOOD SYSTEM</h4></a>
    </div>
    <div class="col-sm-4">
            <span class="glyphicon glyphicon-flag logo-small"></span>
      <a href="afeedback.php"><h4 style="color:#303030;">FEEDBACK</h4></a>
    </div>
  </div>
</div>

<!-- Container (Services Section) -->
<div id="portfolio" class="container-fluid text-center">
  <h2>USER</h2>
  <br>
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-lock logo-small"></span>
      <a href="user.php"><h4>USER REGISTRATION</h4></a>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-user logo-small"></span>
      <a href="u_login.php"><h4>VACANCIES</h4></a>
    </div>
    <div class="col-sm-4">
            <span class="glyphicon glyphicon-flag logo-small"></span>
      <a href="afeedback.php"><h4 style="color:#303030;">FEEDBACK</h4></a>
    </div>
  </div>
  <br><br>
  </div>
</div>

  <h2>What our customers say</h2>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>"Nice purpose for Growing child"<br><span>Pradip Prajapati..</span></h4>
      </div>
      <div class="item">
        <h4>"One word... WOW!!"<br><span>Jay patel..</span></h4>
      </div>
      <div class="item">
        <h4>"Healthy Child Healthy India "<br><span>vinayak chavan..</span></h4>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-user"></span> Pradip Prajapati</p>
      <p><span class="glyphicon glyphicon-user"></span> Vinayak Chavan </p>
      <p><span class="glyphicon glyphicon-user"></span> Jay Patel</p>
      <p><span class="glyphicon glyphicon-user"></span> Darshan Tank</p>

      <p><span class="glyphicon glyphicon-map-marker"></span> Gujrat, INDIA</p>
      <p><span class="glyphicon glyphicon-phone"></span> +91 1234567890</p>
      <p><span class="glyphicon glyphicon-envelope"></span> anganvaadi@gmail.com</p>
    </div>
    <div class="col-sm-7">
      <div class="row">
        <div class="col-sm-6 form-group">
          <form action="athanksnote.php">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5" required></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
        <input class="btn btn-default pull-right" type="submit" value="Send">
        </div>
      </div>
    </div>
  </div>
</div>
</form>

<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
</footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== ""){
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>

</body>
</html>
