<?php
    session_start();
    header('refresh:3;url=.');
    switch($_GET['q'])
    {
    case 'log': 
        echo '<p>Login success...</p>';
        break;
    case 'reg':
        echo '<p>Your registration is successful. Please wait for the admin to approve your registration.</p>';
        break;
    case 'usr':
        echo '<p>Please wait for the admin to approve your registration.</p>';
    default:
        break;
    }
    echo '<p>You\'ll be re-directing in 3 seconds. Or please click <a href=".">here</a>.</p>';
?>
