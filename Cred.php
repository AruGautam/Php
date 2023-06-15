<!DOCTYPE html>
<html>

<head>
    <title>new user registration</title>
</head>

<body>
    <form action="credentials.php" method="POST">
        Name:<input type="text" placeholder="username" name="username"><br>
        password:<input type="password" name="password1"><br>
        confirm password:<input type="password" name="password2">
        <input type="submit" name = "submit">
    </form>
    <?php
    if (isset($_POST['submit'])) 
    {
        $uname = $_POST['username'];
        $password1 = $_POST['password1'];
        $password2 = $_POST['password2'];
        if ($uname == "")
            echo "username cannot be null";
        else if ($password1 != $password2)
            echo "passwords does not match ";
        else if (strlen($password1) < 8)
            echo "password shouls have minimum 8 characters";
        else 
        {
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "loginpage";
            $conn = mysqli_connect($servername, $username, $password, $database);
            if (!$conn) {
                die("Connection failed");
            }
            echo "Connected successfully <br>";
            $sql = "SELECT username,pwd FROM cred where username='$uname'";
            //$sql="SELECT id, user_name, email,user_description FROM formData1";
            echo $uname . " " . $password1 . " <br>";
            $sql = "INSERT INTO cred (username, pwd) VALUES ( '$uname' , '$password1' )";
            if ($conn->query($sql))
                echo "New record created successfully<br>";
            else
                echo "Error: " . $sql . "<br>" . $conn->error;
            
        }
    }
    ?>
</body>
</html>
