<!DOCTYPE html>
<html>

<head>
    <title>Person Details Form</title>
    <style>
        h2,
        p {
            text-align: center;
        }

        body {
            font-family: Arial, sans-serif;
        }

        form {
            max-width: 500px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 3px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 8px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <h2>Person Details Form</h2>
    <form method="POST" action="#">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        <label for="account_no">Account Number:</label>
        <input type="text" id="account_no" name="account_no" required><br><br>
        <label for="ifsc_code">IFSC Code:</label>
        <input type="text" id="ifsc_code" name="ifsc_code" required><br><br>
        <label for="branch">Branch:</label>
        <input type="text" id="branch" name="branch" required><br><br>
        <label for="city">City:</label>
        <input type="text" id="city" name="city" required><br><br>
        <label for="state">State:</label>
        <input type="text" id="state" name="state" required><br><br>
        <input type="submit" value="Submit">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $account_no = $_POST["account_no"];
        $ifsc_code = $_POST["ifsc_code"];
        $branch = $_POST["branch"];
        $city = $_POST["city"];
        $state = $_POST["state"];
        echo "<h2>Person Details</h2>";
        echo "<p><strong>Name:</strong> $name</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Account Number:</strong> $account_no</p>";
        echo "<p><strong>IFSC Code:</strong> $ifsc_code</p>";
        echo "<p><strong>Branch:</strong> $branch</p>";
        echo "<p><strong>City:</strong> $city</p>";
        echo "<p><strong>State:</strong> $state</p>";
    }
    ?>
</body>

</html>
