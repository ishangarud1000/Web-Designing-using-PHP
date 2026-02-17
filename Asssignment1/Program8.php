<?php
$a=0;
$b=1;
$n=10;
echo $a." ";
echo $b." ";
for($i=1;$i<=10;$i++)
{
$c=$a+$b;
echo $c." ";
$a=$b;
$b=$c;
}
?>
