<?php 
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
?>
<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BRTMA</title>
    <link rel="stylesheet" href="./styles/index.css">
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
                            <li><a class="active" href="index.php">HOMEPAGE</a></li>
                            <li><a href="bookticket.php">BOOK TICKET</a></li>
                            <li><a href="about.php">ABOUT TEAM</a></li>
                            <li><a href="#">ABOUT BUS</a></li>
                            <li><a href="admin.php">ADMIN</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-middle">
            <div class="container-middle">
                <div class="content">
                    <h1>Bus Ticket Reservation made easier</h1>
                    <h3>WE AIM TO PROVIDE MORE CONVENIENT TICKET BOOKING.</h3><br>
                    <img src="./images/pics02.jpg">
                    <h4>In compliance to minimum health protocols, temperature checks are being implemented to all passengers. Those with<br>temperatures above 37.6 will not allowed to board the bus and will be advised to seek medical help. Wearing of face<br>masks and face shields at all times is required.</h4><br>
                    <button id="book">BOOK TICKET NOW</button>
                </div>
            </div>
        </div>
        <div class="main-bottom">
            <div class="content">
                <h3>Copyright &copy; 2021</h3>
            </div>
        </div>
    </div>
    <script src="./scripts/index.js"></script>
</body>
</html>