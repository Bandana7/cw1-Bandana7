<?php
session_start();
if (isset($_SESSION["users"])) {
   header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<section id="header">
    <a href="#"><img src="images/logo.png" height="75px" width="75px" alt="logo" class="logo"></a>
    <h5></h5>
    <a href="#"><img src="images/nam.png" height="75px" width="250px" alt="logo" class="name"></a>
    <div>
      <ul id="navbar">
        <li><a href="index.php">Home</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a class="active" href="registration.php">Register</a></li> 
      </ul>
    </div>
  </section>

    <div class="sign-container">
       <?php 
       if (isset( $_POST["submit"])) {
        $fullname = $_POST["fullname"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $passwordRepeat = $_POST["repeat_password"];

        $passwordHash = password_hash($password, PASSWORD_DEFAULT);


        $errors = array();
        
        if (empty($fullname) OR empty($email) OR empty($password) OR empty($passwordRepeat)){
            array_push($errors,"All fields are required");
        }
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            array_push($errors,"Email is not valid");
        }
        if (strlen($password)<8) {
            array_push($errors,"Password must be atleast 8 characters long.");
        }
        if($password!==$passwordRepeat) {
            array_push($errors,"Password does not match");
        }

        require_once "database.php";
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);
        $rowCount = mysqli_num_rows($result);
        if ($rowCount>0) {
            array_push($errors, "Email already exists!");
        }

        if(count($errors)>0) {
            foreach ($errors as $error){
                echo"<div class='alert alert-danger'>$error</div>";
            }
        }else{
           
            $sql = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)";
            $stmt = mysqli_stmt_init($conn);
           $prepareStmt = mysqli_stmt_prepare($stmt,$sql); 
           if ($prepareStmt) {
            mysqli_stmt_bind_param($stmt,"sss", $fullname, $email, $passwordHash);
            mysqli_stmt_execute($stmt);
            echo "<div class='alert alert-success'>You are registered successfully.</div>";
           }else{
            die("Something went wrong.");
           }
        }
       }
      

       ?>

           
          
        <form action="registration.php" method="post">
            <div class="form-group">
            <label for="fullname"><b>Full Name</b></label>
                <input type="text" class="form-control" name="fullname" placeholder="Full Name:">
            </div>
            <div class="form-group">
            <label for="email"><b>Email</b></label>
                <input type="email" class="form-control" name="email" placeholder="Email:">
            </div>
            <div class="form-group">
            <label for="password"><b>Password </b></label>
                <input type="password" class="form-control" name="password" placeholder="Password:">
            </div>
            <div class="form-group">
            <label for="repeat_password"><b>Repeat Password </b></label>
                <input type="password" class="form-control" name="repeat_password" placeholder="Repeat Password:">
            </div>
            <div class="form-btn">
                <input type="submit" class="btn btn-primary" value="Register" name="submit">
            </div>
        </form>
        <div>
        <div><p>Already Registered <a href="login.php">Login Here</a></p></div>
      </div>
    </div>
</body>
<footer>
    <div class="copyright">
    <p>&copy; 2023 My Website. All rights reserved.</p>
    </div>
  </footer>
</html>