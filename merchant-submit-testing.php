<?php
session_start();
if(isset($_POST['data'])) 
{
    $json = $_POST['data'];
    echo var_dump(json_decode($json, true));
} 
else 
{
    echo "Noooooooob";
}
?>
