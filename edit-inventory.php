<?php include('layout/header.php'); ?>
<?php include('db_connection.php');

$query = "SELECT * FROM category";
$result = mysqli_query($conn, $query);

$inventory_id = $_GET['id'];
$query_2 = "
SELECT 
    inventory.id,
    inventory.sn_no,
    inventory.item_name,
    inventory.item_desc,
    inventory.img,
    inventory.qty,
    inventory.created_at,
    inventory.category_id,
    category.name As category_name
FROM
    inventory
JOIN
    category ON inventory.category_id = category.id
WHERE inventory.id=" . $inventory_id . ";";

$result_2 = mysqli_query($conn, $query_2);
$inventory_data = mysqli_fetch_assoc($result_2);
?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">

            <form class="mt-4" method="POST" action="submit_edited_inventory.php" enctype="multipart/form-data">
                <input type="hidden" name="id" value = "<?php echo htmlspecialchars($inventory_data['id']); ?>">

                <div class="form-group mt-2">
                    <label for="sn No">SN No</label>
                    <input type="text" class="form-control" id="snNo" name="sn_no" placeholder="Enter SN no of Item" 
                    value="<?php echo htmlspecialchars($inventory_data['sn_no']); ?>" required>
                </div>
                <div class="form-group mt-2">
                    <label for="itemName">Item Name</label>
                    <input type="text" class="form-control" id="itemName" name="item_name" placeholder="Enter item name" 
                    value="<?php echo htmlspecialchars($inventory_data['item_name']); ?>" required>
                </div>
                <div class="form-group mt-2">
                    <label for="itemDesc">Item Desc</label>
                    <textarea class="form-control" id="itemDesc" name="item_desc"><?php echo htmlspecialchars($inventory_data['item_desc']); ?></textarea>
                </div>
                <div class="form-group mt-2">
                    <label for="img">Item Img</label>
                    <input type="file" id="img" name="img" accept="image/*">
                    <p>Current Image: <img src="<?php echo htmlspecialchars($inventory_data['img']); ?>" alt="img" width="2 0%"></p>
                </div>
                <div class="form-group mt-2">
                    <label for="qty">Item Qty</label>
                    <input type="number" class="form-control" id="qty" name="qty" placeholder="Enter item qty" 
                    value="<?php echo htmlspecialchars($inventory_data['qty']); ?>" required>
                </div>
                <div class="form-group mt-2">
                    <label for="category">Item Category</label>
                    <select name="category_id" class="form-control" required>
                        <option value="<?php echo htmlspecialchars($inventory_data['category_id']); ?>"><?php echo htmlspecialchars($inventory_data['category_name']); ?></option>
                        <?php
                        while ($row = mysqli_fetch_assoc($result)) {
                            $selected = ($inventory_data['category_id'] == $row['id']) ? 'selected' : '';
                            echo '<option value="' . $row['id'] . '" ' . $selected . '>' . htmlspecialchars($row['name']) . '</option>';
                        }
                        ?>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary mt-3">Edit</button>
            </form>

        </div>
    </main>
</div>
<?php include('layout/footer.php');
