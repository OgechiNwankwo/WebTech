<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rems | Sign Up Page</title>
    <link
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
			rel="stylesheet"
			integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
			crossorigin="anonymous"
		/>
    <link rel="stylesheet" href="../styles/sign-up.css">
</head>


<?php
	//connect to post controller
        require("../controllers/users_controller.php");
		
		$errors=[];
		$fullname=$email=$password=$confirm_password=$account_creation_successful='';

		if(isset($_POST['submit'])){
			

            //Getting input into variables 
			$fullname=$_POST['fullname'];
			$email=$_POST['email'];
			$password=$_POST['password'];
			$confirm_password=$_POST['comfirm_password'];

			//This is email validation
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				$errors['email']="Incorrect email format";
			}
			//Password validation:
			if(!preg_match("/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/",$password)){
				$errors['password']= "Length of password must be more than 8";
			}

			
			//Checking whether password match with the re-entered password
			if($password!=$confirm_password){
				$errors['confirm_password']= "Mismatch with password";
			}


			$password=md5($password);
			if(count($errors)==0){
				$createNewUser = createUser($fullname,$email,$password);
				$account_creation_successful=<<<EOD
				<div>Account Created Successfully <a href="./index.php">Login</a></div>
				EOD;
		    }
		}

	?>



<body>
    <main>
        <div class="main-content">
            <div class="form-left">
                <div class="form-left-content">
                    <h1>Create Account</h1>
                    
                    <p>Complete the form to join our community</p>
                    <div class=text-danger><?php echo $errors['confirm_password']?></div>
                    <div class=text-success><?php echo $account_creation_successful?></div>
                    <form method="post" action="" >
                        <div class="form-group">
                            <input type="text" placeholder="Enter Full Name" name="fullname" value="<?php echo $fullname; ?>">
                        </div>
                        <div class="form-group">
                            <input type="email" placeholder="Enter Email" name="email" value="<?php echo $email; ?>">
                            <div class=text-danger><?php echo $errors['email']?></div>
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Enter Password" name="password">
                            <div class=text-danger><?php echo $errors['password']?></div>
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Confirm Password" name="comfirm_password">
                        </div>
                
                        <button type="submit" class="btn btn-primary" name="submit">Sign Up</button>
                
                    </form>
                </div>
            </div>
            <div class="form-right" styles="">
                <div class="overlay">
                    <div class="overlay-content">
                        <div class="content">
                            <div class="headings">
                                <h1>WELCOME TO REMS</h1>
                                <h2>Get all your chemicals here</h2>
                            </div>
                            <p>Get amazing chemicals at an affordable price</p>
                            <p>Get authentic chemicals</p>
                            <p>At REMS we price in quality</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
<script src="https://kit.fontawesome.com/ea129587c4.js" crossorigin="anonymous"></script>
</html>
