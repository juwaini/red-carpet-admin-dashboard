<?php
    session_start();
    require_once 'db.php';

    $login = new MongoCollection($redcarpet, 'login');
    $logindata = $redcarpet->$login->find();
    echo json_encode($logindata);
?>
