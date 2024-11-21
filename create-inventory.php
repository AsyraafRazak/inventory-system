<?php include('layout/header.php'); ?>
<?php include('db_connection.php');

$query = "SELECT * FROM category";
$result = mysqli_query($conn, $query);

?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">

            <form class="mt-4" method="POST" action="submit_inventory.php" enctype="multipart/form-data">
                <div class="form-group mt-2">
                    <label for="sn No">SN No</label>
                    <input type="text" class="form-control" id="sn No" name="sn_no" placeholder="Enter SN no of Item">
                </div>
                <div class="form-group mt-2">
                    <label for="itemName">Item Name</label>
                    <input type="text" class="form-control" id="itemName" name="item_name" placeholder="Enter item name">
                </div>
                <div class="form-group mt-2">
                    <label for="itemDesc">Item Desc</label>
                    <textarea class="form-control" id="itemDesc" name="item_desc"></textarea>
                </div>
                <div class="form-group mt-2">
                    <label for="img">Item Img</label>
                    <input type="file" id="img" name="img" accept="image/*">
                </div>
                <div class="form-group mt-2">
                    <label for="qty">Item Qty</label>
                    <input type="number" class="form-control" id="qty" name="qty" placeholder="Enter item qty">
                </div>
                <div class="form-group mt-2">
                    <label for="category">Item Category</label>
                    <select name="category_id" class="form-control">
                        <option value="">Select Category</option>
                        <?php
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<option value="' . $row['id'] . '">' . htmlspecialchars($row['name']) . '</option>';
                        }
                        ?>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </form>

        </div>
    </main>
</div>
<?php include('layout/footer.php');
