<?php
session_start();

// Check if the user is logged in and is an admin (role_as = 1)
if (!isset($_SESSION["user"]) || $_SESSION["role_as"] != 1) {
    header("Location: login.php"); // Redirect to login page if not an admin
    exit();
}

// Include database connection
require_once "database.php";

// Add User
if (isset($_POST["addUser"])) {
    $newName = $_POST["newName"];
    $newEmail = $_POST["newEmail"];
    $newPassword = password_hash($_POST["newPassword"], PASSWORD_DEFAULT);
    // Add the user to the database (make sure to validate and sanitize input)
    $insertUserSQL = "INSERT INTO users (name, email, password, role_as) VALUES ('$newName', '$newEmail', '$newPassword', 0)";
    mysqli_query($conn, $insertUserSQL);
}

// Delete User
if (isset($_POST["deleteUser"])) {
    $userIdToDelete = $_POST["userIdToDelete"];
    // Delete the user from the database (make sure to validate and sanitize input)
    $deleteUserSQL = "DELETE FROM users WHERE id = $userIdToDelete";
    mysqli_query($conn, $deleteUserSQL);
}

// Fetch User Data
$selectUsersSQL = "SELECT * FROM users WHERE role_as = 0";
$resultUsers = mysqli_query($conn, $selectUsersSQL);

// Add Category
if (isset($_POST["addCategory"])) {
    $categoryName = $_POST["categoryName"];
    $categoryDescription = $_POST["categoryDescription"];
    
    // Upload and handle category image (validate and sanitize file upload)
    $categoryImage = "image"; // Set a default value
    if (isset($_FILES["categoryImage"]) && $_FILES["categoryImage"]["error"] === 0) {
        // Handle file upload here and set $categoryImage accordingly
    }

    // Add the category to the database (make sure to validate and sanitize input)
    $insertCategorySQL = "INSERT INTO category (name, description, image) VALUES ('$categoryName', '$categoryDescription', '$categoryImage')";
    mysqli_query($conn, $insertCategorySQL);
}

// Delete Category
if (isset($_POST["deleteCategory"])) {
    $categoryIdToDelete = $_POST["categoryIdToDelete"];
    // Delete the category from the database (make sure to validate and sanitize input)
    $deleteCategorySQL = "DELETE FROM category WHERE id = $categoryIdToDelete";
    mysqli_query($conn, $deleteCategorySQL);
}

// Fetch Category Data
$selectCategoriesSQL = "SELECT * FROM category";
$resultCategories = mysqli_query($conn, $selectCategoriesSQL);



?>

<!DOCTYPE html>
<html>
<head>
<title>Admin Page</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            margin-top: 50px;
            color: #333;
        }

        h4 {
            color: #555;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ddd;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin: 10px 0;
            padding: 10px;
            background-color: #fff;
            border: 1px solid #ddd;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        a {
            color: #007bff;
            text-decoration: none;
        }
    </style>

</head>
<body>

<section id="header">
    <a href="#"><img src="images/logo.png" height="75px" width="75px" alt="logo" class="logo"></a>
    <h5></h5>
    <a href="#"><img src="images/nam.png" height="75px" width="250px" alt="name" class="name"></a>
    <div>
      <ul id="navbar">
        <li><a href="index.php">Home</a></li>
        <li><a href="logout.php">Logout</a></li>
        <li><a href="client.php">Shop</a></li>
      </ul>
    </div>
  </section>
    <h1>Welcome, Admin!</h1>

    <h4>User Management</h4>
    <form method="post">
        <label for="newName">Name:</label>
        <input type="text" name="newName" required>
        <label for="newEmail">Email:</label>
        <input type="email" name="newEmail" required>
        <label for="newPassword">Password:</label>
        <input type="password" name="newPassword" required>
        <button type="submit" name="addUser">Add User</button>
    </form>

    <h3>Existing Users:</h3>
    <ul>
        <?php
        while ($user = mysqli_fetch_assoc($resultUsers)) :
            ?>
            <li>
                <?php echo $user["name"]; ?>
                <form method="post">
                    <input type="hidden" name="userIdToDelete" value="<?php echo $user["id"]; ?>">
                    <button type="submit" name="deleteUser">Delete</button>
                </form>
            </li>
            <?php
        endwhile;
        ?>
    </ul>

    <!-- Add Category Form -->
<h4>Category Management</h4>
<form method="post" enctype="multipart/form-data">
    <label for="categoryName">Category Name:</label>
    <input type="text" name="categoryName" required>
    <label for="categoryDescription">Description:</label>
    <textarea name="categoryDescription"></textarea>
    <label for="categoryImage">Image:</label>
    <input type="file" name="categoryImage">
    <button type="submit" name="addCategory">Add Category</button>
</form>

<!-- Existing Categories -->
<h3>Existing Categories:</h3>
<ul>
    <?php
    while ($category = mysqli_fetch_assoc($resultCategories)) :
        ?>
        <li>
            <?php echo $category["name"]; ?>
            <form method="post">
                <input type="hidden" name="categoryIdToDelete" value="<?php echo $category["id"]; ?>">
                <button type="submit" name="deleteCategory">Delete</button>
            </form>
        </li>
        <?php
    endwhile;
    ?>
</ul>

</body>
</html>
