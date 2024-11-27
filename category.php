<?php include('layout/header.php'); ?>
<?php include('db_connection.php');

$sql = "SELECT * FROM category;";
$result = mysqli_query($conn, $sql);

?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Category</h1>
            <div class="row">
                <div class="col-12 mb-3 text-end">
                    <a href="/inventory-system/category_in.php" class="btn btn-success text-white ">Add Category</a>
                </div>
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Category List
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Category Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Id</th>
                                        <th>Category Name</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php foreach ($result as $r): ?>
                                        <tr>
                                            <td><?php echo $r['id']; ?></td>
                                            <td><?php echo $r['name']; ?></td>
                                            <td><a href="" class="btn btn-danger">Delete</a></td>
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
