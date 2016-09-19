<?php
session_start();
require_once 'include/lib/db.php';

$collection = 'category';
$category = new MongoCollection($redcarpet, $collection); 
$uploadDirectory = 'uploads/';
$categoryData = array();

if(isset($_POST['operation']) and $_POST['operation'] == 'edit')
{
    $category->update(
        array('category_id' => $_POST['category_id']),
        array(
            '$set' => array(
                        'category_name' => $_POST['category_name_edit'],
                        'sub_category_name' => $_POST['sub_category_name_edit']
                    )
        )
    );

    if($_FILES['category_icon_edit']['error'] == 0 and $_FILES['category_icon_edit']['size'] > 0)
    {
        $uploadSubDirectory = 'icon/';
        $imageURL = $uploadDirectory . $uploadSubDirectory . $_FILES['category_icon_edit']['name'];
        move_uploaded_file($_FILES['category_icon_edit']['tmp_name'], $imageURL);
        $category->update(
            array('category_id' => $_POST['category_id']),
            array(
                '$set' => array('category_icon' => $imageURL)
            )
        );

    }

    if($_FILES['category_background_edit']['error'] == 0 and $_FILES['category_background_edit']['size'] > 0)
    {
        $uploadSubDirectory = 'background/';
        $imageURL = $uploadDirectory . $uploadSubDirectory . $_FILES['category_background_edit']['name'];
        move_uploaded_file($_FILES['category_background_edit']['tmp_name'], $imageURL);

        $category->update(
            array('category_id' => $_POST['category_id']),
            array(
                '$set' => array('category_background' => $imageURL)
            )
        );
    }
}
else
{
    $categoryData['category_status'] = $_POST['category_status'];
    $categoryData['category_id'] = $_POST['category_id'];
    $categoryData['category_name'] = $_POST['category_name'];
    $categoryData['sub_category_name'] = $_POST['sub_category_name'];

    if($_FILES['category_icon']['error'] == 0)
    {
        $uploadSubDirectory = 'icon/';
        $imageURL = $uploadDirectory . $uploadSubDirectory . $_FILES['category_icon']['name'];
        move_uploaded_file($_FILES['category_icon']['tmp_name'], $imageURL);
        $categoryData['category_icon'] = $imageURL;
    }

    if($_FILES['category_background']['error'] == 0)
    {
        $uploadSubDirectory = 'background/';
        $imageURL = $uploadDirectory . $uploadSubDirectory . $_FILES['category_background']['name'];
        move_uploaded_file($_FILES['category_background']['tmp_name'], $imageURL);
        $categoryData['category_background'] = $imageURL; 
    }

    $category->save($categoryData);
}

?>
