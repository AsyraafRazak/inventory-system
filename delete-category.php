<?php
include('db_connection.php');

$id = $_GET["id"];

if (isset($id)) {

    $sql = "DELETE FROM inventory WHERE category_id = $id";

    if (mysqli_query($conn, $sql)) {
        $sql2 = "DELETE FROM category WHERE id = $id";

        if (mysqli_query($conn, $sql2)) {
            header("Location: /inventory-system/category.php");
        } else {
            echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
        }
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
