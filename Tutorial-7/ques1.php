<?php
// Define variables for each subject's marks
$maths = 90;
$english = 80;
$science = 70;
$social = 85;
$hindi = 95;

// Calculate total marks
$totalMarks = $maths + $english + $science + $social + $hindi;

// Calculate percentage
$percentage = ($totalMarks / 500) * 100;

// Display total marks and percentage
echo "Total Marks Obtained: " . $totalMarks . "<br>";
echo "Percentage: " . $percentage . "%<br>";

// Determine grade based on percentage using switch case
switch(true){
    case ($percentage >= 90):
        echo "Grade: A+";
        break;
    case ($percentage >= 80):
        echo "Grade: A";
        break;
    case ($percentage >= 70):
        echo "Grade: B";
        break;
    case ($percentage >= 60):
        echo "Grade: C";
        break;
    case ($percentage >= 50):
        echo "Grade: D";
        break;
    default:
        echo "Grade: F";
        break;
}
?>