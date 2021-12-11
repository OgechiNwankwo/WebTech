<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
			rel="stylesheet"
			integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
			crossorigin="anonymous"
	/>
    <link rel="stylesheet" href="../styles/login.css">
    <title>Chem | Login</title>
</head>


<?php
session_start();
$_SESSION["cart"] = array();
        require("../controllers/users_controller.php");
		
		$errors=array('email'=>'','password'=>'', 'invalid_cred'=>'');
		$email=$password=$invalid_cred='';

		if(isset($_POST['login'])){
			
            //Getting input into variables 
			$email=$_POST['email'];
			$password=$_POST['password'];
            

			//This is email validation
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				$errors['email']="Incorrect email format";
			}
			//Password validation:
			if(!preg_match("/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/",$password)){
				$errors['password']= "Length of password must be more than 8";
			}

			$password=md5($password);
			$getUserInfo = getUserInfo($email,$password);
            if($getUserInfo && $getUserInfo['email']=="admin@gmail.com"){
                header("Location:./admi.php");
              
            }
            elseif($getUserInfo && $getUserInfo['email']==$email){
                header("Location:./home.php");
            }
            else{
                $errors['invalid_cred']="Invalid user name or password";
            }
		}

?>

<body>
    <main>
        <div class="main-content">
            <div class="form-left-content">
                <div class="content">
                    <div class="account-icon">
                        <i class="fas fa-user-circle"></i>
                    </div>               
                    <p>Sign into your account</p>
                    <div class=text-danger><?php echo $errors['invalid_cred']?></div>
                    <form method="post" action="">
                        <div class="form-group">
                            <input type="email" placeholder="Enter Email" name="email" value="<?php echo $email; ?>">
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Enter Password" name="password">
                        </div>
                        
                        <button type="submit" class="btn btn-success" name="login">Sign In</button>
                    
                        <p class="no-account">No account? <a class="back text-success" href="sign-up.php">Sign Up</a></p>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>
<script src="https://kit.fontawesome.com/ea129587c4.js" crossorigin="anonymous"></script>
</html>