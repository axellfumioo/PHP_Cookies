<?php
    {
    $user = $_COOKIE['username'];
    }
    if (empty($user))
    {
        echo "Can't find cookies.";
    }
    else
    {
    echo "Welcome! Your name is $user! :D";
    }
?>