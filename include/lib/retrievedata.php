<?php
    include_once 'db.php';

    $route = $_GET['q'];
    $route_id = $_GET['id'];
    $collection = new MongoCollection($redcarpet, $route);
    $route_key = $route . '_id';
    $route_data = $collection->findOne(array($route_key => $route_id)); 

    echo json_encode($route_data);
?>
