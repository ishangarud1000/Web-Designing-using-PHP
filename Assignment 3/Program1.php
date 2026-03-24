<?php
class vehicle{
public $brand;
public $model;
public $year;
public function __construct($brand,$model,$year)
{
$this->brand=$brand;
$this->model=$model;
$this->year=$year;
}
public function displayDetails(){
echo "Vehicle Details:<br>";
echo "Brand:" .$this->brand."<br>";
echo "Model:" .$this->model."<br>";
echo "Year:" .$this->year."<br>";
}
}
$vehicle1=new vehicle("Toyota","Corolla",2022);
$vehicle2=new vehicle("Maruti Suzuki","Grand Vitara",2025);
$vehicle1->displayDetails();
$vehicle2->displayDetails();
?>

         