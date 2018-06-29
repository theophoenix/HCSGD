<?php 

header('Content-Type: text/html; charset=utf-8');
include('form_process.php');

?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> <!-- Responsive viewport meta tag to ensure proper rendering -->
    <meta name="keywords" content="Hunter, Centre, for, Sex, and, Gender, Diversity, Alliance, LGBT, LGBTQ, LGBTQI, Lesbian, Gay, Bisexual, Transgender, Trans, Transsexual, Queer, Questioning, Intersex, Resources, Newcastle, Australia, ACON">
    <meta name="description" content=""> <!-- Website description - To be updated -->
    <meta name="author" content="Theodore Johnson">
    <link rel="icon" href=""> <!-- Favicon - To be updated -->

    <title>Contact Us - Hunter Gender Alliance</title>

    <link href="css/bootstrap-reboot-4.1.1.css" rel="stylesheet">
    <link href="css/bootstrap-4.1.1.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
  </head>

  <body>
    <!-- Navbar -->
    <header class="navbar navbar-expand-md navbar-dark bg-green">
      <!-- Logo -->
      <a class="navbar-brand" href="#"><img id="nav-img" src="images/hga-logo.png"></a>

      <!-- Navigation menu button for when resolution is less than 768px wide -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Navbar left -->
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.html">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Resources</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="resources-for-community-members.html">Resources for Community Members</a>
              <a class="dropdown-item" href="resources-for-health-professionals.html">Resources for Health Professionals</a>
              <a class="dropdown-item" href="resources-for-allies.html">Resources for Allies</a>
            </div>
          </li>
          <!--<li class="nav-item">
            <a class="nav-link" href="#">News</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Events</a>
          </li>-->
          <li class="nav-item">
            <a class="nav-link" href="help.html">Help</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">About HGA</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="contact.php">Contact Us<span class="sr-only">(current)</span></a>
          </li>
        </ul>

        <!-- Navbar right -->
        <!-- Facebook nav item for later use when we have a Facebook page up and running
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fab fa-facebook"></i></a>
          </li>
        </ul>-->
      </div>
    </header>

    <!-- Main content -->
    <main class="bd-masthead" role="main">
      <div class="container">
        <div class="row mb-2">
          <div class="col message warning-message">
            <div class="d-inline-block align-top pt-1 pr-2 pb-3">
              <i class="fas fa-exclamation-triangle text-danger"></i> <!-- Warning icon -->
            </div>
            <div class="d-inline-block align-middle">
              <b>Work in progress!</b> <br>
              More detailed documentation is coming soon.
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col message information-message">
            <div class="d-inline-block align-top pt-1 pr-2 pb-3">
              <i class="fas fa-info-circle text-primary"></i> <!-- Information icon -->
            </div>
            <div class="d-inline-block align-middle">
              <b>Work in progress!</b> <br>
              More detailed documentation is coming soon.
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col">
            <div class="form-area">  
              <form role="form" action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
                <br style="clear: both">
                <h3 style="margin-bottom: 25px; text-align: center;">Contact Form</h3>
                <div class="form-group">
                  <input id="name" class="form-control" type="text" name="name" value="<?= $name ?>" placeholder="Name">
                  <span class="error"><?= $name_error ?></span>
                </div>
                <div class="form-group">
                  <input id="email" class="form-control" type="text" name="email" value="<?= $email ?>" placeholder="Email">
                  <span class="error"><?= $email_error ?></span>
                </div>
                <div class="form-group">
                  <textarea id="message" class="form-control" type="text" name="message" value="<?= $message ?>" placeholder="Message"></textarea>
                </div>
                <button id="submit" class="btn btn-outline-primary" type="submit" name="submit">Submit Form</button>
                <div class="success"><?= $success ?></div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </main>

    <!-- Sticky footer -->
    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col">
            <p class="text-center">
              Hunter Gender Alliance
            </p>
            <p class="text-center text-muted text-tiny">
              Operating as Hunter Centre for Sex and Gender Diversity <br>
              ABN 14 303 735 103
            </p>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col" id="footer-charity-logo">
            <img src="images/registered-charity-logo.png" id="img-charity-logo">
          </div>
        </div>
      </div>
    </footer>

    <!-- jQuery first, then Popper.js, then Bootstrap.js -->
    <!-- (Placed at the end of the document so the pages load faster) -->
    <script src="scripts/jquery-3.3.1.js"></script>
    <script src="scripts/popper-1.14.3.js"></script>
    <script src="scripts/bootstrap-4.1.1.js"></script>
    <script src="scripts/fontawesome-all-5.0.13.js" defer></script>
  
  </body>
</html>