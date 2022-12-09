<?php
$cars = array(
    array(
        '_id' => '1',
        'name' => 'Audi',
        'pic' => 'http://www.audi.com/content/dam/gbp2/experience-audi/models/a3-sportback/2016/overview/overview-1.jpg/_jcr_content/renditions/cq5dam.resized.img.585.low.time1444820000000.jpg',
        'stock' => 10
    ),
    array(
        '_id' => '2',
        'name' => 'BMW',
        'pic' => 'http://www.bmw.com/content/dam/bmw/common/all-models/3-series/sedan/2016/at-a-glance/bmw-3-series-sedan-2016-at-a-glance-01.jpg/_jcr_content/renditions/cq5dam.resized.img.585.low.time1444820000000.jpg',
        'stock' => 20
    ),
    array(
        '_id' => '3',
        'name' => 'Mercedes',
        'pic' => 'http://www.mercedes-benz.com/content/dam/mercedes-benz/mercedes-benz-corporate/brand-assets/brand-identity/mercedes-benz-logo/mercedes-benz-logo-2016.jpg/_jcr_content/renditions/cq5dam.resized.img.585.low.time1444820000000.jpg',
        'stock' => 30
    ),
    array(
        '_id' => '4',
        'name' => 'Jaguar',
        'pic' => 'http://www.jaguar.com/content/dam/jaguar/uk/vehicles/f-type/2016/overview/overview-1.jpg/_jcr_content/renditions/cq5dam.resized.img.585.low.time1444820000000.jpg',
        'stock' => 40
    ),
    array(
        '_id' => '5',
        'name' => 'Lamborghini',
        'pic' => 'http://www.lamborghini.com/content/dam/lamborghini/brand/brand-identity/brand-logo/lamborghini-logo-2016.jpg/_jcr_content/renditions/cq5dam.resized.img.585.low.time1444820000000.jpg',
        'stock' => 50
    ),
);
$search=$_GET['search'];
      //if the search is not empty
      if(!empty($_GET['search'])){
        //get the search value
        $search = $_GET['search'];
        //loop on the cars array
        foreach($cars as $car){
          //if the search value is equal to the name of the car or the id of the car or the stock of the car
          if($search == $car['name'] || $search == $car['_id'] || $search == $car['stock']){
            //print the result of the search
            echo '<div class="col-md-4">';
            echo '<div class="thumbnail">';
            echo '<img src="'.$car['pic'].'" alt="'.$car['name'].'">';
            echo '<div class="caption">';
            echo '<h3>'.$car['name'].'</h3>';
            echo '<p>Stock: '.$car['stock'].'</p>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
          }
        }
      }
      ?>