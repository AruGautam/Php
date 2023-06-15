<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<style>
    input {
        margin-top: 5px;
        margin-bottom: 5px;
    }
</style>

<body>
    <?php
    session_start();
    echo "Welcome user, " . $_SESSION['user']; ?>
    <form action="form.php" method="post">
        Name: <input type="text" name="name"><br>
        E-mail: <input type="email" name="email"><br>
        Description:<br>
        <textarea rows="9" cols="40" name="description" placeholder="Enter Text Here"></textarea>
        <br>
        <input type="submit" name="submit">
        <input type="submit" name="view" value="View">
        <input type="submit" name="clear" value="Clear">
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = $_POST['email'];
        $name = $_POST['name'];
        $desc = $_POST['description'];
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "form";
        $conn = new mysqli($servername, $username, $password, $database);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        echo "Connected successfully <br>";
        if (isset($_POST['submit'])) {
            echo "Thank You " . $name . " for filling this form <br>";
            $sql = "INSERT INTO formData1 (user_name, email,user_description) VALUES ( '$name' , 
'$email' ,'$desc')";
            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully<br>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
        if (isset($_POST['view'])) {
            echo "Details of all enteries";
            $sql = "SELECT id, user_name, email,user_description FROM formData1";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                echo '<table border="2px solid black"><tr><th>id</th><th>name</th><th>Email</th><th>Description</th></tr>';
                while ($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["id"] . " </td><td>" . $row["user_name"] . "</td><td> " . $row["email"] . "</td><td> " . $row["user_description"] . "</td></tr>";
                }
                echo '</table>';
            } else {
                echo "0 results";
            }
        }
        if (isset($_POST['clear'])) {
            echo "clear";
        }
        $conn->close();
    }
    ?>
</body>

</html>
