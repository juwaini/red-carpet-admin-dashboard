<?php
    include_once 'db.php';

    $route = $_GET['q'];
    $collection = new MongoCollection($redcarpet, $route);
    $count = $collection->find()->count(); 

    if($route == 'promo')
    {
       $route_id = 'PR' . str_pad($count + 1, 5, '0', STR_PAD_LEFT); 
    }
    if($route == 'merchant')
    {
        $route_id = 'MC' . str_pad($count + 1, 5, '0', STR_PAD_LEFT);
    }
    if($route == 'category')
    {
        $route_id = 'CT' . str_pad($count + 1, 5, '0', STR_PAD_LEFT);
    }
    echo $route_id;
?>
