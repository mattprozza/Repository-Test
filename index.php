<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Matt Test">
  <meta name="author" content="Matt <developer@matt.com.au>">
  <title>Matt - Work Experience</title>
  <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,700" rel="stylesheet">
  <link href="//use.fontawesome.com/releases/v5.0.13/css/all.css" rel="stylesheet">
  <link href="assets/bower_components/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/bower_components/toastr/toastr.min.css" rel="stylesheet">
  <link href="assets/bower_components/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
  <link href="assets/css/dist/style.css?random=<?php echo time();?>" rel="stylesheet">

  <script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
  <script src="assets/bower_components/popper.js/dist/umd/popper.min.js"></script>
  <script src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="assets/bower_components/toastr/toastr.min.js"></script>
  <script src="assets/bower_components/moment/min/moment.min.js"></script>
  <script src="assets/bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
  <script src="assets/bower_components/fullcalendar/dist/gcal.min.js"></script>
</head>
<body>
<div class="container-fluid mt-5">
  <div class="row">
  	<div class="col-lg-7">
      <!-- Title //-->
      <div class="row no-gutters mb-2">
        <div class="col">
          <p><i class="fas fa-tachometer-alt"></i> Dashboard</p>
        </div>
      </div>
      <!-- Profile //-->
      <div class="row no-gutters align-items-center mb-2 animated slideInDown">
        <div class="col text-center">
          <div class="bg-dark text-light box-padding">
            <img src="https://dummyimage.com/100x100/ff9800/ffffff&text=MS" class="rounded-circle" />
            <p class="mt-2">
              <strong>Matt</strong><br>
              <small>matt@prosser.cc</small><br>
              <span class="badge badge-primary">Trainee</span>
            </p>
          </div>
        </div>
      </div>
      <!-- Tiles //-->
      <div class="row no-gutters mb-2 animated slideInLeft">
        <div class="col-md-6 text-center bg-success text-light box-padding">
        	<i class="fab fa-apple fa-5x animated infinite pulse"></i>
        	<p class="mt-2">1. Blackmores</p>
        </div>
        <div class="col-md-6 text-center bg-warning text-light box-padding">
        	<i class="fas fa-anchor fa-5x animated infinite pulse"></i>
        	<p class="mt-2">2. Bioceuticals</p>
        </div>
        <div class="col-md-6 text-center bg-danger text-light box-padding">
        	<i class="fab fa-aws fa-5x animated infinite pulse"></i>
        	<p class="mt-2">3. Fusion Health</p>
        </div>
        <div class="col-md-6 text-center bg-info text-light box-padding">
        	<i class="fab fa-bitcoin fa-5x animated infinite pulse"></i>
        	<p class="mt-2">4. Oriental Botanicals</p>
        </div>
      </div>
  	</div>
  	<div class="col-lg-5 animated fadeInDown">
      <!-- Calendar //-->
      <div class="bg-white box-padding calendar">
      </div>
    </div>
  </div>
</div>
<script src="assets/js/dist/app.min.js?random=<?php echo time();?>"></script>
</body>
</html>