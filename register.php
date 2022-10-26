<!doctype html>
<html lang="en">

<head>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: OnePage - v4.8.1
  * Template URL: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <title>Laptop.com</title>

  <!-- Custom styles for this template -->
  <link href="assets/carousel.css" rel="stylesheet">
</head>

<body>
  <section class="vh-100">
    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5">
          <img src="img/logo.png" class="img-fluid" alt="Sample image">
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
          <form method="POST" action="cekDaftar.php">
            <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
              <?php
              include 'navbar.php';
              ?>
              <p class="lead fw-normal mb-0 me-3"><b>Sign Up</b></p>
            </div>
            <hr>
             <!-- Username input -->
             <div class="form-outline mb-4">
              <input type="username" id="username" name="username" required class="form-control form-control-lg" placeholder="Enter a valid username" />
              <label class="form-label" for="form3Example3">Username address</label>
            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="email" id="email" name="email" required class="form-control form-control-lg" placeholder="Enter a valid email address" />
              <label class="form-label" for="form3Example3">Email address</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-3">
              <input type="password" id="password" name="password" required class="form-control form-control-lg" placeholder="Enter password" />
              <label class="form-label" for="form3Example4">Password</label>
            </div>
            <div class="text-center text-lg-start mt-4 pt-2">
              <button type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Sign Up</button>
            </div>

          </form>
        </div>
      </div>
    </div>
  </section>
</body>

</html>