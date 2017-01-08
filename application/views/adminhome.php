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
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="sass.html">Home</a></li>
        <li><a href="badges.html">News</a></li>
        <li><a href="collapsible.html">Statistics</a></li>
        <li><a href="">Substances</a></li>
        <li><a href="">Directories</a></li>
        <li><a href="">About us</a></li>
      </ul>
    </div>
  </nav>

  <div class="my-view" style="background-image: url('images/maxresdefault.jpg');">
    <div class="my-view-block" id="alpha">
      <div 
        style="
          text-align: center; 
          font-family: Poppins; 
          background-color: #000000;
          color: white;"
      >
        <h3 
          style="
            margin-top: 0px; 
            padding-top: 20px;
            font-size: 20px;"
        >

        Does the Philippines have a

        </h3>

        <h1 
          style="
            margin-bottom: 0px; 
            padding-bottom: 20px;
            font-size: 50px;"
        >

        DRUG PROBLEM?

        </h1>

      </div>
    </div>

    <div class="my-view-block" id="bravo">
      <div 
        style="
          text-align: left; 
          font-family: Poppins; 
          background-color: #000000;
          color: white;"
      >
        <h3 
          style="
            margin-top: 0px; 
            padding-top: 20px;
            padding-left: 20%;"



        >

        There were a total of

        </h3>

        <h1 
          style="
            margin-bottom: 0px; 
            padding-left: 20%;
            font-size: 50px;"
        >

        5,402 drug users admitted


        </h1>


        <h3 
          style="
            margin-bottom: 0px; 
            padding-bottom: 20px;
            padding-left: 20%;"
        >

        to rehabilitation facilities in 2015 alone.

        </h3>

      </div>
    </div>

    <div class="my-view-block" id="charlie">
      <div 
        style="
          text-align: right; 
          font-family: Poppins; 
          background-color: #000000;
          color: white;"
      >

      <h3 
          style="
            margin-top: 0px; 
            padding-top: 20px;
            padding-right: 20%;"


        >


        Among the substances abused were

        </h3>

        <h1 
          style="
            margin-bottom: 0px; 
            padding-right: 20%;
            font-size: 50px;"
        >

        Shabu, Marijuana, and Cocaine

        </h1>

        <h3 
          style="
            margin-bottom: 0px; 
            padding-bottom: 20px;
            padding-right: 20%;"
        >



        </h3>


      </div>
    </div>

    <div class="my-view-block" id="delta">
      <div 
        style="
          text-align: center; 
          font-family: Poppins; 
          background-color: #000000;
          color: white;"
      >
        <h3 
          style="
            margin-top: 0px; 
            padding-top: 20px;"
        >


        Learn more about drug abuse

        </h3>

        <h1 
          style="
            margin-bottom: 0px; 
            padding-bottom: 20px;
            font-size: 50px;"
        >


        NOW


        </h1>

      </div>
    </div>
  </div>




<div class="my-sidenav card grey lighten-1">
  <div class="my-sidenav-content card-content">
    <a
      href="#alpha"
      class="my-sidenav-link waves-effect waves-teal btn-flat"
    >
      1
    </a>
    <a
      href="#bravo"
      class="my-sidenav-link waves-effect waves-teal btn-flat"
    >
      2
    </a>
    <a
      href="#charlie"
      class="my-sidenav-link waves-effect waves-teal btn-flat"
    >
      3
    </a>
    <a
      href="#delta"
      class="my-sidenav-link waves-effect waves-teal btn-flat"
    >
      4
    </a>
  </div>
</div>

<div class="fixed-action-btn">
    <a class="btn-floating btn-large red">
      <i class="large material-icons">UP</i>
    </a>
    <ul>
      <li><a class="btn-floating red"><i class="material-icons">Ar</i></a></li>
      <li><a class="btn-floating yellow darken-1"><i class="material-icons">Pro</i></a></li>
      <li><a class="btn-floating green"><i class="material-icons">Inst</i></a></li>
      <li><a class="btn-floating blue"><i class="material-icons">News</i></a></li>
    </ul>
  </div>

</body>
</html>
