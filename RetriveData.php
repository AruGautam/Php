<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    if (isset($_POST['submit'])) 
    {
        $name = $_POST['name'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];

        // Database connection
        $conn = mysqli_connect("localhost", "root", "", "data");
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        // SQL query to retrieve data from the table
        $sql = "INSERT into t(name,age,gender) values ('$name','$age','$gender')";
        if (mysqli_query($conn, $sql))
            echo "inserted";
    }
    $sql = "SELECT * FROM t";
    $result = $conn->query($sql);
    // Check if there are any records
    if ($result->num_rows > 0) 
    {

        echo "<h2>Data from Database</h2>";
        echo "<table>";
        echo "<tr><th>Name</th><th>Age</th><th>Gender</th></tr>";
        // Output data of each row
        while ($row = $result->fetch_assoc()) 
        {
            echo "<tr><td>" . $row["name"] . "</td><td>" . $row["age"] . "</td><td>" . $row["gender"] . "</td></tr>";
        }
        echo "</table>";
    } 
    else 
    {
        echo "No data found.";
    }
    // Close the database connection
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
    }

    h2 {
        text-align: center;
    }

    table {
        width: 50%;
        margin: 30px auto;
        border-collapse: collapse;
        text-align: left;
    }

    tr {
        border-bottom: 1px solid #cbcbcb;
    }

    th,
    td {
        border: none;
        height: 30px;
        padding: 2px;
    }

    tr:hover {
        background: #F5F5F5;
    }
</style>

<body>
    <form method="POST">
        name: <input type="text" name="name">
        age : <input type="number" name="age">
        gender: <input type="text" name="gender">
        <input type="submit" name="submit">
    </form>
</body>

</html>
