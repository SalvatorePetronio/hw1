<?php

    session_start();
    if(!isset($_SESSION['user']))
    {
        header("Location: login.php");
        exit;
        
    }
     $apitoken = '9vJboqdtrFLOTFVNOckwtr584EhCscULmLvB6Ds';
   
    $url = 'https://api.thenewsapi.com/v1/news/all?api_token='.$apitoken.'R&language=en&limit=3';
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $res=curl_exec($ch);
    curl_close($ch);

    echo  $res;
    
?>