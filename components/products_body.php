<?php
    require_once 'scripts/db-products.php';

    $products = get_all_products();
?>

<div class="mx-5">
    <div>
        <h4>Products</h4>
    </div>
    <div class="d-flex gap-5">
        <?php
            foreach ($products as $product) {
        ?>
            <div class="card" style="width: 18rem;">
                <img src="https://images-ext-1.discordapp.net/external/yfhix5ZTVfQfrXB9NzfOda_RHnpD5J-bZJikrymWC1Y/https/i.pinimg.com/736x/e9/f4/fc/e9f4fc74c5805ae6afa9f567ef9ce0ce.jpg?format=webp&width=530&height=662" class="card-img-top" alt="..." width="200px" height="200px" style="object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $product['product_name'] ?></h5>
                    <p class="card-text"><?php echo $product['product_description'] ?></p>
                    <a href="#" class="btn btn-primary">Add to cart</a>
                </div>
            </div>
        <?php
            }
        ?>
    </div>
</div>
