<?php
$x = 13;
$y = 5;

// Arthematic operator + - / * %
$z = $x + $y;


//Assignement operator = += -= /= %=
$z = $x - $y;
$x = $x + 20;
echo $z;
echo "<br>";   // مسافة سطر
echo $x ;

//string operators
echo "<br>"; 

$fname = "Ahmed" ;
$lname = " Ali" ;
$space = " "; // مسافة بين الكلمات 

$fullName = $fname . '' . $lname ;

echo $fullName;
?>