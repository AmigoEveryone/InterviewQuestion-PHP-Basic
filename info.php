<?php
    $username = $_POST['username_php']; //posting the username value(string) from verify_ajax.js

    if(strcmp($username,"abc") == 0) //using strcmp function to compare the username
    {
        echo "1"; //return the data as true = 1
    }
    else
    {
        echo "0"; //return the data as false = 0
    }
?>