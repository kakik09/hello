<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
  <link rel="stylesheet" href="resources/home.css">

  <!-- Compiled and minified JavaScript -->
  <script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
<style>
  .fixed-bg {
    background-image: url("images/maxresdefault.jpg");
    min-height: 250px;
     background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;

}
</style>
<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
</head>
<body>
	  <nav>
    <div class="nav-wrapper grey darken-3">
      <a href="#" class="brand-logo">DRUG NOTICE</a>
    </div>
  </nav>
  <div>
    <h1 style="font-size: 20px; padding-left: 10px;">Admin Log-in</h1>
  </div>
  <form action="<?php echo base_url().'adminhome/processLogin/' ?>" method="POST">
  <div class="row">
    <div class="input-field col s6">
          <input name="username" id="username" type="text" class="validate">
          <label for="username">Username</label>
        </div>
  </div>
  <div class="row">
    <div class="input-field col s6">
          <input name="password" id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
  </div>
    <button class="btn waves-effect waves-light" type="submit" name="action">Submit
    <i class="material-icons right">send</i>
  </button>
  </form>

  
</body>
</html>
