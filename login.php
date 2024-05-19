<html>
<head>
    <title>Login Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="Login-form">
        <h2>Login</h2>
        <form method="post" action="process_login.php">
            <input type="text" placeholder="Username" name="Username" required>
            <input type="password" placeholder="Password" name="Password" required>
            <button type="submit" name="Login">Login</button>
            <p>Apakah kamu tidak memiliki akun?<a href="Register.php">Register</a></p>
        </form>
    </div>
</body>
</html>