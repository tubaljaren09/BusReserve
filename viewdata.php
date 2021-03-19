<?php 
    require ('./database.php');
    require ('./session.php');

    error_reporting(0);
    
    $queryAccounts = "SELECT * FROM ticket_form";
    $queryCovid = "SELECT * FROM covid_tracing_form";
    $sqlAccounts = mysqli_query($connection, $queryAccounts);
    $sqlCovid = mysqli_query($connection, $queryCovid);

    if(isset($_POST['logout'])){
        $_SESSION['status'] = 'invalid';
        unset($_SESSION['username']);
        pathTo('admin');
    }
?>
<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BRTMA</title>
    <link rel="stylesheet" href="./styles/viewdata.css">
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
                    <div class="admin">
                        <img src="./images/adminlogo.png">
                        <h2><?php echo $_SESSION['username'] ?></h2>
                    </div>
                    <h1>Covid Tracing Form</h1>
                    <div class="info-table">
                        <table>
                            <tr>
                                <th>ID</th>
                                <th>LAST NAME</th>
                                <th>FIRST NAME</th>
                                <th>MIDDLE NAME</th>
                                <th>GENDER</th>
                                <th>AGE</th>
                                <th>ADDRESS</th>
                                <th>CONTACT NUMBER</th>
                                <th>EMAIL</th>
                                <th>Question 1</th>
                                <th>Question 2</th>
                                <th>Question 3</th>
                            </tr>
                            <?php while($results = mysqli_fetch_array($sqlCovid)) { ?>
                            <tr>
                                <td><?php echo $results['id'] ?></td>
                                <td><?php echo $results['lastName'] ?></td>
                                <td><?php echo $results['firstName'] ?></td>
                                <td><?php echo $results['middleName'] ?></td>
                                <td><?php echo $results['gender'] ?></td>
                                <td><?php echo $results['age'] ?></td>
                                <td><?php echo $results['address'] ?></td>
                                <td><?php echo $results['contactNumber'] ?></td>
                                <td><?php echo $results['email'] ?></td>
                                <td><?php echo $results['question1'] ?></td>
                                <td><?php echo $results['question2'] ?></td>
                                <td><?php echo $results['question3'] ?></td>
                            </tr>
                            <?php } ?>
                        </table>
                    </div>
                    <h1>Ticket Details</h1>
                    <div class="ticket-table">
                        <table>
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
                    </div>
                    <form action="/BusReserve/viewdata.php" method="post">
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