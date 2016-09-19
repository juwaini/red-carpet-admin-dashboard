<?php
    session_start();
    require_once 'include/lib/db.php';

    $collection = 'login';
    $login = new MongoCollection($redcarpet, $collection);

    if($login->find(array('email'=> $_POST['email']))->count()>0)
    {
        header('Location: register.php?err=1');   
        die();     
    }
    else
    {
        
        $login->save(
            array(
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'password' => md5($_POST['password']),
                'credential'=> 'user'
            ));
        header('Location: success.php?q=reg');   
        die();     

    }
?>
