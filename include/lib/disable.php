<?php
    require_once 'db.php';

    $id = $_GET['id'];
    $route = $_GET['route'];

    $collection = new MongoCollection($redcarpet, $route);
    $route_status = $route . '_status';
    $route_id = $route . '_id';
    $collection->update(
        array($route_id => $id), 
        array(
            '$set' => array(
                $route_status => 'disabled'
            )
        )
    );

?>
