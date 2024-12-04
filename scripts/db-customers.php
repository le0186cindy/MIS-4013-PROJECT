<?php
    // ALL FUNCTIONS RELATED TO CUSTOMERS
    require_once("util-db.php");

    function get_all_customers() {
        $sql = "SELECT * FROM customers";
        return getData($sql);
    }
?>