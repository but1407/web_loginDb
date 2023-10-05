<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
</head>

<body>
    <h2>SIGN IN</h2>
    <form action="signin.php" method="post">
        Username:<input type="text" name="username" required><br><br>
        Password:<input type="password" name="password" required><br><br>
        Rewrite password: <input type="password" name="exactpassword" required><br><br>
        <input type="submit" value="Login">
    </form>
</body>

</html>