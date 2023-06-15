<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "geu");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Update data
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["update"])) 
{
    $id = $_POST["id"];
    $name = $_POST["name"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    // SQL query to update data in the table
    $sql = "UPDATE info SET name='$name', age='$age', gender='$gender' WHERE id='$id'";
    if ($conn->query($sql) === TRUE) {
        echo "Data updated successfully.";
    } else {
        echo "Error updating data: " . $conn->error;
    }
}
// Delete data
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete"])) 
{
    $id = $_POST["id"];
    // SQL query to delete data from the table
    $sql = "DELETE FROM info WHERE id='$id'";
    if ($conn->query($sql) === TRUE) {
        echo "Data deleted successfully.";
    } else {
        echo "Error deleting data: " . $conn->error;
    }
}
// Close the database connection
$conn->close();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Update and Delete Data</title>
</head>
<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
    }

    h2 {
        text-align: center;
    }

    form {
        width: 30%;
        margin: 0 auto;
    }

    input[type=text],
    input[type=number] {
        width: 100%;
        padding: 12px;
        margin: 6px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    input[type=submit] {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 12px;
        margin: 6px 0;
        border: none;
        box-sizing: border-box;
        font-size: 16px;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }
</style>

<body>
    <h2>Update and Delete Data</h2>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="id">ID:</label>
        <input type="number" name="id" required>
        <br><br>
        <label for="name">Name:</label>
        <input type="text" name="name" required>
        <br><br>
        <label for="age">Age:</label>
        <input type="number" name="age" required>
        <br><br>
        <label for="gender">Gender:</label>
        <input type="text" name="gender" required>
        <br><br>
        <input type="submit" name="update" value="Update">
        <input type="submit" name="delete" value="Delete">
    </form>
</body>

</html>
