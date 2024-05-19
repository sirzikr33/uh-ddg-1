<?php
include_once 'Connect.php';
if(isset($_POST['Login'])){
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
    
    $siswa = $Connect
    ->query("SELECT * FROM siswa where Username = '$Username' && Password = '$Password'")
    ->fetch_assoc();

    session_start();
    $_SESSION['siswa-login'] = $siswa;
    header("Location: index.php");


}

?>