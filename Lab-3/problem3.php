<html>
<head>
<body>
<?php
$length = 5;
$width=10;
$perimeter=2*($length + $width);
$area=($length*$width);
echo "Perimeter of the rectangle is $perimeter";
echo"<br>";
echo "Area of the rectangle is $area";
echo"<br>";
if($perimeter == $width)
{
	echo "The shape is Square";
}
else
{
	echo "The shape is not square";
}
?>
</body>
</head>
</html>