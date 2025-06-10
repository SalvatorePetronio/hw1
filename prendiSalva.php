<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}

$conn = mysqli_connect('localhost', 'root', '', 'hw') or die(mysqli_error($conn));

$user = mysqli_real_escape_string($conn, $_SESSION['user']);

$query = "SELECT * FROM salvati WHERE user_id='$user'";
$res = mysqli_query($conn, $query);

$results = array();
while ($row = mysqli_fetch_assoc($res)) {
    $results[] = $row;
}

mysqli_close($conn);
echo json_encode($results);
?>