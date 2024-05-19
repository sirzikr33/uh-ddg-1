<html>
<head>
    <title>Register Form</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>
    <div class="Register-form">
        <h2>Register</h2>
        <form method="post" action="process_register.php">
            <input type="text" placeholder="Email" name="Email" required>
            <input type="text" placeholder="Username" name="Username" required>
            <input type="password" placeholder="Password" name="Password" required>
            <button type="submit" name="Register">Register</button>
            <p>Apakah kamu punya akun?<a href="Login.php">Login</a></p>
        </form>
    </div>
</body>
</html>