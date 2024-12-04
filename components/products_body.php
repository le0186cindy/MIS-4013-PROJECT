<?php
    require_once 'db-products.php';

    $products = get_all_products();
?>

<div class="mx-5">
    <div>
        <h4>Products</h4>
    </div>
    <div class="d-flex">
        <?php
            foreach ($products as $product) {
        ?>
            <!-- product card here-->
        <?php
            }
        ?>
    </div>
</div>