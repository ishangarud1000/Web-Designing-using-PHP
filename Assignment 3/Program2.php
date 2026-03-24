<?php
abstract class shape{
abstract public function calculateArea();
}
class Triangle extends shape{
private $base;
private $height;
public function __construct($base,$height)
{
$this->base=$base;
$this->height=$height;
}
public function calculateArea(){
return 0.5*$this->base*$this->height;
}
}
class rectangle extends shape{
private $length;
private $width;
public function __construct($length,$width)
{
$this->length=$length;
$this->width=$width;
}+  
public function calculateArea(){
return $this->length*$this->width;
}
}
$triangle=new triangle(10,5);
$rectangle=new rectangle(8,4);
echo "Triangle area:".$triangle->calculateArea()."<br>";
echo "Rectangle area:".$rectangle->calculateArea()."<br>";
?>