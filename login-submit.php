<?php
    session_start();
    require_once 'include/lib/db.php';

    $collection = 'login';
    $login = new MongoCollection($redcarpet, $collection);

    $user = $login->find(
        array(
            'email'=> $_POST['email'],
            'password' => md5($_POST['password'])
        ));

    if($user->count() == 1)
    {
        foreach($user as $data)
        {
            $_SESSION['name'] = $data['name'];
            $_SESSION['email'] = $data['email'];
            $_SESSION['credential'] = $data['credential'];
        }
        header('Location: success.php?q=log');
        die();
    }
    else
    {
        header('Location: login.php?err=1');
        die();
    }

?>
