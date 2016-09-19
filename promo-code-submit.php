<?php
    session_start();
    require_once 'include/lib/db.php';
    $collection = 'promo';
    $promo = new MongoCollection($redcarpet, $collection); 

    $voucherList = $_POST['voucher_list'];

    $vouchers = json_decode($voucherList); 
    
    $promo->update(
        array('promo_id' => $_POST['promo_id']),
        array(
            '$set' => array('voucher_list' => $vouchers)
        )
    );

    $promo->update(
        array('promo_id' => $_POST['promo_id']),
        array(
            '$set' => array('promo_status' => 'code uploaded')
        )
    );
?>
