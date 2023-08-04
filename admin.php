<?php

session_start();

// Check if the user is not logged in as an admin, redirect to login page
if (!isset($_SESSION['admin_name'])) {
    header('location: login.php');
    exit();
}

// Include the config file to connect to the database
@include 'database.php';

// Function to delete a user by their ID
function deleteUser($conn, $user_id) {
    $deleteQuery = "DELETE FROM user_form WHERE id = '$user_id'";
    mysqli_query($conn, $deleteQuery);
}

// Function to modify a user's details by their ID
function modifyUser($conn, $user_id, $name, $email, $user_type) {
    $updateQuery = "UPDATE user_form SET name = '$name', email = '$email', user_type = '$user_type' WHERE id = '$user_id'";
    mysqli_query($conn, $updateQuery);
}

// Check if a user is selected for modification or deletion
if (isset($_POST['selected_user_id'])) {
    $selectedUserId = $_POST['selected_user_id'];
    $action = $_POST['action'];

    if ($action === 'delete') {
        deleteUser($conn, $selectedUserId);
    } elseif ($action === 'modify') {
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $user_type = $_POST['user_type'];

        modifyUser($conn, $selectedUserId, $name, $email, $user_type);
    }
}

// Fetch all users from the database
$usersQuery = "SELECT * FROM user_form";
$usersResult = mysqli_query($conn, $usersQuery);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <div class="admin-container">
        <h1>Welcome Admin: <?php echo $_SESSION['admin_name'] ?></h1>
        <h2>Users List</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>User Type</th>
                <th>Action</th>
            </tr>
            <?php while ($user = mysqli_fetch_assoc($usersResult)) { ?>
                <tr>
                    <td><?php echo $user['id']; ?></td>
                    <td><?php echo $user['name']; ?></td>
                    <td><?php echo $user['email']; ?></td>
                    <td><?php echo $user['user_type']; ?></td>
                    <td>
                        <form action="" method="post">
                            <input type="hidden" name="selected_user_id" value="<?php echo $user['id']; ?>">
                            <input type="hidden" name="name" value="<?php echo $user['name']; ?>">
                            <input type="hidden" name="email" value="<?php echo $user['email']; ?>">
                            <select name="user_type">
                                <option value="user" <?php echo ($user['user_type'] === 'user') ? 'selected' : ''; ?>>user</option>
                                <option value="admin" <?php echo ($user['user_type'] === 'admin') ? 'selected' : ''; ?>>admin</option>
                            </select>
                            <button type="submit" name="action" value="modify">Modify</button>
                            <button type="submit" name="action" value="delete">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php } ?>
        </table>
        <a href="logout.php" class="btn">Logout</a>
    </div>
    
</body>
</html>