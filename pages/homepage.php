<?php
  include("../includes/navbar.php");
?>
 
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Welcome to RideOn</h1>
    <p class="lead">The best bicycle trail guide for you!</p>
  </div>
</div>

<div class="grid">
  <?php
  $city = "Akron";
  include("../includes/3x3Cards.php");
  ?>
  <?php
  $city = "Cincinnati";
  include("../includes/3x3Cards.php");
  ?>
  <?php
  $city = "Cleveland";
  include("../includes/3x3Cards.php");
  ?>
  <?php
  $city = "Columbus";
  include("../includes/3x3Cards.php");
  ?>
  <?php
  $city = "Dayton";
  include("../includes/3x3Cards.php");
  ?>
  <?php
  $city = "Toledo";
  include("../includes/3x3Cards.php");
  ?>
</div>
