<?php
session_start();

if (isset($_POST["login"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    require_once "database.php";

    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_assoc($result);

    if ($user && password_verify($password, $user["password"])) {
        $_SESSION["user"] = "yes";
        $_SESSION["role_as"] = $user["role_as"];

        if ($user["role_as"] == 1) {
            header("Location: admin.php");
            exit();
        } else {
            header("Location: client.php");
            exit();
        }
    } else {
        $loginError = "Invalid email or password.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Login Form</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
</head>

<body>
  <section id="header">
    <a href="#"><img src="images/logo.png" height="75px" width="75px" alt="logo" class="logo"></a>
    <h5></h5>
    <a href="#"><img src="images/nam.png" height="75px" width="250px" alt="logo" class="name"></a>
    <div>
      <ul id="navbar">
        <li><a href="index.php">Home</a></li>
        <li><a class="active" href="login.php">Login</a></li>
        <li><a href="registration.php">Register</a></li> 
      </ul>
    </div>
  </section>


<div class="sign-container">

<?php
if (isset($_POST["login"])) {
  $email = $_POST["email"];
  $password = $_POST["password"];
  require_once "database.php";
  $sql = "SELECT * FROM users WHERE email = '$email'";
  $result = mysqli_query($conn, $sql);
  $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
  if ($user) {
      if (password_verify($password, $user["password"])) {
          $_SESSION["user"] = "yes";
          $_SESSION["role_as"] = $user["role_as"]; // Assuming "role_as" is a field in the database
          // Redirect the user based on their role_as value
          if ($_SESSION["role_as"] == 1) {
              header("Location: ./admin/index.php");
          } else {
              header("Location: client.php");
          }
          exit();
      } else {
          echo "<div class='alert alert-danger'>Password does not match</div>";
      }
  } else {
      echo "<div class='alert alert-danger'>Email does not match</div>";
  }
}
?>

<form action="login.php" method="post">
    
  <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" placeholder="Enter Email:" name="email" class="form-control" required>
    </div>

    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" placeholder="Enter Password:" name="password" class="form-control" required>
    </div>

    <div class="form-btn">
      <input type="submit" value="Login" name="login" class="btn btn-primary">
    </div>
  </form>

  <div> <p>Not registered yet <a href="registration.php">Register Here</a></p></div>
</div>

  <footer>
    <div class="copyright">
    <p>&copy; 2023 My Website. All rights reserved.</p>
  </div>
  </footer>
</body>
</html>




