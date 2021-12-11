<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/home.css">
  </head>
  <body>
        <?php
            require_once("./nav.php");
        ?>
           
           <br>
            <br>
            <br>
            <br>
        <!-- DRUG DISPLAY -->
    <div class="container-large p-3 parent">
            <?php
                require("../controllers/product_controller.php");
                $allProducts= allProducts();
            ?>

            <?php
                    
                    foreach($allProducts as $product){
            ?>
            <div class="card shadow-lg card-item" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;width:18rem;">
            <img src=<?=$product['image_of_product']?> class="card-img-top" alt="..." style="height:14rem">
            <div class="card-body">
                <h5 class="card-title"><?=$product['productname']?></h5>
                <p class="card-text" style="font-weight:bold"><?=$product['price_per_product']?></p>
                <p class="card-text"><?=$product['product_des']?></p>

                <a href="#" class="btn btn-success">Buy</a>
            </div>
            </div>
            <?php } ?>
            
            
    </div>

    <?php
        require_once("./footer.php");
    ?>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>