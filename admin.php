<?php
    require ('./database.php');

    session_start();

    function pathTo($destination){
        echo "<script>window.location.href='/BusReserve/$destination.php'</script>";
    }

    if($_SESSION['status'] == 'invalid' || empty($_SESSION['status'])){
        $_SESSION['status'] = 'invalid';
    }

    if($_SESSION['status'] == 'valid'){
        pathTo('viewdata');
    }

    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        if(empty($username) || empty($password)){
            echo "<script>alert('Fill up all fields')</script>";
        }else{
            $queryLogin = "SELECT * FROM admin WHERE user = '$username' AND pass = '$password'";
            $sqlLogin = mysqli_query($connection, $queryLogin);
            $rowResults = mysqli_fetch_array($sqlLogin);

            if(mysqli_num_rows($sqlLogin) > 0){
                $_SESSION['status'] = 'valid';
                $_SESSION['username'] = $rowResults['user'];
                echo "<script>alert('You have successfully signed in')</script>";
                pathTo('viewdata');
            }else{
                $_SESSION['status'] = 'invalid';
                echo "<script>alert('Failed')</script>";
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BRTMA</title>
    <link rel="stylesheet" href="./styles/admin.css">
</head>
<body>
    <div class="main">
        <div class="main-top">
            <div class="container-top">
                <div class="top">
                    <div class="content">
                        <h1>BUS TICKET RESERVATION</h1>
                        <h3>WITH MEDICAL APPREHENSION</h3>
                    </div>
                </div>
                <div class="bottom">
                    <div class="content">
                        <ul>
                            <li><a href="index.php">HOMEPAGE</a></li>
                            <li><a href="bookticket.php">BOOK TICKET</a></li>
                            <li><a href="#">ABOUT US</a></li>
                            <li><a href="#">ABOUT BUS</a></li>
                            <li><a class="active" href="admin.php">ADMIN</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-middle">
            <div class="container-middle">
                <div class="content">
                    <form action="/BusReserve/admin.php" method="post">
                        <div class="content">
                            <h1>Login</h1>
                        </div>
                        <div class="content">
                            <label>Username:</label>
                            <input type="text" name="username">   
                        </div>
                        <div class="content">
                            <label>Password:</label>
                            <input type="password" name="password">
                        </div>
                        <div class="content">
                            <input type="submit" name="login" value="LOGIN">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="main-bottom">
            <div class="content">
                <h3>Copyright &copy; 2021</h3>
            </div>
        </div>
    </div>
    <script src="./scripts/admin.js"></script>
</body>
</html>