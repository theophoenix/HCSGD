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
    <header class="navbar navbar-expand-md navbar-dark">
      <!-- Logo -->
      <a class="navbar-brand" href="index.html"><img id="nav-img" src="images/new-hga-logo.svg"></a>

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
          <!--<li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Resources</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="resources-for-community-members.html">Resources for Community Members</a>
              <a class="dropdown-item" href="resources-for-health-professionals.html">Resources for Health Professionals</a>
              <a class="dropdown-item" href="resources-for-allies.html">Resources for Allies</a>
            </div>
          </li>-->
          <li class="nav-item">
            <a class="nav-link" href="resources.html">Resources</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="donate.html">Donate</a>
          </li>
          <!--<li class="nav-item">
            <a class="nav-link" href="#">News</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Events</a>
          </li>-->
          <!--<li class="nav-item">
            <a class="nav-link" href="help.html">Help</a>
          </li>-->
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
      <div class="container container-md">
        <!--
        <div class="row alert-message-box">
          <div class="col warning-message">
            <div class="align-top alert-message-icon">
              <i class="fas fa-exclamation-triangle text-danger"></i> <!-- Warning icon
            </div>
            <div class="align-middle alert-message-text">
              <h3>Where can I get help?</h3>
              <p>Please call Emergency Services (000) or the Suicide Callback Service (1300-659-467) if you or someone you know is at immediate risk of self-harm or suicide.</p>
              <p>For 24/7 crisis support, call Lifeline (13-11-14) for all ages or Kids Helpline (1800-55-1800) for anyone 25 and under.</p>
              <p>If you ever feel unsafe at home or work, contact <a href="https://eheadspace.org.au">Headspace</a> (1800-650-890) for anyone 25 and under or the <abbr title="Lesbian, Gay, Bisexual and Transgender">LGBT+</abbr> specific <a href="https://qlife.org.au">QLife</a> (1800-184-527) for all ages.</p>
            </div>
          </div>
        </div>
        -->

        <div class="row mb-5">
          <div class="col">
            <div class="alert alert-danger">
              <h3>Where can I get help?</h3>
              <p>Please call Emergency Services (000) or the Suicide Callback Service (1300-659-467) if you or someone you know is at immediate risk of self-harm or suicide.</p>
              <p>For 24/7 crisis support, call Lifeline (13-11-14) for all ages or Kids Helpline (1800-55-1800) for anyone 25 and under.</p>
              <p class="mb-0">If you ever feel unsafe at home or work, contact <a href="https://eheadspace.org.au">Headspace</a> (1800-650-890) for anyone 25 and under or the <abbr title="Lesbian, Gay, Bisexual and Transgender">LGBT+</abbr> specific <a href="https://qlife.org.au">QLife</a> (1800-184-527) for all ages.</p>
            </div>
          </div>
        </div>

        <!--
        <div class="row alert-message-box">
          <div class="col information-message">
            <div class="align-top alert-message-icon">
              <i class="fas fa-info-circle text-primary"></i> Information icon
            </div>
            <div class="align-middle alert-message-text">
              <h3>Disclaimer</h3>
              <p>When you contact us, the opinions expressed in the reply are those of the author only and do not represent the official view of Hunter Gender Alliance unless explicitly stated.</p>
            </div>
          </div>
        </div>
        -->

        <div class="row">
          <div class="col">
            <div class="form-area">
              <form class="mb-0" role="form" action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
                <h3 class="text-center mb-4">Get in touch with us,<br>
                                             we're here to help!</h3>
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
                <div class="d-flex mb-3">
                  <button id="submit" class="btn btn-outline-primary mx-auto" type="submit" name="submit">Submit</button>
                </div>
                <div class="success"><?= $success ?></div>
                <div class="alert alert-warning">
                  <p class="text-center text-tiny mb-0">Disclaimer: When you contact us, the opinions expressed in the reply are those of the author only and do not represent the official view of Hunter Gender Alliance unless explicitly stated.</p>
                </div>
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
    <script src="scripts/fontawesome-all-5.1.0.js" defer></script>

  </body>
</html>