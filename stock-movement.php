<?php include 'session_check.php';?>
<?php include('layout/header.php'); ?>
<?php include('db_connection.php'); 

$sql = "SELECT * FROM stock_movement;";
$result = mysqli_query($conn, $sql);

?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Stock Movement</h1>
            <div class="row">
                <div class="col-12 mb-3 text-end">
                    <a href="/inventory-system/stock-in.php" class="btn btn-success text-white ">Stock In</a>
                    <a href="/inventory-system/stock-out.php" class="btn btn-danger text-white ">Stock out</a>
                </div>
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Stock Movement Log
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>Type</th>
                                        <th>SN No</th>
                                        <th>Item Name</th>
                                        <th>Desc</th>
                                        <th>Qty</th>
                                        <th>Created At</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Type</th>
                                        <th>SN No</th>
                                        <th>Item Name</th>
                                        <th>Desc</th>
                                        <th>Qty</th>
                                        <th>Created At</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php foreach ($result as $r): ?>
                                    <tr>
                                        <td><?php echo $r['type']; ?></td>
                                        <td><?php echo $r['sn_no']; ?></td>
                                        <td><?php echo $r['item_name']; ?></td>
                                        <td><?php echo $r['item_desc']; ?></td>
                                        <td><?php echo $r['qty']; ?></td>
                                        <td><?php echo $r['created_at']; ?></td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
<?php include('layout/footer.php');
