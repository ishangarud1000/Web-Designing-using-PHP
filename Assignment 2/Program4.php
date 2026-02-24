<?php
$students=array(
array("Priya",20,"BCA"),
array("Rahul",21,"BBA"),
array("Sneha",19,"BSC"),
);
echo "<h3>Original Array:</h3>";
echo "<pre>";
print_r($students);
echo "</pre>";
echo "<h3> Specific Content:</h3>";
echo "Rahul course:".$students[1][2];
unset($students[1]); // Command for deletion
echo"<h3> Array after deletion</h3>";
echo "<pre>";
print_r($students);
echo "</pre>";
?>


