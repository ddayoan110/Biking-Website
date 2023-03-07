<?php
  include("../includes/navbar.php");
?>
<img class="trailimg" src="../includes/bikeTrail.jpeg">
<h1>Columbus</h1>

<table>
    <tr>
        <th></th>
        <th>Trail Name</th>
        <th>Description</th>
        <th>Location</th>
        <th>Amenities</th>
    </tr>
    <?php
    $data = Trail::getTrailsFromDb($conn, "Columbus");
    foreach ($data as $trail) {
        ?>
        <tr>
            <td>
            <?php if (isset($_SESSION['username'])) {?>
                <form action="mark.php" method="post">
                    <input type="hidden" name="trailId" value="<?php echo $trail->trailId?>">
                    <input type="submit" value="Mark Done">
                </form>
              <?php
                }  
              ?>   
            </td>
            <td>
                <?php 
                    echo $trail->trailName
                ?>
            </td>
            <td>
                <?php 
                    echo $trail->trailDescription
                ?>
            </td>
            <td>
                <?php 
                    echo $trail->trailLocation
                ?>
            </td>
            <td>
                <?php
                    echo $trail->trailIcons;
                ?>
            </td>
        </tr>
        <?php
    }
    ?>
</table>