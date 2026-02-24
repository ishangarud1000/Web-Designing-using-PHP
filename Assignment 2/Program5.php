<html>
<head>
<title>Reverse a String</title>
</head>
<h2>Reverse a String</h2>
<form method="post">
Enter String:
<input type="text" name="user_string" required>
<input type="submit" name="submit" value="Reverse">
</form>
<?php
function reverseString($str)
{
$rev="";
for($i=strlen($str)-1;$i>=0;$i--)
{
$rev.=$str[$i];
}
return $rev;
}
if(isset($_POST['submit']))
{
$input=$_POST['user_string'];
echo "<h3> Original string:$input</h3>";
echo "<h3> Reversed String:<br>". reverseString($input)."</h3>";
}
?>
</body>
</html>
