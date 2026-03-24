<html>
    <head>
        <title>Product Details</title>
    </head>
    <body>
        <h2>Enter Product Details</h2>
        <form method="post">
            Product Name:<input type="text" name="name"><br><br>
            Product Code:<input type="text" name="code"><br><br>
            Product Price:<input type="text" name="price"><br><br>
            <input type="submit" name="submit" value="Display Product">
        </form>
        <?php
        class Product{
            public $productName;
            public $productCode;
            public $productPrice;
            public function __construct($name,$code,$price){
                $this->productName=$name;
                $this->productCode=$code;
                $this->productPrice=$price;
            }
            public function displayProduct(){
                echo "<h3> Product Details</h3>";
                echo "Product Name:".$this->productName."<br>";
                echo "Product Code:".$this->productCode."<br>";
                echo "Product Price:".$this->productPrice."<br>";
            }
        }
        if(isset($_POST['submit'])){
            $name=$_POST['name']??"";
            $code=$_POST['code']??"";
            $price=$_POST['price']??"";
            $obj=new Product($name,$code,$price);
            $obj->displayProduct();
        }
        ?>
    </body>
</html>