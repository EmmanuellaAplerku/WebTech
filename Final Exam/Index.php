<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
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
      <a class="nav-link" href="login.php"><h3>Log In</h3></a>
        </li>
       
    </ul>
    </div>
    </nav>
<!-- Background video -->
<div class="video-background-holder">
  <div class="video-background-overlay"></div>
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
      <source src="Indexvideo.mp4" type="video/mp4">
    </video><!-- end video source-->
    <div class="video-background-content container h-100">
      <div class="d-flex h-100 text-center align-items-center">
        <div class="w-100 text-white">
          <h1 class="display-4">The Experience Hub</h1>
            <p class="lead mb-0">Experience in the world of work made easier</p>
            <p class="lead">
              <a href="Sign Up.php" class="btn btn-light">Sign Up</a>            
            </p>
        </div>
      </div><!-- end text/button area -->
    </div>
  </div><!-- end video-background-overlay-->
</div>  

</body>
</html>