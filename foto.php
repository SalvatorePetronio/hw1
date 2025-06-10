<?php

    session_start();
    if(!isset($_SESSION['user']))
    {
        header("Location: login.php");
        exit;
        
    }
    $accesskey = '6LclXoC31wut3LfDYpniG34kIUFv6Z4OgC3bgC5V_x8';
   
    $url = 'https://api.unsplash.com/photos/random';
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array("Authorization: `Client-ID $accesskey")); 
    $res=curl_exec($ch);
    curl_close($ch);

    echo  $res;
    
?>