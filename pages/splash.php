<?php
  include("../includes/navbar.php");

  if (isset($_SESSION['username'])) {
?>

<div class='container'>
    <div class="row">
        <div class="col-12 col-lg-6 offset-lg-3">
            <h1>Hello <?php echo $_SESSION['username'] ?></h1>
            <a class="btn btn-primary" href="trails.php">View Trails</a>
        </div>
    </div>
</div>

<?php
} else {
?>
   
<a href="login.php">Please log in to see this page</a>

<?php
}

?>
