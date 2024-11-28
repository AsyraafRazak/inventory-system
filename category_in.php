<?php include 'session_check.php';?>
<?php include('layout/header.php'); ?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">

            <form class="mt-4" method="POST" action="/inventory-system/category_in_save.php">
                <div class="form-group mt-2">
                    <label for="id">Category Name : </label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </form>

        </div>
    </main>
</div>
<?php include('layout/footer.php');
