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
                            <li><a href="about.php">ABOUT TEAM</a></li>
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
<script src="./scripts/sweetalert2.all.min.js"></script>
<?php
    require ('./database.php');

    error_reporting(0);
    
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
            echo "<script>
                Swal.fire({
                    title: 'Error',
                    text: 'Fill up all fields',
                    icon: 'warning',
                    confirmButtonColor: '#121212'
                  })
                </script>";
        }else{
            $queryLogin = "SELECT * FROM admin WHERE user = '$username' AND pass = '$password'";
            $sqlLogin = mysqli_query($connection, $queryLogin);
            $rowResults = mysqli_fetch_array($sqlLogin);

            if(mysqli_num_rows($sqlLogin) > 0){
                $_SESSION['status'] = 'valid';
                $_SESSION['username'] = $rowResults['user'];
                echo "<script>
                Swal.fire({
                    title: 'Success',
                    text: 'Login Successfully',
                    icon: 'success',
                    confirmButtonColor: '#121212'
                  }).then(function() {
                      window.location.href = 'viewdata.php';
                  })
                </script>";
                //pathTo('viewdata');
            }else{
                $_SESSION['status'] = 'invalid';
                echo "<script>
                Swal.fire({
                    title: 'Error',
                    text: 'Invalid Credential',
                    icon: 'error',
                    confirmButtonColor: '#121212'
                  })
                </script>";
            }
        }
    }
?>
</body>
</html>