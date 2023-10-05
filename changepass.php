<?php
session_start();
// include 'login.php';
$db_locahost = 'localhost';
$db_servername = 'root';
$db_password = '';
$db_name = 'dinhtuanbut';

$conn = new mysqli($db_locahost, $db_servername, $db_password, $db_name);
if($conn -> connect_error ) {die ("connection Failed". $conn -> connect_error);}

var_dump(isset($_POST["changepass"]));

if(isset($_POST["changepass"])   ) {
    // print_r($_SESSION["login"]["password"]);
    // $password = $_SESSION["login"]["password"];
    // $id = $_SESSION["login"]["user_id"];

    header("location: indexChange.php");
    
    // echo $password;
}
// echo '<br>';
// echo '<pre>';
// print_r($_SESSION);

if(isset($_POST["change"])) {
    
    // echo $password;
    
    $currentpassword = password_hash($_POST['currentpass'], PASSWORD_DEFAULT);
    $newPassword = $_POST['newpassword'];
    $password = $_SESSION["login"]["password"];
    $id = $_SESSION["login"]["user_id"];
    
    
        // echo '<pre>';
        // print_r($_SESSION);

        // echo $password;
        
    }


    $sql = "UPDATE weblogin_db SET password= ? WHERE id=?";
    $result = $conn->prepare($sql);
// print_r($_SESSION);
if(password_verify($password,$currentpassword)){
    if ($result) {
        $result->bind_param("ii",$newPassword, $id );
        $result->execute();
        echo "Change Password Successfully";
        echo '<h2 ><a style="color: red;" href="welcome.php">Turn back to Login</a></h2>';
    }else{
        echo "Change Password Failed";
    }
}else{
        echo "wrong current Password";

}


$result->close();
$conn->close();
?>