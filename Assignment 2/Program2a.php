<?php
$student=array(
"Name" => "Priya",
"Age" => 20,
"Course" => "BCA",
"City" => "Pune"
);
echo " Elements of associative Array: <br><br>";
foreach($student as $key=> $value)
{
echo $key . "=>" .$value ."<br>";
}
?>
