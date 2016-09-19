<?php
session_start();
require_once 'include/lib/db.php';
$collection = 'promo';
$promo = new MongoCollection($redcarpet, $collection); 

$uploadDirectory = 'uploads/';
$promoData = array();

$promoData['promo_pic'] = $_SESSION['name'];
$promoData['promo_create_date'] = date('Y-m-d');
$promoData['promo_status'] = $_POST['promo_status'];
$promoData['promo_id'] = $_POST['promo_id'];
$promoData['voucher_name'] = $_POST['voucher_name'];
$promoData['voucher_description_mobile'] = $_POST['voucher_description_mobile'];
$promoData['voucher_description_desktop'] = $_POST['voucher_description_desktop'];
$promoData['campaign_name'] = $_POST['campaign_name'];
$promoData['voucher_group'] = $_POST['voucher_group'];
$promoData['voucher_category'] = $_POST['voucher_category'];
$promoData['voucher_value'] = $_POST['voucher_value'];
$promoData['terms_and_conditions'] = $_POST['terms_and_conditions'];
$promoData['voucher_unique'] = $_POST['voucher_unique'];

if ($promoData['voucher_unique'] == 'yes') 
{
    $promoData['voucher_quantity'] = $_POST['voucher_quantity'];
}

$promoData['redeemed_count'] = 0;

$promoData['voucher_expiry_date'] = $_POST['voucher_expiry_date'];
$promoData['quantity_reminder'] = $_POST['quantity_reminder'];
$promoData['expiry_date_reminder'] = $_POST['expiry_date_reminder'];
$promoData['types_of_delivery'] = $_POST['types_of_delivery'];
$promoData['voucher_publish_date'] = $_POST['voucher_publish_date'];
$promoData['promo_merchant_name'] = $_POST['promo_merchant_name'];
$promoData['selecting_outlets'] = $_POST['selecting_outlets'];
$promoData['voucher_list'] = array();

if($_FILES['voucher_image1']['error'] == 0)
{
    $uploadSubDirectory = 'voucher_image/';
    $imageURL = $uploadDirectory . $uploadSubDirectory . $_FILES['voucher_image1']['name'];
    move_uploaded_file($_FILES['voucher_image1']['tmp_name'], $imageURL);
    $promoData['voucher_image1'] = $imageURL;
}

if($_FILES['voucher_image2']['error'] == 0)
{
    $uploadSubDirectory = 'voucher_image/';
    $imageURL = $uploadDirectory . $uploadSubDirectory . $_FILES['voucher_image2']['name'];
    move_uploaded_file($_FILES['voucher_image2']['tmp_name'], $imageURL);
    $promoData['voucher_image2'] = $imageURL;
}

if($_FILES['voucher_image3']['error'] == 0)
{
    $uploadSubDirectory = 'voucher_image/';
    $imageURL = $uploadDirectory . $uploadSubDirectory . $_FILES['voucher_image3']['name'];
    move_uploaded_file($_FILES['voucher_image3']['tmp_name'], $imageURL);
    $promoData['voucher_image3'] = $imageURL;
}

if($_FILES['voucher_image4']['error'] == 0)
{
    $uploadSubDirectory = 'voucher_image/';
    $imageURL = $uploadDirectory . $uploadSubDirectory . $_FILES['voucher_image4']['name'];
    move_uploaded_file($_FILES['voucher_image4']['tmp_name'], $imageURL);
    $promoData['voucher_image4'] = $imageURL;
}

if($_FILES['voucher_design']['error'] == 0)
{
    $uploadSubDirectory = 'voucher_design/';
    $imageURL = $uploadDirectory . $uploadSubDirectory . $_FILES['voucher_design']['name'];
    move_uploaded_file($_FILES['voucher_design']['tmp_name'], $imageURL);
    $promoData['voucher_design'] = $imageURL;
}

$promo->save($promoData);
?>
