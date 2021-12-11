<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/product.css">
    <title>Cart</title>
</head>
<body>
<?php
        session_start();
        require_once("./nav.php");
        require("../controllers/product_controller.php");
?>

<?php
	
		$product_name="";
        $cart_message="";
        if(isset($_GET["productname"])){
            $product_name=$_GET["productname"];
            $productInfo = productInfo($product_name);
        }
		if(isset($_POST['submit'])){
			
      //Getting input into variables 
			$product_name=$_POST['searched_item'];
     
			$productInfo = productInfo($product_name);
            if(!$productInfo){
                header("Location:./outOfStock.php");
            }
		}


        if(isset($_POST['cart_submit'])){
            $cart_message="Added to cart";
        }
			
            

?>


    <!--Navbar goes here-->
    <div class="product-body" style="h1:400px">
        <div class="product-body-container">
            <div class="product-section">
            <div class="product-img">
                <img src=<?=$productInfo['image_of_product']?> alt="">
            </div>
            <div id="product-main">
                <div id="product-details">
                    <h3 style="color:green" id="cart_message"></h3>
                    <h1><?=$productInfo['productname']?></h1>
                    <h3>Price: </h3>
                    <p class="price"><span class="symb">GHC:</span> <?=$productInfo['price_per_product']?>.00</p>
                    <h3>Description: </h3>
                    <p class="description"><?=$productInfo['product_des']?></p>
                    <p class="calc-demo">Price calculated at checkout</p>
                    <p class="bold-text">Quantity: </p>
                    <input type="number" min="0" max="20" class="quantity">
                    <button type="button" class="add" name="cart_submit" onclick="triggered()">ADD TO CART</button>
                </div>
		    
		<script>
                   
                    function triggered() {
                        document.getElementById("cart_message").innerHTML = "Added to cart";
                    }
                </script>
            </div>
            </div>
            
            <div class="back-btn">
                <a href="./home.php" class="back">Back To In Stock</a>
            </div>
        </div>
  
        
    </div>
    
</body>
</html>
