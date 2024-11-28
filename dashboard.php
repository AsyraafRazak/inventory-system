<?php include 'session_check.php';?>
<?php include('layout/header.php');
include ('db_connection.php');

//Total item
$sql_total_items = "SELECT COUNT(*) AS total_items FROM inventory;";
$result_total_items = mysqli_query($conn, $sql_total_items);
$row_total_items = mysqli_fetch_assoc($result_total_items);
$total_items = $row_total_items['total_items'];

//Total stock
$sql_total_stock = "SELECT SUM(qty) AS total_stock FROM inventory;";
$result_total_stock = mysqli_query($conn, $sql_total_stock);
$row_total_stock = mysqli_fetch_assoc($result_total_stock);
$total_stock = $row_total_stock['total_stock'];

//Total stock in
$sql_total_stock_in = "SELECT SUM(qty) AS total_stock_in FROM stock_movement WHERE type = 'Stock In';";
$result_total_stock_in = mysqli_query($conn, $sql_total_stock_in);
$row_total_stock_in = mysqli_fetch_assoc($result_total_stock_in);
$total_stock_in = $row_total_stock_in['total_stock_in'];

//Total stock out
$sql_total_stock_out = "SELECT SUM(qty) AS total_stock_out FROM stock_movement WHERE type = 'Stock Out';";
$result_total_stock_out = mysqli_query($conn, $sql_total_stock_out);
$row_total_stock_out = mysqli_fetch_assoc($result_total_stock_out);
$total_stock_out = $row_total_stock_out['total_stock_out'];

?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Dashboard</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">This is the overall summary of our stock and inventory</li>
                </ol>
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-primary text-white mb-4">
                            <div class="card-body" style="height: 120px;"><h3>Total Item <br> [<?php echo $total_items;?>]</h3></div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-warning text-white mb-4">
                            <div class="card-body" style="height: 120px;"><h3>Total Stock <br> [<?php echo $total_stock;?>]</h3></div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-success text-white mb-4">
                            <div class="card-body" style="height: 120px;"><h3>Total Stock In <br> [<?php echo $total_stock_in;?>]</h3></div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-danger text-white mb-4">
                            <div class="card-body" style="height: 120px;"><h3>Total Stock Out <br> [<?php echo $total_stock_out;?>]</h3></div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <?php include('layout/footer.php');?>