
<div class="row">
    <div class="col-md-12 text-center">
        <h1>all customers</h1>
    </div>
<div class="row">
    <?php 
             
         
      
    //get all users from cars_data.php
    //    'user_id' => '1',
    //    'user_name' => 'ahmed',
    //    'car_plate' => '1'
    include_once('../templates/components/cars_data.php');
    
    foreach ($users as $item) { ?>
        <div class="col-md-12 text-center">
            <div class="panel panel-default">
                <div class="panel-body">
                    

                    <?php
                     $fname = $item['fname'];
                     $lname = $item['lname'];
                     $gender = $item['gender'];
                     $bdate = $item['bdate'];
                     $user_id = $item['user_id'];
                  
                    ?>
                     <?= "<h5 class=\"text-$color\" >user name : $fname </h5>"; ?>
                     <?= "<h5 class=\"text-$color\" >user id : $user_id </h5>"; ?>
                     <?= "<h5 class=\"text-$color\" >gender : $gender </h5>"; ?>
                     <?= "<h5 class=\"text-$color\" >bdate : $bdate </h5>"; ?>
                     <button class="btn btn-primary">Delete</button></a>
                    <?php if ($loginInfo != 1) { ?>
                        <?php if ($stock == 0) $disable = "disabled"; else $disable = ""; ?>

                        <a href="/rent/<?= $car['_id'] ?>" class="btn btn-<?=$color . " " . $disable?>" style="margin-left: 10px;">info</a>
                    <?php } ?>
                </div>
            </div>
            _____________________________________________
        </div>
    <?php } ?>
</div>
