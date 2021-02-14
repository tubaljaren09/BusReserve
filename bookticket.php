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
                            <li><a href="#">ABOUT US</a></li>
                            <li><a href="#">ABOUT BUS</a></li>
                            <li><a href="admin.php">ADMIN</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-middle">
            <div class="container-middle">
                <form action="/BusReserve/bookticket.php" method="post">
                    <div class="form-greet">
                        <h1>Covid-19 Tracing Form</h1>
                        <h4>PLEASE FILL OUT THE FORM COMPLETELY.</h4>
                    </div>
                    <div class="form-top">
                        <div class="content">
                            <label>Last name:</label>
                            <input type="text" name="lname">
                        </div>
                        <div class="content">
                            <label>First name:</label>
                            <input type="text" name="fname">
                        </div>
                        <div class="content">
                            <label>Middle name:</label>
                            <input type="text" name="mname">
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
                            <input type="text" name="age">
                        </div>
                        <div class="content">
                            <label>Address:</label>
                            <input type="text" name="address">
                        </div>
                        <div class="content">
                            <label>Contact Number:</label>
                            <input type="text" name="contactnumber">
                        </div>
                        <div class="content">
                            <label>Email Address:</label>
                            <input type="text" name="email">
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
                        <button>SUBMIT</button>
                    </div> 
                </form>
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