<?php
if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $pwd = $_POST['password'];
    $city = $_POST['city'];
    $mobile = $_POST['mobile'];
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname = 'hello';
    $conn = mysqli_connect($host, $user, $pass, $dbname);
        
    $sql = "INSERT INTO student(firstName,lastName,email,password,city, mobile) values ('$fname', '$lname', '$email', '$pwd', '$city', '$mobile')";
    mysqli_query($conn, $sql);
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Registration Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-
BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row col-md-6 col-md-offset-3">
            <div class="panel panel-primary">
                <div class="panel-heading text-center">
                    <h1>Registration Form</h1>
                </div>
                <div class="panel-body">
                    <form method="POST" action="#">
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" name="fname" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" class="form-control" name="lname" />
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" id="email" name="email" />
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" id="password" name="password" />
                        </div>
                        <div class="form-group">
                            <label>City</label>
                            <input type="text" class="form-control" name="city" />
                        </div>
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="number" class="form-control" name="mobile" />
                        </div>
                        <input type="submit" name="submit" value="Send Data" class="btn btnprimary" />
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</body>

</html>
