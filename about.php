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
    <link rel="stylesheet" href="./styles/about.css">
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
                            <li><a class="active" href="about.php">ABOUT TEAM</a></li>
                            <li><a href="admin.php">ADMIN</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-middle">
            <div class="container-middle">
                <h1>My Team</h1>
                <div class="content-left">
                    <img id="ferrerialogo" src="./images/ferrerialogo.png">
                    <div class="text">
                        <h2>Jeremy Ferreria</h2>
                    </div>
                </div>
                <div class="content-right">
                    <img id="lumansoclogo" src="./images/lumansoclogo.png" alt="lumansoclogo">
                    <div class="text">
                        <h2>Klim Hazel Lumansoc</h2>
                    </div>
                </div>
                <div class="content-left">
                    <img id="medinalogo" src="./images/medinalogo.png" alt="medinalogo">
                    <div class="text">
                        <h2>Christian Lambert Medina</h2>
                    </div>
                </div>
                <div class="content-right">
                    <img id="sillanologo" src="./images/sillanologo.png" alt="sillanologo">
                    <div class="text">
                        <h2>Paula Monique Sillano</h2>
                    </div>
                </div>
                <div class="content-left">
                    <img id="tuballogo" src="./images/tuballogo.png" alt="tuballogo">
                    <div class="text">
                        <h2>Jaren Tubal</h2> 
                    </div>
                </div>
                <div class="content-right">
                    <img id="vasquezlogo" src="./images/vasquezlogo.png" alt="vasquezlogo">
                    <div class="text">
                        <h2>Anya Vasquez</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-bottom">
            <div class="content">
                <h3>Copyright &copy; 2021</h3>
            </div>
        </div>
    </div>
</body>
</html>