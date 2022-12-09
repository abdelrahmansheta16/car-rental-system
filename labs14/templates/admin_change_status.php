<div class="panel panel-default">
    <div class="panel-body">
        <div class="col-lg-4">
                <h1>change user status:</h1>
            <a href="/labs/templates/car_%20registeration.html"><button class="btn btn-primary">Upload a new car</button></a>
        </div>
    </div>
</div>

<div class="panel panel-default">
    //form group contain 3 options to change the status of the car if the car is rented or out of stock or active and store the status in the variable $status
    <div class="panel-body">
        <form action="/change_status" method="post">
            <div class="form-group">
                <label for="status">Change Status:</label>
                <select class="form-control" id="status" name="status">
                    <option value="active">Active</option>
                    <option value="out of stock">Out of Stock</option>
                    <option value="rented">Rented</option>
                </select>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
        //echo the status of the car

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
                    <h1><?= $car['name'] ?></h1>
                    <img src="<?= $car['pic'] ?>" class="img-responsive" style="height: 160px;"/>
                    <?php
                    $stock = $car['stock'];
                    $color = getColor($stock);
                    ?>

                    <?= "<h5 class=\"text-$color\" >Stock : $stock </h5>"; ?>
                    <a href="/car/<?= $car['_id'] ?>"><button class="btn btn-primary">Delete</button></a>
                    <?php if ($loginInfo != 1) { ?>
                        <?php if ($stock == 0) $disable = "disabled"; else $disable = ""; ?>
                        <a href="/rent/<?= $car['_id'] ?>" class="btn btn-<?=$color . " " . $disable?>" style="margin-left: 10px;">Change Status</a>
                    <?php } ?>
                </div>
            </div>
        </div>
    <?php } ?>
</div>