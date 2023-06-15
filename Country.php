<?php
$countries = array(
array("country" => "Germany", "capital" => "Berlin"),
array("country" => "France", "capital" => "Paris"),
array("country" => "United Kingdom", "capital" => "London"),
array("country" => "Italy", "capital" => "Rome"),
array("country" => "India", "capital" => "New Delhi")
);
usort($countries, "compareCapitals");
function compareCapitals($country1, $country2)
{
return strcmp($country1["capital"], $country2["capital"]);
}
// Sort the countries array based on capital names

// Display the sorted country names with their capitals
foreach ($countries as $country)
{
echo nl2br("Capital of " . $country["country"] . " is " . $country["capital"] . "\n");
}
?>
