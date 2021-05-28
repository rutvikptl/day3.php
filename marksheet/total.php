<?php

$a=$_POST['txt1'];
$b=$_POST['txt2'];
$c=$_POST['txt3'];
$d=$_POST['txt4'];
$e=$_POST['txt5'];

$D=$a+$b+$c+$d+$e;
$percentage=$D/5;

echo "TOTAL:$D.<br><br>";
echo "PERCENTAGE:$percentage%.<br><br>";


if ($percentage>=80)
{
	echo"GRADE:First Division";
}
else if($percentage>=60)
{
	echo"GRADE:Second Division";
}
else if($percentage>=33)
{
	echo"GRADE:Third Division";
}
else
{
	echo"GRADE:Fail";
}

?>
