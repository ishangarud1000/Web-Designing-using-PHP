<?php
class  ShoppingCart {
public $items=[];
public $total=0;
public function additem($name,$price){
$this->items[]=["name"=>$name, "price"=>$price];

}
public function calculateTotal(){
$this->total=+$price;
return $this->total;
}
public function displayCart(){
echo "Items In Cart:<br>";
foreach($this->items as $item){
echo$item["name"]."-$".$item["price"]."<br>";
}
echo "<br> Total cost : Ruppes" .$this->calculateTotal();
}
}
$cart= new ShoppingCart();
$cart->additem("Laptop",50000);
$cart->additem("Mouse",500);
$cart->additem("Keyboard",1500);
$cart->displayCart();
?>