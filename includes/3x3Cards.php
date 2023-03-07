<div class="container">
  <div class="row">
      <div>
        <a class="card-wrapper" href="../pages/<?php echo strtolower($city) ?>.php">
        <div class="card" id="<?php echo strtolower($city) ?>">
          <?php if (!empty($primaryImage)) { ?>
          <img src="<?php echo $primaryImage?>"/>
          <?php } ?>
          <h2><?php echo $city ?></h2>
        </div>
        </a>
      </div>
  </div>
</div>
