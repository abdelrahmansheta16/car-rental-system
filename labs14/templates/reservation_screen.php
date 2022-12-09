
<div class="row">
    <div class="col-md-12 text-center">
        <h1>Reservation Screen</h1>
    </div>
<div class="row">
    <?php 
             
         
      
    //get all transaction from cars_data.php
    //    'user_id' => '1',
    //    'user_name' => 'ahmed',
    //    'car_plate' => '1'
    include_once('../templates/components/cars_data.php');
    
    foreach ($transaction as $item) { ?>
        <div class="col-md-12 text-center">
            <div class="panel panel-default">
                <div class="panel-body">
                    
                    <img src="<?= $item['pic'] ?>" class="img-responsive" style="height: 160px;"/>

                    <?php
                    $car_plate = $item['car_plate'];
                    $user_name = $item['user_name'];
                    $user_id = $item['user_id'];
                    ?>
                     <?= "<h5 class=\"text-$color\" >user name : $user_name </h5>"; ?>
                     <?= "<h5 class=\"text-$color\" >user id : $user_id </h5>"; ?>
                     <?= "<h5 class=\"text-$color\" >plate id : $car_plate </h5>"; ?>
                     <?= "<h5 class=\"text-$color\" >car status : $car_plate </h5>"; ?>
                </div>
            </div>
    ___________________________________________________________________

        </div>
    <?php } ?>
