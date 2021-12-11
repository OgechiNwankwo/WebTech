<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Goods OutOfStock</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');
    body{
        font-family: 'Roboto', sans-serif;
    }
    .container{
        height: 100vh;
        max-width: 90vw;
        margin: auto;
    }

    h1{
        color: #18945e;
    }

    .flexing{
        width: 100%;
        height: 100%;
        justify-content: center;
        align-items: center;
        display: flex;
        flex-direction: column;
    }

    .btm{
        margin-top: 40px;
    }

    .top{
        margin-bottom: 40px;
    }

    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
</style>
<body>
        <?php

        require_once("./nav.php");
        require("../controllers/product_controller.php");
        ?>
        <div class="container">
        <div class="flexing">
            <h1 class="top" style="color:#18945e">OOPs!</h1>
                <div>
                    <img src="https://securecdn.pymnts.com/wp-content/uploads/2021/12/out-of-stock-1000x600.jpg" alt="">
                </div>
            <h1 class="btm" style="color:#18945e">Out of stock</h1>
        </div>
       
    </div>
    <div style="display:flex;justify-content: center;margin-bottom:50px;">
        <a href="./home.php" style="background-color:#18945e; padding: 10px; color:white;text-decoration:none">Back To In Stock</a>
    </div>


    <?php
        require_once("./footer.php");
?>
</body>
</html>