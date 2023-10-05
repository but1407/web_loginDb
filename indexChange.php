<?php


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>CHANGE PASSWORD</h2>
    <form action="changepass.php" method="post">
        current password:<input type="text" name="currentpass" required><br><br>
        New Password:<input type="password" name="newpassword" required><br><br>
        <!-- Rewrite password: <input type="password" name="exact_password" required><br><br> -->
        <input type="submit" value="Change" name='change'>
    </form>
</body>

</html>