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
    $password = $_POST['password'];
    
}

// if (empty($username) || empty($password)) {
//     echo ('empty username or password');
//     exit();
// }

$pre ='SELECT id,username,password FROM weblogin_db WHERE username = ?';
$prepare = $conn->prepare($pre);


$prepare ->bind_param('s', $username);
$prepare ->execute();

$prepare ->bind_result($dbUserId,$dbUsername,$dbPassword);
$prepare->fetch();
// var_dump($prepare->fetch());
// die();
// $prepare->store_result();
// $prepare ->execute();

$pass = password_hash($dbPassword,PASSWORD_BCRYPT);
// var_dump($pass);
// $row = mysqli_fetch_assoc();

var_dump(password_verify($password, $pass));
echo $password;
echo '<br>';
print_r ($pass );
echo '<br>';
echo $dbPassword;
if (password_verify($password, $pass)) {
    $_SESSION["login"]["user_id"] = $dbUserId;
    $_SESSION["login"]["username"] = $dbUsername;
    $_SESSION["login"]["password"] = $dbPassword;
    header("Location: welcome.php");

} else {
    echo '<h1>wrong username or password</h1>';

    // echo $password;
    // echo '<br>';
    // print_r($_POST['username']);
    // echo '<br>';
    // print_r($_POST['password']);
    // echo '<br>';
    // echo '<pre>';
    // print_r($_SESSION);
}

// echo '<br>';
// echo 'pass: '. $password;
// echo '<br>';
// echo $username;
// echo '<br>';
// echo 'bdpass: '.$dbPassword;
// echo '<br>';
// echo 'dbuser: '.$dbUsername;
// echo '<br>';

    
    



$conn->close();
$prepare->close();


?>