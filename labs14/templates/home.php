<form action="search.php" method="get">
        <div class="input-group">
          <input type="text" class="form-control" name="search" placeholder="Search for...">
          <span class="input-group-btn">
            <button class="btn btn-default" type="submit">Go!</button>
          </span>
         </div><!-- /input-group -->   
      </form>


<?php function getColor($stock) {
    $color = 'danger';

    if($stock > 50){
        $color = 'success';
    } else if($stock > 20) {
        $color = 'warning';
    }

    return $color;
}
?>
<div class="row">
    <?php 
    //get all cars from cars_data.php
    include_once('../templates/components/cars_data.php');
    foreach ($cars as $car) { ?>
        <div class="col-md-3 text-center">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h4><?= $car['name'] ?></h4>
                    <img src="<?= $car['pic'] ?>" class="img-responsive" style="height: 160px;"/>

                    <?php
                    $stock = $car['stock'];
                    $color = getColor($stock);
                    ?>

                    <?= "<h5 class=\"text-$color\" >Stock : $stock </h5>"; ?>
                    <a href="/car/<?= $car['_id'] ?>"><button class="btn btn-primary">Details</button></a>
                    <?php if ($loginInfo != 1) { ?>
                        <?php if ($stock == 0) $disable = "disabled"; else $disable = ""; ?>

                        <a href="/rent/<?= $car['_id'] ?>" class="btn btn-<?=$color . " " . $disable?>" style="margin-left: 10px;">Rent</a>
                    <?php } ?>
                </div>
            </div>
            _____________________________________________________
        </div>
    <?php } ?>
</div>