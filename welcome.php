<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Welcome</title>
    <style>
    body {
        margin: 0;
        padding: 0;
        background-color: #262626;

    }

    ul {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        margin: 0;
        padding: 0;
        display: flex;
    }

    ul li {
        list-style: none;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 3em;
        letter-spacing: 15px;
        text-shadow: none;
        animation: animate 1s infinite linear;

    }

    @keyframes animate {
        0% {
            color: #484848;
            text-shadow: none;
        }

        18% {
            color: #484848;
            text-shadow: none;

        }

        20% {
            color: #fff900;
            text-shadow: 0 0 7px #fff900, 0 0 20px #ff6c00;
        }

        30% {
            color: #484848;
            text-shadow: none;
        }

        35% {
            color: #fff900;
            text-shadow: 0 0 7px #fff900, 0 0 20px #ff6c00;
        }

        70% {
            color: #484848;
            text-shadow: none;
        }

        85% {
            color: #fff900;
            text-shadow: 0 0 7px #fff900, 0 0 20px #ff6c00;
        }

        90% {
            color: #484848;
            text-shadow: none;
        }

        100% {
            color: #484848;
            text-shadow: none;
        }


    }

    ul li:nth-child(1) {
        animation-delay: .2s;
    }

    ul li:nth-child(2) {
        animation-delay: .4s;
    }

    ul li:nth-child(3) {
        animation-delay: .6s;
    }

    ul li:nth-child(4) {
        animation-delay: .8s;
    }

    ul li:nth-child(5) {
        animation-delay: 1s;
    }

    ul li:nth-child(6) {
        animation-delay: 1.2s;
    }

    ul li:nth-child(8) {
        animation-delay: 1.2s;
    }

    ul li:nth-child(9) {
        animation-delay: 1.4s;
    }

    ul li:nth-child(10) {
        animation-delay: 1.6s;
    }

    ul li:nth-child(11) {
        animation-delay: 1.8s;
    }

    ul li:nth-child(13) {
        animation-delay: 2s;
    }

    ul li:nth-child(14) {
        animation-delay: 2.2s;
    }

    ul li:nth-child(15) {
        animation-delay: 2.4s;
    }

    .form {
        position: relative;
        top: 14px;
    }
    </style>
</head>

<body>

    <form action="delete.php" method="post">
        <input type="submit" value="DELETE ACCOUNT" name="delete">

    </form>

    <form action="changepass.php" method="post">
        <input type="submit" value="changepass" name="changepass">
    </form>

</body>
<?php
    

    if (isset($_SESSION["login"]["username"])  && $_SESSION["login"]["password"]) {
        echo "<h2>". $_SESSION["login"]["username"] . "</h2>";
        echo '<h2 ><a style="color: red;" href="
        logout.php">Logout</a></h2>';
        // echo '<h2 ><a style="color: red;" href="delete.php">Delete this account</a></h2>';
        echo '<pre>';
        print_r($_SESSION) ;
    } else {
        header("location: index.php");
    }



    









    
    ?>
<!-- <h2><a style="color: red;" >Delete this account</a></h2> -->

<ul>
    <li>XIN </li>
    <li>CHÀO</li>
    <li>Đ</li>
    <li>I</li>
    <li>N</li>
    <li>H</li>
    <li> </li>

    <li>T</li>
    <li>U</li>
    <li>Ấ</li>
    <li>N</li>
    <li> </li>

    <li>B</li>
    <li>Ú</li>
    <li>T</li>


</ul>

</body>

</html>