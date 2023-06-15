<?php
$size=8;
echo "<table style ='border-collapse:collapse;'>";
for($row =0;$row<=$size;$row++)
{
    echo "<tr>";
    for($col =0;$col<=$size;$col++)
    {
        $sum = $row+$col;
        if($sum%2==0)
        {
            echo "<td style='background-color:black; width:60px;height:60px'></td>";
        }
        else{
            echo "<td style='background-color:white; width:60px;height:60px'></td>";
        }
    }
    echo "</tr>";
}
?>
