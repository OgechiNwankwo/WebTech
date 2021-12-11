<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/add.css">
    <title>Add Product</title>
</head>

<?php
        require("../controllers/product_controller.php");
		
		
		$product_name=$image_url=$price=$product_des=$quantity=$successMessage='';

		if(isset($_POST['submit'])){
      
			
            //Getting input into variables 
			$product_name = $_POST['product_name'];
      $image_url = $_POST['image_url'];
      $price=$_POST['price'];
      $product_des = $_POST['product_des'];
      $quantity = $_POST['quantity'];
      
            

			
			$addProduct = addProduct($product_name,$image_url,$price,$product_des,$quantity);
            if($addProduct){
              $successMessage="Product Added Successfully";
              
            }
		}

	?>


<body>


    <div class="pinfo" style="text-align: center;color:white">
        <h2>
            Add New Product
        </h2>
    </div>
  

<form id="feedback" method="post" action="">
<div class=text-success><?php echo $successMessage?></div>
  <div class="pinfo">Product Name</div>
  
<div class="form-group">
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="fa fa-user"></i></span>
  <input  name="product_name"  class="form-control"  type="text">
    </div>
  </div>
</div>
  <div class="pinfo">Product Url</div>

<div class="form-group">
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="fa fa-link"></i></span>
  <input  name="image_url"  class="form-control"  type="text">
    </div>
  </div>
</div>
  <div class="pinfo">Price</div>

<div class="form-group">
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="fa fa-money"></i></i></span>
    <input name="price" type="text" class="form-control">
     </div>
  </div>
</div>


 <div class="pinfo">Quantity</div>
  
<div class="form-group">
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="fa fa-sort-amount-asc"></i></i></span>
    <input name="quantity" type="text" class="form-control">
     </div>
  </div>
</div>

 <div class="pinfo">Product Description</div>
  

<div class="form-group">
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
  <textarea class="form-control" id="review" rows="3" name="product_des"></textarea>
 
    </div>
  </div>
</div>

<div style="display:flex;justify-content:space-around">
<button type="submit" class="btn btn-primary" name="submit" style="background-color:#18945e">Add</button>
 <button type="submit" class="btn btn-primary" name="submit" style="background-color:#18945e"><a href="./admi.php" style="color:white;text-decoration:none;">Back</a></button>
</div>


</form>

      

    
</body>
<script src="https://use.fontawesome.com/a6f0361695.js"></script>
</html>