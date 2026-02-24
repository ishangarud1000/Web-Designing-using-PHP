<html>
<head>
<title>Factorial Program</title>
</head>
<body>
<form method="post">
Enter a number:
<input type="number" name="number" min="0" required>
<input type="submit" name="submit" value="Calculate">
</form>
<?php
function factorial($num)
{
if($num==0 || $num==1)
{
return 1;
}
else
{
$fact=1;
for($i=2;$i<=$num;$i++)
{
$fact=$fact*$i;
}
return $fact;
}
}
if(isset($_POST['submit']))
{
$number=$_POST['number'];
if($number>=0)
{
echo " <h3> Factorial of a number is " .factorial($number)."</h3>";
}
else
{
echo "<h3>Please enter a non negative number </h3>";
}
}
?>
</body>
</html>