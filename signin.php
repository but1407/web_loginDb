<?php
session_start();

$db_locahost = 'localhost';
$db_servername = 'root';
$db_password = '';
$db_name = 'dinhtuanbut';

$conn = new mysqli($db_locahost, $db_servername, $db_password, $db_name);
if($conn -> connect_error ) {die ("connection Failed". $conn -> connect_error);}

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
    $exactPassword = $_POST['exactpassword'];
}

// $passw = password_hash($password,PASSWORD_DEFAULT);

// var_dump(password_verify($exactPassword,$pass));

if (password_verify($exactPassword,$password)) {
    if($pre = 'INSERT INTO weblogin_db (username,password)
            VALUES(?,?) '){
    $prepare = $conn->prepare($pre);
    $prepare->bind_param('si', $username, $exactPassword);
        $prepare->execute();

    header('location: unsuccessful.php');
}else{
        echo 'sign in unsuccessful';
}
}else{
    echo "<h1>Passwords do not match</h1>";
}



$conn->close();






?>