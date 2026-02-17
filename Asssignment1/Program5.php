<?php
$num=153;
$original=$num;
$sum=0;
while($num>0)
{
$remainder=$num%10;
$sum=$sum+($remainder*$remainder*$remainder);
$num=(int)($num/10);
}
if($original==$sum)
{
echo " $original is a Armstrong number";
}
else
{
echo " $original is not a Armstrong number";
}
?>

















