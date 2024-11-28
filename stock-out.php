<?php include 'session_check.php';?>
<?php include('layout/header.php'); ?>
<?php include('db_connection.php');

$query = "
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
";
$result = mysqli_query($conn, $query);

?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
        <?php if (isset($_GET['alert']) && $_GET['alert'] == 'insufficient') {
            echo"<div class='alert alert-danger'>Insufficient item qty to stock out!</div>";
        } ?> 
            <form class="mt-4" method="POST" action="/inventory-system/stock_out_save.php">
                <div class="form-group mt-2">
                    <label for="id">Item Name : </label>
                    <select name="id" id="id" class="form-control">
                        <?php foreach ($result as $r): ?>
                        <option value="<?php echo $r['id']; ?>"><?php echo $r['item_name'];?></option>
                        <?php endforeach;?>
                    </select>
                </div>

                <div class="form-group mt-2">
                    <label for="qty">Qty : </label>
                    <input type="number" name="qty" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </form>

        </div>
    </main>
</div>
<?php include('layout/footer.php');
