<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}


$conn = mysqli_connect('localhost', 'root', '', 'hw') or die(mysqli_error($conn));


$link = $_POST['l'];
$link = mysqli_real_escape_string($conn, $link);
$user = mysqli_real_escape_string($conn, $_SESSION['user']);


$query = "DELETE FROM mipiace WHERE link='$link' AND user_id='$user'";
mysqli_query($conn, $query);

mysqli_close($conn);
?>