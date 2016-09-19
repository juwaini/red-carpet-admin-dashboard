<?php
require_once 'db.php';

$route = $_GET['route'];
$id = $_GET['id'];

$collection = new MongoCollection($redcarpet, $route);
$data = $collection->find(
    array($route . '_status' => 'approved'),
    array($id => 1)
);

if($route == 'category')
    $return_string =    '<select name="voucher_category" id="voucher_category" class="form-control"><option value="">Select Voucher\'s Category</option>';
if($route == 'merchant')
    $return_string =    '<select name="promo_merchant_name" id="promo_merchant_name" class="form-control"><option value="">Select Merchant Name</option>';

foreach($data as $return_data)
{
    $return_string .= '<option value="' . $return_data[$id] . '">' . $return_data[$id] . '</option>';
}

$return_string .= '</select>';
die($return_string);
?>
