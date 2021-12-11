<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="../styles/home.css">
    <link rel="stylesheet" href="../styles/reviews.css">
    <title>Reviews</title>
</head>

      <?php
          require_once("./nav.php");
      ?>

    <?php
            require("../controllers/users_controller.php");
        
        
        $name=$review="";

        if(isset($_POST['submit-review'])){
        
                //Getting input into variables 
          $name=$_POST['name'];
          $review=$_POST['review'];
          
          
          $postReview = Review($name,$review);
          // $allReviews= allReviews();
                if($postReview){
                    $try="I am here";
                }
        }

      ?>
      <?php
      
           $allReviews= allReviews();
      ?>
      <br>
      <br>
        <section id="testimonials">
        <!--heading--->
        <div class="testimonial-heading" style="color:#18945e">
            <span style="color:#18945e">Comments</span>
            <h4 style="color:#18945e">Clients Says</h4>
        </div>
        <!--testimonials-box-container------>
        <div class="testimonial-box-container">
              <?php
                
                foreach($allReviews as $review){
              ?>
            <div class="testimonial-box">
                <!--top------------------------->
                <div class="box-top">
                    <!--profile----->
                    <div class="profile">
                        <!--img---->
                        <div class="profile-img">
                            <img src="https://cdn3.iconfinder.com/data/icons/avatars-15/64/_Ninja-2-512.png" />
                        </div>
                        <!--name-and-username-->
                        <div class="name-user">
                            <strong><?=$review['username']?></strong>
                            <span>@<?=$review['username']?></span>
                        </div>
                    </div>
                 
                </div>
                <!--Comments---------------------------------------->
                <div class="client-comment">
                    <p><?=$review['review']?></p>
                </div>
            </div>

            <?php } ?>
           

            
            
         <div>
      </section>

      <h2 id="fh2">WE APPRECIATE YOUR REVIEW!</h2>
<h6 id="fh6">Your review will help us to improve our web hosting quality products, and customer services.</h6>


<form id="feedback" method="post" action="">
  <div class="pinfo" name="name">Your name</div>
  
<div class="form-group">
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="fa fa-user"></i></span>
  <input  name="name" placeholder="Your name..." class="form-control"  type="text">
    </div>
  </div>
</div>


 <div class="pinfo">Write your feedback.</div>


<div class="form-group">
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
  <textarea class="form-control" id="review" rows="3" name="review"></textarea>
 
    </div>
  </div>
</div>

 <button type="submit" name="submit-review" class="btn" style="background-color:#18945e; color:white">Submit</button>


</form>


       <script src="https://use.fontawesome.com/a6f0361695.js"></script>
</body>
</html>