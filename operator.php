<?php


//arithmatic operator
$a = 10;
$b =20;
echo "for a+b the result is  " . ($a+$b) . "<br>";
echo "for a-b the result is  " . ($a-$b) . "<br>";
echo "for a*b the result is  " . ($a*$b) . "<br>";
echo "for a/b the result is  " . ($a/$b) . "<br>";
echo "for a%b the result is  " . ($a%$b) . "<br>";
echo "for a**b the result is  " . ($a**$b) . "<br>";

// assignment operator 
$x=$a;
echo "for the value of x  ". $x ."<br>";

$a +=5;
echo "for the value of a  ". $a ."<br>";

$a -=5;
echo "for the value of a  ". $a ."<br>";

$a /=5;
echo "for the value of a  ". $a ."<br>";
$a *=5;
echo "for the value of a  ". $a ."<br>";


// comparison operator

$m = 10;
$n = 20;

echo "for m == n, the result is  " ;
echo var_dump ($m == $n);
echo "<br>";

echo "for m > n, the resulte is  ";
echo var_dump($m>$n);
echo "<br>";

echo "for m < n, the resulte is  ";
echo var_dump($m<$n);
echo "<br>";

echo "for m >= n, the resulte is  ";
echo var_dump($m>$n);
echo "<br>";

echo "for m <= n, the resulte is  ";
echo var_dump($m<=$n);
echo "<br>";


// logical operator
$x = true;
$y = false;

echo "for x and y the result is  ";
echo var_dump($x and $y);
echo "<br>";

echo "for x && y the result is  ";  // alternate mathod to type and
echo var_dump($x && $y);
echo "<br>";

echo "for x or y the result is  ";
echo var_dump($x or $y);
echo "<br>";

echo "for x || y the result is  ";   // alternate mathod to type or
echo var_dump($x || $y);
echo "<br>";

echo "for !x the result is  ";      // ! indiacating not gate 
echo var_dump(!$x);
echo "<br>";









?>