<?php

include('db_connection.php');

$id = $_GET['id'];
$query = "DELETE FROM inventory WHERE id = $id";
$result = mysqli_query($conn, $query);

// Execute the query
if (mysqli_query($conn, $query)) {
    // Redirect or provide success feedback
    header("Location: /inventory-system/inventory.php?update=deleted");
    exit();
} else {
    echo "ERROR: " . mysqli_error($conn);
}

?>
