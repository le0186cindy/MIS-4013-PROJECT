<?php
    // ALL FUNCTIONS RELATED TO PRODUCTS
    require("db-info.php");
    
    function get_all_products() {
        $conn = get_db_connection();
        try {
            $conn = get_db_connection();
            $result = mysqli_query($conn, "SELECT * FROM products");
            $conn->close();
            return $result;
        } catch (Exception $e) {
            $conn->close();
            throw $e;
        }
    }

    function add_product($productName, $productDescription, $productPrice, $productImage) {
        $conn = get_db_connection();
        try {
            $conn = get_db_connection();
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
        $conn = get_db_connection();
        try {
            $conn = get_db_connection();
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
