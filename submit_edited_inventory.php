<?php
include('db_connection.php');

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $id = $_POST['id']; //Hidden input to identify the record being edited
    $sn_no = mysqli_real_escape_string($conn, $_POST['sn_no']);
    $item_name = mysqli_real_escape_string($conn, $_POST['item_name']);
    $item_desc = mysqli_real_escape_string($conn, $_POST['item_desc']);
    $qty = intval($_POST['qty']);
    $category_id = intval($_POST['category_id']);
    $img = $_FILES['img'];

    // Handle the image upload if a new image is provided
    if ($img['size'] > 0) {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($img['name']);
        move_uploaded_file($img['tmp_name'], $target_file);
        $img_path = mysqli_real_escape_string($conn, $target_file);
        $img_query = ", img='$img_path'";
    } else {
        $img_query = ''; // No change to the image if a new one is not uploaded
    }

    // Prepare the SQL query to update the record
    $update_query = "
        UPDATE inventory
        SET
            sn_no='$sn_no',
            item_name='$item_name',
            item_desc='$item_desc',
            qty=$qty,
            category_id=$category_id
            $img_query
        WHERE id=$id;
    ";

    // Execute the query
    if (mysqli_query($conn, $update_query)) {
        // Redirect or provide success feedback
        header("Location: /inventory-system/inventory.php?update=success");
        exit();
    } else {
        echo "ERROR: " . mysqli_error($conn);
    }
}
?>