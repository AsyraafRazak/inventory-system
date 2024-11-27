<?php include('layout/header.php'); ?>
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
                            All Inventory
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
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>$320,800</td>
                                    </tr>
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
