<!--Source for carousel template:https://youtu.be/Thw33qJ5DXo-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success Stories</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link href="website_styles.css" rel="stylesheet" type="text/css">

<body>
    <!--Creating a navbar -->
    <nav class = "navbar navbar-light bg-transparent">
    <div class="container-fluid">
      <div class="navbar-header">
          <a class="navbar-brand" href="#">
                <img src="logo.png" alt="" width="120" height="80">
                <h1 class="webname">The Experience Hub</h1>
          </a>
      </div>
  <ul class="nav justify-content-end">
        <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="client companies.php">Client Companies</a>
        </li>
        <li class="nav-item">
      <a class="nav-link" href="Partner Universities.php">Partner Universities</a>
        </li>
        <li class="nav-item">
      <a class="nav-link" href="Success stories.php">Success Stories</a>
        </li>
        <li class="nav-item">
      <a class="nav-link" href="application_form.php">Apply Now</a>
        </li>
    </ul>
    </div>
    </nav>


    <!--Image Slider --->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Welcome To Scheduler</h5>
          <p>Efficient And Fast Way To Cater For Patients</p>
          <a class="btn btn-outline-light btn-lg" href="#services">Get Started</a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="ridge8.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Next Patient To Room 6</h5>
          <p></p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="ridge7.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Save Time And Speed Up Process</h5>
          <p>Ordeliness improves Effectiveness.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
 <!---End of Image Slider --->



<!-- Site footer -->
<footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-4">
            <h5>Contact Us</h5>
            <p class="text-justify"><h6>HEADQUARTERS</h6>
            Boundary Road, East Legon<br><br>
            <h6>POSTAL ADDRESS</h6>TEH, BT 301 C2,
            Tema-Ghana<br><br>
            <h6>PHONE:</h6> +233-558-266-422 |+233-262-363-585<br><br>
            <h6>EMAIL:</h6> info@theexperiencehubghana.com<br>
          </p>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>COMPANIES</h6>
            <ul class="footer-links">
              <li><a href="client companies.php">KPMG</a></li>
              <li><a href="client companies.php">DATABANK</a></li>
              <li><a href="client companies.php">CARGILL GHANA</a></li>
              <li><a href="client companies.php">NESTLE GHANA</a></li>
              <li><a href="client companies.php">GENKEY</a></li>
            </ul>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Quick Links</h6>
            <ul class="footer-links">
              <li><a href="Exam_index.php">Home</a></li>
              <li><a href="client companies.php">Client Companies</a></li>
              <li><a href="Partner Universities.php">Partner Universities</a></li>
              <li><a href="Success stories.php">Success Stories</a></li>
              <li><a href="Sign Up.php">Sign Up</a></li>
              <li><a href="#">Apply Now</a></li>

            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2021 All Rights Reserved by 
         <a href="#">THE EXPERIENCE HUB</a>.
            </p>
          </div>
</footer>

</body>
</html>