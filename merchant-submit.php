<?php
session_start();
require_once 'include/lib/db.php';
$collection = 'merchant';
$merchant = new MongoCollection($redcarpet, $collection); 

$uploadDirectory = 'uploads/';
$merchantData = array();

if ($_POST['operation'] == 'edit')
{
    $merchant->update(
        array('merchant_id' => $_POST['merchant_id']),
        array(
            '$set' => array('merchant_name' => $_POST['merchant_name_edit'])
        )
    );

    $merchant->update(
        array('merchant_id' => $_POST['merchant_id']),
        array(
            '$set' => array('merchant_hq_address' => $_POST['merchant_hq_address_edit'])
        )
    );

    $merchant->update(
        array('merchant_id' => $_POST['merchant_id']),
        array(
            '$set' => array('merchant_total_branches' => $_POST['merchant_total_branches_edit'])
        )
    );

    $merchant->update(
        array('merchant_id' => $_POST['merchant_id']),
        array(
            '$set' => array('merchant_listing_references' => $_POST['merchant_listing_references_edit'])
        )
    );

    $merchant->update(
        array('merchant_id' => $_POST['merchant_id']),
        array(
            '$set' => array('merchant_pic_name' => $_POST['merchant_pic_name_edit'])
        )
    );

    $merchant->update(
        array('merchant_id' => $_POST['merchant_id']),
        array(
            '$set' => array('merchant_pic_title' => $_POST['merchant_pic_title_edit'])
        )
    );

    $merchant->update(
        array('merchant_id' => $_POST['merchant_id']),
        array(
            '$set' => array('merchant_pic_email' => $_POST['merchant_pic_email_edit'])
        )
    );

    $merchant->update(
        array('merchant_id' => $_POST['merchant_id']),
        array(
            '$set' => array('merchant_pic_phone_number' => $_POST['merchant_pic_phone_number_edit'])
        )
    );

    if($_FILES['merchant_icon_edit']['error'] == 0 and $_FILES['merchant_icon_edit']['size'] > 0)
    {
        $uploadSubDirectory = 'icon/';
        $imageURL = $uploadDirectory . $uploadSubDirectory . $_FILES['merchant_icon_edit']['name'];
        move_uploaded_file($_FILES['merchant_icon_edit']['tmp_name'], $imageURL); 
        $merchant->update(
            array('merchant_id' => $_POST['merchant_id']),
            array(
                '$set' => array('merchant_icon' => $imageURL)
            )
        );

    }

    if($_FILES['merchant_background_edit']['error'] == 0 and $_FILES['merchant_background_edit']['size'] > 0)
    {
        $uploadSubDirectory = 'background/';
        $imageURL = $uploadDirectory . $uploadSubDirectory . $_FILES['merchant_background_edit']['name'];
        move_uploaded_file($_FILES['merchant_background_edit']['tmp_name'], $imageURL); 
        $merchant->update(
            array('merchant_id' => $_POST['merchant_id']),
            array(
                '$set' => array('merchant_background' => $imageURL)
            )
        );

    }

}
else
{
    $merchantData['merchant_status'] = $_POST['merchant_status'];
    $merchantData['merchant_id'] = $_POST['merchant_id'];
    $merchantData['merchant_name'] = $_POST['merchant_name'];
    $merchantData['merchant_hq_address'] = $_POST['merchant_hq_address'];
    $merchantData['merchant_total_branches'] = $_POST['merchant_total_branches'];
    $merchantData['merchant_listing_references'] = $_POST['merchant_listing_references'];
    $merchantData['merchant_pic_name'] = $_POST['merchant_pic_name'];
    $merchantData['merchant_pic_title'] = $_POST['merchant_pic_title'];
    $merchantData['merchant_pic_email'] = $_POST['merchant_pic_email'];
    $merchantData['merchant_pic_phone_number'] = $_POST['merchant_pic_phone_number'];

    if($_FILES['merchant_icon']['error'] == 0)
    {
        $uploadSubDirectory = 'icon/';
        $imageURL = $uploadDirectory . $uploadSubDirectory . $_FILES['merchant_icon']['name'];
        move_uploaded_file($_FILES['merchant_icon']['tmp_name'], $imageURL); 
        $merchantData['merchant_icon'] = $imageURL; 
    }

    if($_FILES['merchant_background']['error'] == 0)
    {
        $uploadSubDirectory = 'background/';
        $imageURL = $uploadDirectory . $uploadSubDirectory . $_FILES['merchant_background']['name'];
        move_uploaded_file($_FILES['merchant_background']['tmp_name'], $imageURL); 
        $merchantData['merchant_background'] = $imageURL;
    }

    $merchant->save($merchantData);
}

?>
