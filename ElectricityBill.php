<?php
$result_str = $result = '';
$name = '';
$custno = '';
if (isset($_POST['submit'])) 
{
    $units = $_POST['units'];
    $name = $_POST['name'];
    $custno = $_POST['custno'];
    if (!empty($units)) 
    {
        $result = calculate_bill($units);
        $result_str = 'Total units are : ' . $units . ' and the bill is : ' . $result;
    }
}

function calculate_bill($units)
{
    $unit_cost_first = 3.00;
    $unit_cost_second = 4.00;
    $unit_cost_third = 5.00;
    $unit_cost_fourth = 6.00;
    if ($units <= 100) {
        $bill = $units * $unit_cost_first;
    } else if ($units > 100 && $units <= 200) 
    {
        $temp = 100 * $unit_cost_first;
        $remaining_units = $units - 100;
        $bill = $temp + ($remaining_units * $unit_cost_second);
    } 
    else if ($units > 200 && $units <= 300) {
        $temp = (100 * 3.00) + (200 * $unit_cost_second);
        $remaining_units = $units - 200;
        $bill = $temp + ($remaining_units * $unit_cost_third);
    } 
    else 
    {
        $temp = (100 * 3.0) + (200 * $unit_cost_second) + (300 * $unit_cost_third);
        $remaining_units = $units - 300;
        $bill = $temp + ($remaining_units * $unit_cost_fourth);
    }
    return number_format((float) $bill, 2, '.', '');
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Electricity Consumption Form</title>
</head>

<body>
    <h2>Electricity Consumption Form</h2>
    <form method="POST" action="#">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <label for="Customer Number">Customer Number:</label>
        <input type="text" id="custno" name="custno" required>
        <label for="meterNumber">Meter Number:</label>
        <input type="text" id="meterNumber" name="meterNumber" required>
        <label for="previousReading">Previous Reading:</label>
        <input type="number" id="previousReading" name="previousReading" required>
        <label for="currentReading">Current Reading:</label>
        <input type="number" id="units" name="units" required>
        <input type="button" name="submit" value="Submit">
    </form>
    <div>
        <?php
        echo '<br />' . "The name of the person is : " . $name;
        echo '<br>' . "The Customer Number is : " . $custno;
        echo '<br>' . $result_str;
        ?>
    </div>
</body>

</html>
