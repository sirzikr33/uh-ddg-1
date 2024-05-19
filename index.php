<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
    if (!$_SESSION['siswa-login']){
        header("Location: login.php");
    }

    $user = $_SESSION['siswa-login'];
    ?>
    <h1>Welcome</h1>
</body>
</html>