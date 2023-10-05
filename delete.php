<?php
session_start();
// $db_locahost = 'localhost';
// $db_servername = 'root';
// $db_password = '';
// $db_name = 'dinhtuanbut';

// $conn = new mysqli($db_locahost, $db_servername, $db_password, $db_name);
// if($conn -> connect_error ) {die ("connection Failed". $conn -> connect_error);}

// if($_SERVER["REQUEST_METHOD"] == "POST") {
//     $username = $_POST['username'];
//     $password = $_POST['password'];
    
// }
// echo '<pre>';
// print_r($_SESSION) ;




// $sql = 'SELECT username, password FROM weblogin_db ';


// $query = $conn->query($sql);

// if ($query->num_rows > 0) {
//     while ($row = $query->fetch_assoc()) {
//         // echo "ID: " . $row["id"] . " - Username: " . $row["username"] . " - Email: " . $row["email"] . "<br>";
//         $username = $row["username"];
//         $password = $row["password"];
//     }
// } else {
//     echo "Không có dữ liệu.";
// }

// // print_r($query) ;
// $delete = 'DELETE FROM weblogin_db WHERE username =?';

// if ($prepared = $conn->prepare($delete)) {
    
//     $prepared->bind_param('s', $username);
//     $prepared->execute();
//     echo 'delete thanh cong';
//     print_r($_POST['username']);
//     echo '<h1><a href="index.php">Turn back Login</a></h1>';

// }


// $conn->close();
// $query->close();
// $prepared->close();



$db_locahost = 'localhost';
$db_servername = 'root';
$db_password = '';
$db_name = 'dinhtuanbut';

$conn = new mysqli($db_locahost, $db_servername, $db_password, $db_name);
if($conn -> connect_error ) {die ("connection Failed". $conn -> connect_error);}


// echo '<pre>';

// print_r($_SESSION);


if(isset($_POST['delete'])){
    $id=$_SESSION["login"]["user_id"];
    $username = $_SESSION["login"]["username"];
    $password = $_SESSION["login"]["password"] ;
    // echo $username;
    $sql = "DELETE FROM weblogin_db WHERE id= ?";

    if($result = $conn->prepare($sql)){
        $result->bind_param('i', $id);
        $result->execute();
        echo "Delete Successfully";
        echo '<h2 ><a style="color: red;" href="index.php">Turn back to Login</a></h2>';
    }else{
        echo    "Lỗi truy vấn SQL: ".$mysqli->errno." : ". $mysqli->error;
    }




}

$conn->close();
$result->close();
?>