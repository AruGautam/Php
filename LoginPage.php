<!DOCTYPE html>
<html>

<head>
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="container">
        <form action="login.php" method="post">
            <h1>Login Page</h1>
            <label for="username"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" required><br>

            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required><br>

            <button type="submit">Login</button>
        </form>
        <!-- <button><a style="text-decoration:none;color:black" href="credentials.php">NEW USER</a></button><br> -->
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') 
        {

            $username = $_POST['username'];
            $password = $_POST['password'];

            $servername = "localhost";
            $usernam = "root";
            $passwor = "";
            $database = "loginpage";

            $conn = mysqli_connect($servername, $usernam, $passwor, $database);

            $sql = "SELECT username,pwd FROM cred where username='$username'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0)
                while ($row = $result->fetch_assoc()) {
                    if ($username == $row['username'] && $password == $row['pwd']) {
                        //session_start();
                        //$_SESSION['user'] = $username;
                        echo "connection established";
                    } else {
                        echo "Invalid password<br>";
                    }
                }
            else
                echo "Invalid Username";

            // if ($username == 'admin' && $password == 'password') {
            //     echo 'Welcome, ' . $username . '!';
            //     session_start();
            //     $_SESSION['user'] = $username;
            //     header("Location: form.php");

            // } 
            // else {
            //     echo 'Invalid username or password.';
            // }

        }
        ?>

    </div>
</body>

</html>
