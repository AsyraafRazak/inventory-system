<?php

include('db_connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = mysqli_real_escape_string($conn, $_POST['name']);

    // Insert data into the inventory table
    $sql = "INSERT INTO category (name)
        VALUES ('$name')";

    if (mysqli_query($conn, $sql)) {
        // Redirect to category page on success
        header("Location: /inventory-system/category.php");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
