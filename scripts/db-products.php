<?php
    // ALL FUNCTIONS RELATED TO PRODUCTS
    require("util-db.php");
    
    function get_all_products() {
        $sql = "SELECT * FROM products";
        return getData($sql);
    }

    function add_product($productName, $productDescription, $productPrice, $productImage) {
        try {
            global $conn;
            $stmt = $conn->prepare("INSERT INTO products (product_name, product_description, product_price, product_img) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $productName, $productDescription, $productPrice, $productImage);
            $stmt->execute();
            $conn->close();
            return true;
        } catch (Exception $e) {
            $conn -> close();
            throw $e;
            return false;
        }
    }

    function delete_product($productID) {
        try {
            global $conn;
            $stmt = $conn->prepare("DELETE FROM products WHERE product_id = ?");
            $stmt->bind_param("s", $productID);
            $stmt->execute();
            $conn->close();
            return true;
        } catch (Exception $e) {
            $conn -> close();
            throw $e;
            return false;
        }
    }
?>
