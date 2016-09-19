<?php
    require_once 'db.php';

    $merchant_name = $_GET['name'];
    $merchant = new MongoCollection($redcarpet, 'merchant');
    $merchant_data = $merchant->findOne(
        array('merchant_name' => $merchant_name),
        array('merchant_id' => 1, 'merchant_listing_references' => 1)
    );

    echo json_encode($merchant_data);
?>
