<?php
    require_once 'scripts/db-products.php';

    $products = get_all_products();
?>

<div class="mx-5">
    <div>
        <h4>Products</h4>
    </div>
    <div class="d-flex flex-wrap gap-5">
        <?php
            foreach ($products as $product) {
        ?>
            <div class="card" style="width: 18rem;">
                <img src="<?php echo $product['product_img'] ?>" class="card-img-top" alt="..." width="200px" height="200px" style="object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $product['product_name'] ?></h5>
                    <p class="card-text"><?php echo $product['product_description'] ?></p>
                    <a href="#" class="btn btn-primary">Add to cart - <?php echo "$" . $product['product_price']?></a>
                </div>
            </div>
        <?php
            }
        ?>
    </div>
</div>
