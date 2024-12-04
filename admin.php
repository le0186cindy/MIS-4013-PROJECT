<html lang="en">
<?php
    include 'components/head.php';
    require_once 'scripts/db-products.php';

    if (isset($_POST['actionType'])) {
        if ($_POST['actionType'] == 'add') {
            if (add_product($_POST['pName'], $_POST['pDescription'], $_POST['pPrice'], $_POST['pImage'])) {
                echo '<div class="alert alert-success alert-dismissible mx-5" role="alert">Successfully added a product.<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
            } else {
                echo '<div class="alert alert-danger alert-dismissible mx-5" role="alert">Error.<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
            }
        } else if ($_POST['actionType'] == 'delete') {
            if (delete_product($_POST['pID'])) {
                echo '<div class="alert alert-success alert-dismissible mx-5" role="alert">Successfully deleted a product.<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
            } else {
                echo '<div class="alert alert-danger alert-dismissible mx-5" role="alert">Error.<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
            }
        }
    }

    $products = get_all_products();
?>
<body class="d-flex flex-column min-vh-100">

<h2>Temporary Admin Page</h2>

<div class="bg-light my-2 mx-5">
    <h2>Manage products</h2>
    <h4>Add a product</h4>
    <form method="post" action="">
        <div class="form-group">
            <label for="pName">Product Name</label>
            <input id="pName" class="form-control" name="pName" type="text">
        </div>
        <div class="form-group">
            <label for="pDescription">Product Description</label>
            <textarea id="pDescription" class="form-control" name="pDescription" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="pPrice">Product's Price</label>
            <input id="pPrice" name="pPrice" type="number" step=".01" class="form-control">
        </div>
        <div class="form-group">
            <label for="pImage">Product's Image</label>
            <input id="pImage" name="pImage" type="text" class="form-control" placeholder="https://url.to/image.png or path to image">
        </div>
        <input type="hidden" name="actionType" value="add">
        <button type="submit" class="btn btn-primary mt-2">Submit</button>
    </form>
    
    <h4>Remove a product</h4>
    <form action="" method="post">
        <!-- drop down -->
         <select name="pID">
            <option value="">Choose product to delete</option>
            <?php
                foreach ($products as $product) {
            ?>
                <option value="<?php echo $product['product_id']?>"><?php echo $product['product_name']?></option>
            <?php
                }
            ?>
         </select>
         <input type="hidden" name="actionType" value="delete">
         <button type="submit" class="btn btn-primary mt-2">Submit</button>
    </form>
</div>

<div class="bg-light my-2 mx-5">
    <h2>Manage customers - Work in Progress</h2>
    <h4>Add a customer</h4>
    <form>

    </form>
    <h4>Remove a customer</h4>
    <form>

    </form>
</div>

</body>

<?php
    include 'components/footer.php';
?>
</html>