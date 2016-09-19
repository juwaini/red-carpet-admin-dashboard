<?php
    session_start();
    include_once 'db.php';

    $route = $_GET['q'];

    if($_GET['q'] == 'reports')
    {
        $collection = new MongoCollection($redcarpet, 'promo');
    }
    else
    {
        $collection = new MongoCollection($redcarpet, $route);
    }

    $item = $collection->find(); 
    $table = array();
    $row = array();
    
    if($route=="promo")
    {
        //$table_column = ['promo_id', 'voucher_name', 'promo_merchant_name', 'voucher_created_date', 'voucher_publish_date', 'promo_status', 'promo_pic', 'action'];
        foreach ($item as $data)
        {
            $row[0] = $data['promo_id'];
            
            $row[1] = '<a id="' . $data['promo_id'] . '" data-toggle="modal" href="#promo-view-modal">' . $data['voucher_name'] . '</a>';
            
            $row[2] = $data['promo_merchant_name'];
            $row[3] = $data['promo_create_date'];
            $row[4] = $data['voucher_publish_date'];
            $row[5] = ucwords($data['promo_status']);
            $row[6] = $data['promo_pic'];
            
            if ($_SESSION['credential'] == 'admin')
            {
                if ($data['promo_status'] == 'pending approval' or $data['promo_status'] == 'rejected')
                    $row[7] =   '<a id="' .  $data['promo_id'] . '" data-toggle="modal" href="#promo-edit-modal">Edit</a>';   
                else
                    $row[7] = '';
            }
            elseif ($_SESSION['credential'] == 'superadmin')
            {
                if ($data['promo_status'] == 'pending approval')
                    $row[7] =   '<a id="' .  $data['promo_id'] . '" data-toggle="modal" href="#promo-approval-modal">Approve</a>';
                elseif ($data['promo_status'] == 'approved' and $data['voucher_unique'] == 'no')
                    $row[7] =   '<a id="' . $data['promo_id'] . '" data-toggle="modal" href="#promo-disable-modal">Disable</a>';
                elseif ($data['promo_status'] == 'approved' and $data['voucher_unique'] == 'yes')
                    $row[7] =   '<a id="' . $data['promo_id'] . '" data-toggle="modal" href="#promo-upload-code-modal">Upload Code</a>';
                elseif ($data['promo_status'] == 'published' or $data['promo_status'] == 'code uploaded')
                    $row[7] =   '<a id="' .  $data['promo_id'] . '" data-toggle="modal" href="#promo-disable-modal">Disable</a>';
                else
                    $row[7] = '';
            }

            array_push($table, $row);
        }
    }
    if($route=="merchant")
    {
        //$table_column = ['merchant_id', 'merchant_name', 'merchant_pic_name', 'merchant_pic_email', 'merchant_pic_phone_number', 'total_promos', 'action'];
        foreach ($item as $data)
        {
            $row[0] = $data['merchant_id'];

            $row[1] = '<a id="' . $data['merchant_id'] . '" data-toggle="modal" href="#merchant-view-modal">' . $data['merchant_name'] . '</a>';
            
            $row[2] = $data['merchant_pic_title'] . " " . $data['merchant_pic_name'];
            $row[3] = $data['merchant_pic_email'];
            $row[4] = $data['merchant_pic_phone_number'];

            $promo = new MongoCollection($redcarpet, 'promo');
            $row[5] = $promo->find(array('promo_merchant_name' => $data['merchant_name']))->count();
            $row[6] = ucwords($data['merchant_status']);

            if ($_SESSION['credential'] == 'admin')
            {
                if ($data['merchant_status'] == 'pending approval')
                    $row[7] =   '<a id="' .  $data['merchant_id'] . '" data-toggle="modal" href="#merchant-edit-modal">Edit</a>';
                else
                    $row[7] = '';
            }
            elseif ($_SESSION['credential'] == 'superadmin')
            {
                if ($data['merchant_status'] == 'pending approval')
                    $row[7] =   '<a id="' .  $data['merchant_id'] . '" data-toggle="modal" href="#merchant-approval-modal">Approve</a>';
                elseif ($data['merchant_status'] == 'approved')
                    $row[7] =   '<a id="' .  $data['merchant_id'] . '" data-toggle="modal" href="#merchant-disable-modal">Disable</a>';
                elseif ($data['merchant_status'] == 'disabled')
                    $row[7] =   '<a id="' .  $data['merchant_id'] . '" data-toggle="modal" href="#merchant-enable-modal">Enable</a>';
                else
                    $row[7] = '';
            }

            array_push($table, $row);
        }
    }
    if($route=="category")
    {
        //$table_column = ['category_name', 'sub_category_name', 'category_icon', 'category_status', 'action'];
        foreach ($item as $data)
        {
            $row[0] = $data['category_id'];
            $row[1] = '<a id="' . $data['category_id'] . '"data-toggle="modal" href="#category-view-modal">' . $data['category_name'] . '</a>';
            $row[2] = $data['sub_category_name'];
            $row[3] = '<img src="' . $data['category_icon'] . '" width="50" height="50">';
            $row[4] = ucwords($data['category_status']);

            if ($_SESSION['credential'] == 'admin')
            {
                if ($data['category_status'] == 'pending approval')
                    $row[5] =  '<a id="' . $data['category_id'] . '"data-toggle="modal" href="#category-edit-modal">Edit</a>';
                else
                    $row[5] = '';
            }
            elseif ($_SESSION['credential'] == 'superadmin')
            {
                if ($data['category_status'] == 'pending approval')
                    $row[5] =   '<a id="' . $data['category_id'] . '"data-toggle="modal" href="#category-approval-modal">Approve</a>';
                elseif ($data['category_status'] == 'approved')
                    $row[5] =   '<a id="' . $data['category_id'] . '"data-toggle="modal" href="#category-disable-modal">Disable</a>';
                elseif ($data['category_status'] == 'disabled')
                    $row[5] =   '<a id="' . $data['category_id'] . '"data-toggle="modal" href="#category-enable-modal">Enable</a>';
                else
                    $row[5] = '';
            }
                
            array_push($table, $row);
        }
    }
    if($route=="reports")
    {
        //$table_column = ['voucher', 'merchant', 'expiry_date', 'quantity', 'no_of_views', 'redeemed', 'used', 'details_reports'];
        foreach ($item as $data)
        {
            $row[0] = $data['voucher_name'];            
            $row[1] = $data['promo_merchant_name'];            
            $row[2] = $data['voucher_expiry_date'];            

            if($data['voucher_unique'] == "no")
                $row[3] = "Unlimited";
            else
                $row[3] = $data['voucher_quantity'];            

            $row[4] = '';            
            $row[5] = '';           
            $row[6] = '';            
            $row[7] = '<a>Generate Report</a>';
            array_push($table, $row);
        }
    }
    $l = array("data" => $table);
    echo json_encode($l);
?>
