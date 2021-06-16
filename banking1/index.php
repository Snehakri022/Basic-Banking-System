<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <title>Basic Banking System</title>
</head>
<body>
<?php
include 'navbar.php';
?>
<!-- ======= Hero Section ======= -->
<section id="hero" class="clearfix">
  <div class="container" data-aos="fade-up">
    <div class="hero-img" data-aos="zoom-out" data-aos-delay="200">
      <img src="img/hero-img.svg" alt="" class="img-fluid">
    </div>
    <div class="hero-info" data-aos="zoom-in" data-aos-delay="100">
      <h2>Welcome to the<br><span>Canara Bank</span><br>Services!</h2>
    </div>
  </div>
</section>
<!-- End Hero Section -->

<!-- ======= Notice Section ======= -->
<section id="services" class="section-bg">
  <div class="container" data-aos="fade-up">
    <header class="section-header text-center">
      <h3>Notice</h3>
      <p>Here are some latest updates from CANARA Bank. Read this notices carefully</p>
    </header>
    <div class="row justify-content-center">
      <div class="col-md-6 col-lg-5" data-aos="zoom-in" data-aos-delay="100">
      <div class="box">
          <div class="icon"><i class="bi bi-briefcase" style="color: #ff689b;"></i></div>
              <h4 class="title"><a href="">Beware of frauds</a></h4>
              <p class="description">CANARA bank never asks for your Card/PIN/OTP/CVV details on phone, message or email. Please do not click on links received on your email or mobile asking your Bank/Card details. </p>
          </div>
      </div>
      <div class="col-md-6 col-lg-5" data-aos="zoom-in" data-aos-delay="200">
      <div class="box">
              <div class="icon"><i class="bi bi-card-checklist" style="color: #e9bf06;"></i></div>
              <h4 class="title"><a href="">PM CARES</a></h4>
              <p class="description">  Dear Customer, if you have donated for PM CARES through Canara Internet Banking, you can download the Receipt from PMCares portal of govt. using the reference number available with you. </p>
      </div>
      </div>
      <div class="col-md-6 col-lg-5" data-aos="zoom-in" data-aos-delay="100">
      <div class="box">
      <div class="icon"><i class="bi bi-bar-chart" style="color: #3fcdc7;"></i></div>
              <h4 class="title"><a href="">CANARA BANKING</a></h4>
              <p class="description"> Have you tried our new simplified and intuitive business banking platform? Log in to canarabank to avail business banking services</p>
      </div>
      </div>
      <div class="col-md-6 col-lg-5" data-aos="zoom-in" data-aos-delay="200">
      <div class="box">
      <div class="icon"><i class="bi bi-binoculars" style="color:#41cf2e;"></i></div>
              <h4 class="title"><a href="">Change of address</a></h4>
              <p class="description">To change your current mailing address linked with your account, you need to submit self attested scanned copy of your address proof.
              </p>
      </div>
      </div>
</section>
<!-- End Services Section -->

<!-- Activity section -->
<div class="container p-4">
  <div class="row activity text-center">
    <div class="col-md act">
        <img src="img/user.png" class="img-fluid p-3" style="height: 220px;">
        <br>
        <a href="createuser.php"><button type="button" class="btn btn-warning">Create a User</button></a>
    </div>
    <div class="col-md act">
        <img src="img/transfer.png" class="img-fluid p-3" style="height: 220px;">
        <br>
        <a href="transfermoney.php"><button type="button" class="btn btn-warning">Make a Transaction</button></a>
    </div>
    <div class="col-md act">
        <img src="img/history.png" class="img-fluid p-3" style="height: 220px;">
        <br>
        <a href="transactionhistory.php"><button type="button" class="btn btn-warning">Transaction History</button></a>
    </div>       
  </div>
</div>
<!-- End Activity section -->

<!-- Footer -->
<footer class="footer mt-auto py-3 bg-dark">
  <div class="container">
    <span class="text-light">&copy 2021. Made by <b>SNEHA KUMARI</b> <br> Sneha Kumari Foundation</span>
  </div>
</footer>
<!-- End Footer -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>