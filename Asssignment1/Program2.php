<?php
$num=121;
$original=$num;
$reverse=0;
while($num>0)
{
$remainder=$num%10;
$reverse=($reverse*10)+$remainder;
$num=(int)($num/10);
}
if($original==$reverse)
{
echo " $original is a palindrome number";
}
else
{
echo " $original is not a palindrome number";
}
?>



































































