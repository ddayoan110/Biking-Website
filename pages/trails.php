<?php
  include("../includes/navbar.php");
  $conn = connect_to_db("finalProjectDelaneyDayoan");
?>

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