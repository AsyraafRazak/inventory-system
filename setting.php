<?php
include('db_connection.php');
session_start();
// Handle form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get the new password from the form
    $new_password = trim($_POST['new_password']);

    // Check if the new password is empty
    if (empty($new_password)) {
        $error = "Password cannot be empty.";
    } else {
        // Update the password in the database
        $user_id = $_SESSION['user-id'];
        $sql = "UPDATE users SET password = '$new_password' WHERE id = $user_id";

        // Execute the query
        if (mysqli_query($conn, $sql)) {
            $success = "Password updated successfully.";
        } else {
            $error = "Error updating password: " . mysqli_error($conn);
        }
    }
}
?>

<?php include('layout/header.php'); ?>
<div id="layoutSidenav_content">
    <main>
    <h1>Reset Password</h1>

    <?php
    // Display error or success messages
    if (!empty($error)) {
        echo "<p style='color:red;'>$error</p>";
    }
    if (!empty($success)) {
        echo "<p style='color:green;'>$success</p>";
    }
    ?>

    <form action="" method="POST" class="form-control">
        <label for="new_password">New Password:</label>
        <input type="password" id="new_password" class="form-control" name="new_password" required>
        <button type="submit" class="btn btn-danger mt-3">Reset Password</button>
    </form>
    </main>
</div>
<?php include('layout/footer.php'); ?>