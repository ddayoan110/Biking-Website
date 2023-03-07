<?php
include("utils.php");
$conn = connect_to_db("finalProjectDelaneyDayoan");
include("Trails.php");
include("User.php");
session_start();
?>

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script> 
  <link href="https://startbootstrap.github.io/startbootstrap-clean-blog/css/styles.css" rel="stylesheet">
  <link rel="stylesheet" href="../includes/trails.css"> 
  <script src="https://kit.fontawesome.com/de6031b9a7.js" crossorigin="anonymous"></script>
</head>
 
<div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start navbar">

  <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
    <li><img class="logo" src="../includes/logo.png"></li>
    <li><a href="../pages/homepage.php" class="nav-link">Home</a></li>
    <li class="nav-item">
      <a class="nav-link" href="../pages/trails.php">Trails</a>
    </li>
    <?php if (isset($_SESSION['username'])) {
          $user = User::getUserById($conn, $_SESSION["username"]); ?>
          <li class="nav-item">
            <a class="nav-link" href="../includes/logout.php">Logout</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="account.php">Account</a>
          </li>
          <img class="headerpicture" src="data:<?php echo $user->pictureType?>;base64,<?php echo base64_encode($user->userPicture)?>">
        <?php } 
        else { ?>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="../pages/signup.php">Sign Up</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../pages/login.php">Login</a>
          </li>
        <?php } ?>
  </ul>
</div>
