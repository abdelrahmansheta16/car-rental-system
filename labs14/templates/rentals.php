<?php if($loginInfo == 1) {
    include_once('../templates/logout.php');
} else { ?>
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="col-lg-4">
                <h4>Hello ahmed, <?=$user['first_name']?> </h4>
            </div>
        </div>
    </div>
    <?php 
    //get all rentals from cars_data.php    
    $rentals2 = array(
        array(
            "first_name" => "Ahmed",
            "last_name" => "Ali",
            "car_id" => "1",
            "name" => "Toyota Corolla",
            "pic" => "http://www.toyota.com/imgix/responsive/images/mlp/colorizer/2017/corolla/ce/exterior/01.png?auto=format,compress&w=600&h=400&fit=crop",
            "value" => "5",
            "mode" => "days",
            "time" => "2017-03-01 12:00:00",
            "rate_by_days" => "100",
            "rate_by_hours" => "10",
            "_id" => "1"
        ),
        array(
            "first_name" => "Ahmed",
            "last_name" => "Ali",
            "car_id" => "2",
            "name" => "Toyota Camry",
            "pic" => "http://www.toyota.com/imgix/responsive/images/mlp/colorizer/2017/camry/le/exterior/01.png?auto=format,compress&w=600&h=400&fit=crop",
            "value" => "5",
            "mode" => "days",
            "time" => "2017-03-01 12:00:00",
            "rate_by_days" => "100",
            "rate_by_hours" => "10",
            "_id" => "2"
        ),
        array(
            "first_name" => "Ahmed",
            "last_name" => "Ali",
            "car_id" => "3",
            "name" => "Toyota Prius",
            "pic" => "http://www.toyota.com/imgix/responsive/images/mlp/colorizer/2017/prius/le/exterior/01.png?auto=format,compress&w=600&h=400&fit=crop",
            "value" => "5",
            "mode" => "days",
            "time" => "2017-03-01 12:00:00",
            "rate_by_days" => "100",
            "rate_by_hours" => "10",
            "_id" => "3"
        ),
    );
    if(!isset($rentals2) || count($rentals2) == 0) { ?>
        <div class="panel panel-default" style="background-color: #ff333b">
            <div class="panel-body text-center">
                <h3 class="lead" style="color: #ffccc6">You have not rented any car!</h3>
            </div>
        </div>
    <?php } else {
        include_once('../templates/rental_item.php');
    } ?>

<?php } ?>