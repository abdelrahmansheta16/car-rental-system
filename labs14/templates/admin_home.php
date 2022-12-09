<form action="search.php" method="get">
        <div class="input-group">
          <input type="text" class="form-control" name="search" placeholder="Search for...">
          <span class="input-group-btn">
            <button class="btn btn-default" type="submit">Go!</button>
          </span>
         </div><!-- /input-group -->   
      </form>
<div class="panel panel-default">
    <div class="panel-body">
        <div class="col-lg-4">
                <h4>click the button to Upload a new car:</h4>
            <a href="/labs/templates/car_%20registeration.html"><button class="btn btn-primary">Upload a new car</button></a>
        </div>
    </div>
</div>

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
                    <a href="/car/<?= $car['_id'] ?>"><button class="btn btn-primary">Delete</button></a>
                    <?php if ($loginInfo != 1) { ?>
                        <?php if ($stock == 0) $disable = "disabled"; else $disable = ""; ?>
                        <form action="/change_status" method="post">
                            <div class="form-group
                            ">
                                <label for="status">Change Status:</label>
                                <select class="form-control" id="status" name="status">
                                    <option value="active">Active</option>
                                    <option value="out of stock">Out of Stock</option>
                                    <option value="rented">Rented</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-default">Save Changes</button>
                        </form>
                    <?php } ?>
                </div>
            </div>
            _______________________________________________________________
        </div>
    <?php } ?>
</div>