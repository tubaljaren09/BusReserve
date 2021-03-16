<?php 
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'bus_reserve_db';

    $connection = mysqli_connect($host, $user, $password, $database);

    if(mysqli_connect_error()){
        echo 'Unable to connect';
    }
    $queryAccounts = "SELECT * FROM ticket_form";
    $sqlAccounts = mysqli_query($connection, $queryAccounts);

    if(isset($_POST['logout'])){
        echo "<script>window.location.href='/BusReserve/admin.php'</script>";
    }
?>
<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BRTMA</title>
    <link rel="stylesheet" href="./styles/database.css">
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
                    <table class="read-db">
                        <tr>
                            <th>ID</th>
                            <th>ROUTE</th>
                            <th>DATE</th>
                        </tr>
                        <?php while($results = mysqli_fetch_array($sqlAccounts)) { ?>
                        <tr>
                            <td><?php echo $results['id'] ?></td>
                            <td><?php echo $results['route'] ?></td>
                            <td><?php echo $results['date'] ?></td>
                        </tr>
                        <?php } ?>
                    </table>
                    <form action="/BusReserve/database.php" method="post">
                        <input type="submit" name="logout" value="LOGOUT">
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
</body>
</html>