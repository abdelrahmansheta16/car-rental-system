<?php
// Path: templates/components/cars_data.php


//users array contains all the users
$users =array(
        //array contain user_id, fname , lname , gender,bdate
        array(
            'user_id' => '1',
            'fname' => 'ahmed',
            'lanme' => 'hossam',
            'gender' => 'male',
            'bdate' => '1995-01-01',
        ),   
        array(
            'user_id' => '2',
            'fname' => 'mohamed',
            'lanme' => 'hossam',
            'gender' => 'male',
            'bdate' => '1995-01-01',
        ),
        array(
            'user_id' => '3',
            'fname' => 'ali',
            'lanme' => 'hossam',
            'gender' => 'male',
            'bdate' => '1995-01-01',
        ),
        array(
            'user_id' => '4',
            'fname' => 'mohamed',
            'lanme' => 'hossam',
            'gender' => 'male',
            'bdate' => '1995-01-01',
        ),

);



//transaction array contains all the transactions
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

$transaction =array(
    //array contain user id, name  and car plate , pic
    array(
        'user_id' => '1',
        'user_name' => 'ahmed',
        'car_plate' => '1',
        'pic' => 'http://www.audi.com/content/dam/gbp2/experience-audi/models/a3-sportback/2016/overview/overview-1.jpg/_jcr_content/renditions/cq5dam.resized.img.585.low.time1444820000000.jpg'
    ),
    array(
        'user_id' => '2',
        'user_name' => 'mohamed',
        'car_plate' => '2',
        'pic' => 'http://www.bmw.com/content/dam/bmw/common/all-models/3-series/sedan/2016/at-a-glance/bmw-3-series-sedan-2016-at-a-glance-01.jpg/_jcr_content/renditions/cq5dam.resized.img.585.low.time1444820000000.jpg'
    ),
    array(
        'user_id' => '3',
        'user_name' => 'ali',
        'car_plate' => '3',
        'pic' => 'http://www.mercedes-benz.com/content/dam/mercedes-benz/mercedes-benz-corporate/brand-assets/brand-identity/mercedes-benz-logo/mercedes-benz-logo-2016.jpg/_jcr_content/renditions/cq5dam.resized.img.585.low.time1444820000000.jpg'
    ),
    array(
        'user_id' => '4',
        'user_name' => 'khaled',
        'car_plate' => '4',
        'pic' => 'http://www.jaguar.com/content/dam/jaguar/uk/vehicles/f-type/2016/overview/overview-1.jpg/_jcr_content/renditions/cq5dam.resized.img.585.low.time1444820000000.jpg'
    ),
    array(
        'user_id' => '5',
        'user_name' => 'mohamed',
        'car_plate' => '5',
        'pic' => 'http://www.lamborghini.com/content/dam/lamborghini/brand/brand-identity/brand-logo/lamborghini-logo-2016.jpg/_jcr_content/renditions/cq5dam.resized.img.585.low.time1444820000000.jpg'
    ),
    array(
        'user_id' => '6',
        'user_name' => 'ahmed',
        'car_plate' => '1',
        'pic' => 'http://www.audi.com/content/dam/gbp2/experience-audi/models/a3-sportback/2016/overview/overview-1.jpg/_jcr_content/renditions/cq5dam.resized.img.585.low.time1444820000000.jpg'
    ),
    array(
        'user_id' => '7',
        'user_name' => 'mohamed',
        'car_plate' => '2',
        'pic' => 'http://www.bmw.com/content/dam/bmw/common/all-models/3-series/sedan/2016/at-a-glance/bmw-3-series-sedan-2016-at-a-glance-01.jpg/_jcr_content/renditions/cq5dam.resized.img.585.low.time1444820000000.jpg'
    ),
);

?>