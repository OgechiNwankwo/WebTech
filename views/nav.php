<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" href="../styles/home.css">
  </head>

  
  <body>


  <header class="header">
                <a href="./home.php" clasS="logo">REMS </a>
     
                <ul class="menu">
                     <li class="search-li">
                       <form action="./product.php" method="POST">
                          <input placeholder='Search the product you want' class='searchbar' type="text" name="searched_item"/>
                          
                          <button class="search-btn" type="submit" name="submit">Search</button>
                       </form>

                  </li>
           
                  <li>
                    <a href="./index.php">
                     LogOut <ion-icon name="person"></ion-icon>
                    </a>

                  </li>
                  <li>
                    <a href="./reviews.php">
                     Review <ion-icon name="pencil"></ion-icon>
                    </a>

                  </li>
                  <li>
                    <a href="./about.php">About <ion-icon name="help-circle"></ion-icon></a>
                  </li>
                  <li>
                    <a href="">Cart <ion-icon name="cart"></ion-icon></a>
                  </li>
             
                </ul>
      </header>
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