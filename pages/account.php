<?php
  include("../includes/navbar.php");
  $conn = connect_to_db("finalProjectDelaneyDayoan");
  $user = User::getUserById($conn, $_SESSION["username"]);
?>

<div class="userPicture-wrapper">
  <img class="userPicture" src="data:<?php echo $user->pictureType?>;base64,<?php echo base64_encode($user->userPicture)?>">
</div>

<ul>
  <?php 
    $done = explode(",", $user->trailsDone);
    
    foreach ($done as $trailId){
      if ($trailId != ""){
        $trail = Trail::getTrailsById($conn, $trailId);
        ?>
        <li><?php echo $trail->trailName?>
          <form action="unmark.php" method="post">
            <input type="hidden" name="trailId" value="<?php echo $trail->trailId?>">
            <input type="submit" value="Undo Mark">
          </form>
        </li>
        <?php
      }
    }
  ?>
</ul>