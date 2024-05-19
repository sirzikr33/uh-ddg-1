<?php
include_once 'connect.php';

if(isset($_POST['Register'])){
$Email = $_POST['Email'];
$Username = $_POST['Username'];
$Password = $_POST['Password'];

    $database = $Connect->query("INSERT into siswa
    (Email, Username, Password) 
    values
    ('$Email', '$Username', '$Password') 
    ");

    if($database){
        echo "data berhasil masuk";
    }else{
        echo "data gagal masuk";
    }

    header("Location: login.php");
}

?>