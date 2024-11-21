<?php include('layout/header.php'); ?>
<?php include('db_connection.php'); ?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Inventory</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">This is the inventory page where you are able to create, update and delete items</li>
            </ol>
            <div class="row">
                <div class="col-12 mb-3 text-end">
                    <a href="/inventory-system/create-inventory.php" class="btn btn-primary text-white ">Create Item</a>
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
                                        <th>SN</th>
                                        <th>Item Name</th>
                                        <th>Item Desc</th>
                                        <th>Img</th>
                                        <th>Qty</th>
                                        <th>Created At</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>SN</th>
                                        <th>Item Name</th>
                                        <th>Item Desc</th>
                                        <th>Img</th>
                                        <th>Qty</th>
                                        <th>Created At</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <a href="" class="btn btn-warning">Edit</a>
                                            <a href="" class="btn btn-danger">Edit</a>
                                        </td>
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
