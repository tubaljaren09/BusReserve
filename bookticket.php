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
    
    if(isset($_POST['submit'])){
        $lastName = $_POST['lname'];
        $firstName = $_POST['fname'];
        $middleName = $_POST['mname'];
        $gender = $_POST['gender'];
        $age = $_POST['age'];
        $address = $_POST['address'];
        $contactNumber = $_POST['contactnumber'];
        $email = $_POST['email'];
        $q1 = $_POST['q1'];
        $q2 = $_POST['q2'];
        $q3 = $_POST['q3'];

        $route = $_POST['route'];
        $bus = $_POST['bus'];
        $departure = $_POST['departure'];

        if ($route == 'Manila to Cebu'){
            $price = 1000;
        }

        if ($route == 'Manila to Bicol'){
            $price = 800;
        }

        if ($route == 'Manila to Bataan'){
            $price = 500;
        }

        $queryRegister = "INSERT INTO covid_tracing_form(lastName, firstName, middleName, gender, age, address, contactNumber, email, question1, question2, question3) 
        VALUES ('$lastName', '$firstName', '$middleName', '$gender', '$age', '$address', '$contactNumber', '$email', '$q1', '$q2', '$q3')";
        $queryRegister2 = "INSERT INTO ticket_form(owner_id, route, bus, departure, price) 
        VALUES ((SELECT id from covid_tracing_form WHERE email='$email'), '$route', '$bus', '$departure', '$price')";
        $sqlRegister = mysqli_query($connection, $queryRegister);
        $sqlRegister2 = mysqli_query($connection, $queryRegister2);

        //echo "<script>alert('Registered')</script>";
    }
?>
<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BRTMA</title>
    <link rel="stylesheet" href="./styles/bookticket.css">
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
                            <li><a class="active" href="bookticket.php">BOOK TICKET</a></li>
                            <li><a href="about.php">ABOUT TEAM</a></li>
                            <li><a href="admin.php">ADMIN</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-middle">
            <div class="container-middle">
                <!--PLACE BUTTON HERE-->
                <form id="form1" action="/BusReserve/bookticket.php" method="post">
                    <div class="form-greet">
                        <h1>Covid-19 Tracing Form</h1>
                        <h4>PLEASE FILL OUT THE FORM COMPLETELY.</h4>
                    </div>
                    <div class="form-top">
                        <div class="content">
                            <label>Last name:</label>
                            <input type="text" name="lname" required>
                        </div>
                        <div class="content">
                            <label>First name:</label>
                            <input type="text" name="fname" required>
                        </div>
                        <div class="content">
                            <label>Middle name:</label>
                            <input type="text" name="mname" required>
                        </div>
                        <div class="content">
                            <label>Gender:</label>
                            <input type="radio" name="gender" value="Male">
                            <label>Male</label>
                            <input type="radio" name="gender" value="Female">
                            <label>Female</label>
                        </div>
                        <div class="content">
                            <label>Age:</label>
                            <input type="text" name="age" required>
                        </div>
                        <div class="content">
                            <label>Address:</label>
                            <input type="text" name="address" required>
                        </div>
                        <div class="content">
                            <label>Contact Number:</label>
                            <input type="text" name="contactnumber" required>
                        </div>
                        <div class="content">
                            <label>Email Address:</label>
                            <input type="text" name="email" required>
                           </div>
                    </div>
                    <div class="form-bottom">
                        <div class="content">
                            <label>Have you traveled outside the country anytime from December 2019 'til now?</label><br><br>
                            <label>Yes</label>
                            <input type="radio" name="q1" value="Yes">
                            <label>No</label>                       
                            <input type="radio" name="q1" value="No">
                        </div>
                        <div class="content">
                            <label>Have you come into contact with anyone who has Covid-19?</label><br><br>
                            <label>Yes</label>
                            <input type="radio" name="q2" value="Yes">
                            <label>No</label>                       
                            <input type="radio" name="q2" value="No">
                        </div>
                        <div class="content">
                            <label>Are you currently experiencing any of the following conditions during this time? (Fever, Cough, Difficulty in breathing, Headache):</label><br><br>
                            <label>Yes</label>
                            <input type="radio" name="q3" value="Yes">
                            <label>No</label>                       
                            <input type="radio" name="q3" value="No">
                        </div>
                    </div>
                <div id="simpleModal" class="modal">
                    <div class="modal-content">
                        <span class="closeBtn">&times;</span>
                        <div class="form-greet">
                            <h1>Ticket Details</h1>
                            <h4>PLEASE FILL OUT THE FORM COMPLETELY.</h4>
                        </div>
                        <div style="margin-top:5px;"></div>
                        <div class="content">
                            <label>Route:</label>
                            <select name="route" id="route">
                                <option selected disabled>Select a route</option>
                                <option value="Manila to Cebu">Manila - Cebu</option>
                                <option value="Manila to Bicol">Manila - Bicol</option>
                                <option value="Manila to Bataan">Manila - Bataan</option>
                            </select>
                        </div>
                        <div style="margin-top:5px;"></div>
                        <div class="content">
                            <label>Bus:</label>
                            <select name="bus" id="bus">
                                <option selected disabled>Select a bus</option>
                                <option value="Bus 1">Bus 1</option>
                                <option value="Bus 2">Bus 2</option>
                                <option value="Bus 3">Bus 3</option>
                            </select>
                        </div>
                        <div style="margin-top:5px;"></div>
                        <div class="content">
                            <label>Departure Date And Time:</label>
                            <input type="datetime-local" id="departure" name="departure">
                        </div>
                        <div class="content">
                            <label>Ticket Price:</label>
                            <label id="price"></label>
                        </div>
                        <input type="submit" id="submit-form" class="hidden" name="submit"> 
                </form>
                        <div style="margin-top:20px;"></div>
                        <label class="submitBtn" for="submit-form" tabindex="0">Submit</label>
                    </div>
                </div>
                <div class="buttonnext">
                    <button id="modalBtn" name="next">Next</button>
                </div>
            </div>
         </div>
        <div class="main-bottom">
            <div class="content">
                <h3>Copyright &copy; 2021</h3>
            </div>
        </div>
    </div>
<script src="./scripts/bookticket.js"></script>
<script src="./scripts/sweetalert2.all.min.js"></script>
</body>
</html>