<?php

    session_start();
    if(!isset($_SESSION['user']))
    {
        header("Location: login.php");
        exit;
    }


    $colleg = $_POST['l'];
    
      $conn = mysqli_connect('localhost', 'root', '', 'hw') or die(mysqli_error($conn));
        $colleg =mysqli_real_escape_string($conn, $colleg);
        $user = mysqli_real_escape_string($conn, $_SESSION['user']);
       $query = "INSERT INTO mipiace(user_id, link) VALUES('$user', '$colleg')";
       mysqli_query($conn, $query);
       mysqli_close($conn);

?>