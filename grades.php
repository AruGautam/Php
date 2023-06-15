<?php
// Function to check the grade based on the marks
function checkGrade($marks)
{
    if ($marks >= 90) {
        return "A+";
    } elseif ($marks >= 80) {
        return "A";
    } elseif ($marks >= 70) {
        return "B";
    } elseif ($marks >= 60) {
        return "C";
    } elseif ($marks >= 50) {
        return "D";
    } else {
        return "F";
    }
}
$student1Marks = 91;
$student2Marks = 72;
$student1Grade = checkGrade($student1Marks);
$student2Grade = checkGrade($student2Marks);
echo "<h2>The division of marks is as follows:</h2>";
echo "Marks >= 90 - Grade A<br>Marks >= 80 - Grade B<br>Marks >= 70 - Grade
B<br>Marks >= 60 - Grade C<br>Marks >= 50 - Grade D<br>Marks < 50 - Grade
F<br><br>";
echo "Student 1 has $student1Marks marks and obtained a grade of
$student1Grade<br/>";
echo "Student 2 has $student2Marks marks and obtained a grade of
$student2Grade<br/>";
?>
